<?php

require_once '../db/db_login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

class User{
	
	public $username;
	public $roles = Array();
	
	function __construct($username){
		global $conn;
				
		$this->username = $username;
		
		$query="select * from roles where username='$username' ";
		//echo $query.'<br>';
		$result = $conn->query($query);
		if(!$result) die($conn->error);
			
		$rows = $result->num_rows;		
		
		$roles = Array();
		for($i=0; $i<$rows; $i++){
			$row = $result->fetch_array(MYSQLI_ASSOC);
			//echo $row['role']; echo '<br>';
			$roles[] = $row['role'];
		}		
		
		$this->roles = $roles;
	}

	function getRoles(){
		return $this->roles;
	}

}
?>
