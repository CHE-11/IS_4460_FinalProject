<?php
  if($_POST['email']=='cool' && $_POST['password'] == 'cool'){
    header('location: home.php');
  }

  
?>

<head>
  <title>Login Page</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel = "stylesheet" type = "text/css" href = "/src/css/main.css">

</head>

  <div class="header"><?php include('header.html');?></div>
    
  <div id="signin-container" class ='container'>
    <div class = 'signin-modal'>
      <h2 id= 'signin-header'>Enter Username and Password</h2> 
    <div class = "container form-signin">
  
    <div id= 'signin-modal-container' class = "container">
      <form class = "form-signin" role = "form" 
          action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
          ?>" method = "post">
          <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
          <input type = "text" class = "form-control" 
             name = "email" placeholder = "Enter your Email" 
             required autofocus></br>
          <input type = "password" class = "form-control"
             name = "password" placeholder = "Enter your Password" required>
          <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
             name = "login">Login</button>
          <div class="center"><p id="newuser">New User?</p></div>
          <button id=create_account class = "btn btn-lg btn-primary btn-block" type = "submit" name = "create_account">Create Account</button>
      </form>  
        
      
    </div>
        

    
  </body>
  
	

</html>