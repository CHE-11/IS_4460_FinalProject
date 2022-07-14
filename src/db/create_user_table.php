<?php

require_once 'db_login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);


//code for create user table here
$userTableQuery = "create table users(
	forename varchar(128) not null,
	surname varchar(128) not null,
	username varchar(128) not null unique,
	password varchar(128) not null
)";

$userTableQueryResult = $conn->query($userTableQuery);
if(!$userTableQueryResult) die($conn->error);


?>

