<html>
<head>
  <title>User Account Settings</title>
  <link rel = "stylesheet" type = "text/css" href = "/src/css/main.css">
</head>
<div class="header"><?php include('header.html');?></div>
<body>
  <div style='justify-content: center; display: flex;'>
    <div style = 'align-items: center' class='vertical-container'>
      <h1>User Settings</h1>
      <img style='width: 20%; margin-top:3%; border-radius: 20px;' src ="/src/resources/images/profile-pic.jpg">
      <button id=btn-change-image  type = "submit" name = "change-img">Change Profile Picture</button>
      
      <h2>Edit your account information below.</h2>
    </div>
  </div>
  <div class = "container form-signin">
    <div id= 'signin-modal-container'>
      <form class = "form-signin" role = "form" 
          action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
          ?>" method = "post">
          <input type = "text" class = "form-control" 
             name = "first-name" placeholder = "Enter your First Name" 
             required autofocus></br>
        
          <input type = "text" class = "form-control" 
             name = "last-name" placeholder = "Enter your Last Name" 
             required autofocus></br>

          <input type = "text" class = "form-control" 
             name = "email" placeholder = "Enter your Email Address" 
             required autofocus></br>

          <input type = "text" class = "form-control" 
             name = "phone-number" placeholder = "Enter your Phone Number" 
             required autofocus></br>
        
          <button style = 'margin-top:15px' id = "btn-primary" type = "submit" 
             name = "info-update">Update Information</button>
        
          <div style='margin-top:15px' class='container'><p style = 'color:black' >Want to delete your account?</p></div>
        
          <button id=btn-delete-account  type = "submit" name = "create_account">Delete Account</button>
        
      </form>  
    </div>
  </div>
  <br>
  <br>
  

<div><?php include('footer.html');?></div>
</body>
</html>
