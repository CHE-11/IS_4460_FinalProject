<?php

require_once 'db_login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);


function add_user($conn, $forename, $surname, $username, $token){
	//code to add user here
	$query = "insert into users(forename, surname, username, password) values ('$forename', '$surname', '$username', '$token')";

    
	$result = $conn->query($query);
	if(!$result) die($conn->error);
}

?>
