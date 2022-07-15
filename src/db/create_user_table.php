<?php

require_once 'db_login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);


//code for create user table here
$userTableQuery = "create table users(
	email varchar(128) not null primary key,
	name varchar(128) not null,
	phone varchar(128) not null,
	password varchar(128) not null unique
)";

$userTableQueryResult = $conn->query($userTableQuery);
if(!$userTableQueryResult) die($conn->error);

// DROP TABLE users;

?>

