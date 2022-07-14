<?php

require_once 'login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

//code for create user table here
$query = "create table users(
	forename varchar(128) not null,
	surname varchar(128) not null,
	username varchar(128) not null unique,
	password varchar(128) not null
)";

$result = $conn->query($query);
if(!$result) die($conn->error);

//Bill Smith
$forename = 'Bill';
$surname = 'Smith';
$username = 'bsmith';
$password = 'mysecret';

$token = password_hash($password,PASSWORD_DEFAULT); 

add_user($conn, $forename, $surname, $username, $token);

//Pauline Jones
$forename = 'Pauline';
$surname = 'Jones';
$username = 'pjones';
$password = 'acrobat';
$token = password_hash($password,PASSWORD_DEFAULT); 

add_user($conn, $forename, $surname, $username, $token);

function add_user($conn, $forename, $surname, $username, $token){
	//code to add user here
	$query = "insert into users(forename, surname, username, password) values ('$forename', '$surname', '$username', '$token')";
	$result = $conn->query($query);
	if(!$result) die($conn->error);
}


?>
