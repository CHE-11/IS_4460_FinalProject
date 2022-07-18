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
      <h1 style="text-align:center; color:white">Create an Account</h1>
      <div class = "container">
          <form class = "form-signin" role = "form" action = "" method = "post">
              <input type = "text" class = "form-control" name = "name" placeholder = "Enter your Full Name" required autofocus>
              <input type = "password" class = "form-control" name = "password" placeholder = "Enter your Password" required>
              <input type = "email" class = "form-control" name = "email" placeholder = "Enter your Email" required>
              <input type = "tel" class = "form-control" name = "tel" placeholder = "Enter your Phone Number" required>
              <div style="margin-bottom:10px;" class="flex-vertical-container">
                <div class="center"><label style="color:white;"><input type="radio" name="user" value="user">I am a User</option><label></div>
                <div class="center"><label style="color:white;"><input type="radio" name="user" value="restaurant">I am a Restaurant</option><label></div>
              </div>
              <button id = "btn-primary" type = "submit"  name = "create_new_account">Create Account</button>
              <div class="center"><p id="newuser">Already have an account?</p></div>
              <a href="login.php">
                <div id = "btn-secondary">Log In</div>
              </a>
          </form>
      </div>
    </div>
  </div>
<?php include('footer.html');?>
</body>
</html>


<?php


require_once '../db/db_login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

if (isset($_POST['create_new_account'])){
	if (isset($_POST['name']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['tel']) && isset($_POST['user'])) {
		try{
			$token = password_hash($_POST['password'], PASSWORD_DEFAULT);
      $query = "insert into users(name, email, phone, password, role) values('$_POST[name]', '$_POST[email]', '$_POST[tel]', '$token', '$_POST[user]')";
			$result = $conn->query($query);
			if(!$result) die($conn->error);
			$conn->close();
			echo "<p style='text-align:center; font-size:16px; margin: 4px 0px 4px 0px; color: #b02020;'>Account Creation Successful!!! <br>";
		}catch (Exception $e){
			echo "<p style='text-align:center; font-size:16px; margin: 4px 0px 4px 0px; color: #b02020;'>You already have an account with this email.<br>Please Sign In <br>";
		exit;
		}
	}
	else {
		echo "<p style='text-align:center; font-size:16px; margin: 4px 0px 4px 0px; color: #b02020;'>Please fill out all fields. <br>";
	}
}
	
?>
