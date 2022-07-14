<?php
  if($_POST['email']=='cool' && $_POST['password'] == 'cool'){
    header('location: home.php');
  }
  
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NavBar</title>
    <link rel="stylesheet" href="/src/css/main.css">
</head>
  <div class="header"><?php include('header.html');?></div>


<body>
  <div class='container' >
    <div id='signin-modal'>
      <div class = 'container'>
        <h2 id= 'signin-header'>Enter Username and Password</h2> 
      </div>
      <div class = "container form-signin">
        <div id= 'signin-modal-container'>
          <form class = "form-signin" role = "form" 
              action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
              ?>" method = "post">
              <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
              <input type = "text" class = "form-control" 
                 name = "email" placeholder = "Enter your Email" 
                 required autofocus></br>
              <input type = "password" class = "form-control"
                 name = "password" placeholder = "Enter your Password" required>
              <button id = "btn-primary" type = "submit" 
                 name = "login">Login</button>
              <div class="center"><p id="newuser">New User?</p></div>
              <button id=btn-create-account  type = "submit" name = "create_account">Create Account</button>
          </form>  
        </div>
      </div>
    </div>
  </div>
<div><?php include('footer.html');?></div>
</body>
  
	

</html>