<?php

require_once 'db_login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);



function add_user($conn, $name, $email, $phone, $token){
	//code to add user here
	$query = "insert into users(name, email, phone, password) values ('$name', '$email', '$phone', '$token')";
	$result = $conn->query($query);
	if(!$result) die($conn->error);
}

?>

<!-- insert into users(name, email, phone, password) values ('Connor Eaton', 'connor.eaton@hotmail.com','4067948957', 'cool'); -->
