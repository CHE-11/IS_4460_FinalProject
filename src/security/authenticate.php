<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NavBar</title>
    <link rel="stylesheet" href="/src/css/main.css">
</head>
  <div class="header"><?php include('C:\Users\Connor\Documents\MEGA\‎School\IS 4460 - Web Based Applications\GroupProject\IS_4460_FinalProject\src\app\header.html');?></div>
  


<body>
	<div class='container'>
		<p> Authenticate Page <p>
	</div>
    <?php include('C:\Users\Connor\Documents\MEGA\‎School\IS 4460 - Web Based Applications\GroupProject\IS_4460_FinalProject\src\app\footer.html');?>
</body>
</html>

<?php
// if (isset($_POST['username']) && isset($_POST['password'])) {
	

// require_once ('src\db\db_login.php');
// require_once '../security/User.php';
// $conn = new mysqli($hn, $un, $pw, $db);
// if($conn->connect_error) die($conn->connect_error);

// if (isset($_POST['username']) && isset($_POST['password'])) {
	
// 	//Get values from login screen
// 	$tmp_username = mysql_entities_fix_string($conn, $_POST['username']);
// 	$tmp_password = mysql_entities_fix_string($conn, $_POST['password']);
	
// 	//get password from DB w/ SQL
// 	$query = "SELECT password FROM users WHERE username = '$tmp_username'";
	
// 	$result = $conn->query($query); 
// 	if(!$result) die($conn->error);
	
// 	$rows = $result->num_rows;
// 	$passwordFromDB="";
// 	for($j=0; $j<$rows; $j++)
// 	{
// 		$result->data_seek($j); 
// 		$row = $result->fetch_array(MYSQLI_ASSOC);
// 		$passwordFromDB = $row['password'];
	
// 	}
	
// 	//Compare passwords
// 	if(password_verify($tmp_password,$passwordFromDB))
// 	{
// 		echo "successful login<br>";
		
// 		$user = new User($tmp_username);

// 		session_start();
// 		$_SESSION['user'] = $user;
		
// 		echo "<a href='continue2.php'> Continue </a>";
// 	}
// 	else
// 	{
// 		echo "login error<br>";
// 	}	
	
// }

// $conn->close();


// //sanitization functions
// function mysql_entities_fix_string($conn, $string){
// 	return htmlentities(mysql_fix_string($conn, $string));	
// }

// function mysql_fix_string($conn, $string){
// 	$string = stripslashes($string);
// 	return $conn->real_escape_string($string);
// }



?>