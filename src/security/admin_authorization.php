<?php

require_once 'User.php';

$page_roles = array('admin');

session_start();

if($_SESSION['user']){
	
	$user = $_SESSION['user'];
	$username = $user->username;
	$user_roles = $user->getRoles();
	
	$found=0;
	foreach ($user_roles as $urole){
		foreach ($page_roles as $prole){
			if($urole==$prole){
				$found=1;
			}
		}
	}
	
	if(!$found){
		header("Location: unauthorized.php");
	}else{
		echo "Welcome back $username <br>";
	}
	
	//destroy_session_and_data();
	
	//echo "Welcome back $username <br>";	
	
}else{
	echo "username is not in the session<br>";
}

function destroy_session_and_data(){
	
	$_SESSION = array();
	setcookie(session_name(), '', time()-2592000, '/');
	session_destroy();
	
}


?>