<?php

require_once 'db_login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);


//code for create user table here
$restaurantsTableQuery = "create table restaurants(
    name varchar(128) not null,
    imageURL varchar(128) not null,
    streetAddress varchar(128) not null,
    state varchar(128) not null,
    zipcode varchar(128) not null
)";

$userTableQueryResult = $conn->query($restaurantsTableQuery);
if(!$userTableQueryResult) die($conn->error);


?>