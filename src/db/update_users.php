<?php

require_once 'db_login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);


function add_user($conn, $forename, $surname, $email, $phone){
	//code to add user here
    # select from the user table where forename = $forename and surname = $surname
    $query = "SELECT * FROM users WHERE forename = '$forename' AND surname = '$surname'";
    $result = $conn->query($query);
    if (!$result) die($conn->error);

    # update the user table with the new information
    $rows = $result->num_rows;
    if ($rows > 0) {
        echo "User already exists";
    } else {
        $query = "INSERT INTO users (forename, surname, email, phone) VALUES ('$forename', '$surname', '$email', '$phone')";
        $result = $conn->query($query);
        if (!$result) die($conn->error);
        echo "User added";
    }

    # close the connection
    $result->close();
    
}

?>
