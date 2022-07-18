

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NavBar</title>
    <link rel="stylesheet" href="/src/css/main.css">
</head>
<div class="header"><?php include_once 'check_login_status.php';?></div>

<body>
  <div class='container' >
    <div id='signin-modal'>
      <h1 style="text-align:center; color:white">Sign In</h1>
      <h2 id= 'signin-header'>Enter Username and Password</h2> 
      <div id= 'signin-modal-container'>
        <form class = "form-signin" role = "form" action = "" method = "post" autocomplete="off">
            <h4 class = "form-signin-heading"></h4>
            <input type = "text" class = "form-control" name = "email" placeholder = "Enter your Email" required autofocus autocomplete="off">
            <input type = "password" class = "form-control" name = "password" placeholder = "Enter your Password" required autocomplete="off">
            <button id = "btn-primary" type = "submit" name = "login">Login</button>
            <div class="center"><p id="newuser">New User?</p></div>
            <a href="create_account.php">
              <div id = "btn-secondary">Create Account</div>
            </a>
        </form>  
      </div>
    </div>

    <?php include('footer.html');?>
  </div>
</body>
</html>


<?php
require_once '../db/db_login.php';

if (isset($_POST['login'])){

  if (isset($_POST['email']) && isset($_POST['password'])) {
    // Connect to DB
    $conn = new mysqli($hn, $un, $pw, $db);
    if($conn->connect_error) die($conn->connect_error);

    //Get values from login screen
    $tmp_email = mysql_entities_fix_string($conn, $_POST['email']);
    $tmp_password = mysql_entities_fix_string($conn, $_POST['password']);

    
    //get password from DB w/ SQL
    $query = "SELECT password FROM users WHERE email = '$tmp_email'";

    $result = $conn->query($query); 
	  if(!$result) die($conn->error);

    // Check if there is a user with the given email
    $rows = $result->num_rows;
    $passwordFromDB="";
    for($j=0; $j<$rows; $j++)
    {
      $result->data_seek($j); 
      $row = $result->fetch_array(MYSQLI_ASSOC);
      $passwordFromDB = $row['password'];
	  }
    // Compare passwords
    if(password_verify($tmp_password,$passwordFromDB))
    {
      $_SESSION['email'] = $tmp_email;
      $_SESSION['logged_in'] = true;

      echo "<p style='text-align:center; font-size:16px; margin: 4px 0px 4px 0px; color: black;'>Login Successful: $tmp_email!! <br>";
      echo "<a style='text-decoration:underline; font-weight:700; color:blue;' href='home.php'> Go to Homepage </a>";
    }
    else
    {
      echo "<p style='text-align:center; font-size:16px; margin: 4px 0px 4px 0px; color: #b02020;'>Login Error: Please Confirm Email and Password and Retry. <br>";
    }	
    $conn->close();
  
  }
}  

//sanitization functions
function mysql_entities_fix_string($conn, $string){
  return htmlentities(mysql_fix_string($conn, $string));	
}

function mysql_fix_string($conn, $string){
  $string = stripslashes($string);
  return $conn->real_escape_string($string);
}

?>