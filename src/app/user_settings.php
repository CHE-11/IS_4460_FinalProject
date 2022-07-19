<html>
<head>
  <title>User Account Settings</title>
  <link rel = "stylesheet" type = "text/css" href = "/src/css/main.css">
</head>
<div class="header"><?php include_once 'check_login_status.php';?></div>
<body>
  <div style='justify-content: center; display: flex;'>
    <div style = 'align-items: center' class='vertical-container'>
      <h1>User Account Settings</h1>
      <img style='width: 250px; height:250px; margin-top:3%; border-radius: 120px; object-fit: cover;' src =<?php 
        require_once ('src\db\db_login.php');
        $conn = new mysqli($hn, $un, $pw, $db);
        if($conn->connect_error) die($conn->connect_error);
        $query = "SELECT imagepath FROM users WHERE email = '$_SESSION[email]'";
        $result = $conn->query($query);
        if(!$result) die($conn->error);
        if($result->fetch_assoc()['imagepath'] == null){
          echo "../resources/profile_images/Default.png";
        }
        else{
            $result = $conn->query($query);
            if(!$result) die($conn->error);
            echo $result->fetch_assoc()['imagepath'];
        }
        ?>/>
      <form action="" method="post" enctype="multipart/form-data">
        <div class="vertical-container">
          <label style="margin-top:5px; text-align:center;"  for="file">Change Profile Picture</label>
          <input style="margin-top:5px; text-align:center;" type="file" name="file" id="file">
          <input style="margin-top:5px; margin-bottom:15px;" type="submit" name="submit_image" value="Submit New Profile Picture">
        </div>
      </form>
      
      <h2>Edit your account information below.</h2>
    </div>
  </div>
  <div style="align-items:center; margin-top:10px; margin-bottom:-15px;" class="flex-vertical-container"> 
    <?php 
      require_once ('src\db\db_login.php');


      if($_SESSION['logged_in'] == false){
        header("Location: login.php");
      }

      if(isset($_SESSION['email'])){
        $user_email = $_SESSION['email'];
        $conn = new mysqli($hn, $un, $pw, $db);
        if($conn->connect_error) die($conn->connect_error);
        $query = "SELECT * from `users` Where email = '$user_email'";
        $result = $conn->query($query);
        if(!$result) die($conn->error);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        $name = $row['name'];
        $email = $row['email'];
        $phone = $row['phone'];
        $role = $row['role'];
        $conn->close();
      }
    ?>
    <p style="font-weight:600;"> Your current role is: <p style="font-size: 18px; font-weight:800;"><?php echo $role; ?></p></p>
  </div>
  <div style="align-items:center;" class = "container form-signin">
    <form class = "form-signin" role = "form" action = "" method = "post">
        <input type = "text" class = "form-control" name = "name" placeholder = <?php echo $name?>  required autofocus>
        <input type = "password" class = "form-control" name = "password" placeholder = "Enter a New Password" required>
        <input type = "email" class = "form-control"  name = "email" placeholder = <?php echo $email; ?> required>
        <input type = "tel" class = "form-control"  name = "tel" placeholder = <?php echo $phone; ?> required>
        <button style = 'margin-top:15px' id = "btn-primary" type = "submit" name = "update_info" value="update">Update Information</button>
      </form>  
      <form class = "form-signin" action = "deleteAccount.php" method = "post">
        <div style='margin-top:15px' class='container'><p style = 'color:black' >Want to delete your account?</p></div>
        <button id=btn-delete-account  type = "submit" name = "delete_account" value="delete">Delete Account</button>
      </form>
    </div>
  </div>
  <br>
  <br>
  

<div><?php include('footer.html');?></div>
</body>
</html>


<?php
$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

if (isset($_POST['update_info'])){
	if (isset($_POST['name']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['tel'])) {
		try{
			$token = password_hash($_POST['password'], PASSWORD_DEFAULT);
      $query = "UPDATE users 
      SET 
        name = '$_POST[name]',
        email = '$_POST[email]',
        phone = '$_POST[tel]',
        password = '$token'
      WHERE email = '$_SESSION[email]'";
			$result = $conn->query($query);
			if(!$result) die($conn->error);
			$conn->close();
      $_SESSION['name'] = $_POST['name'];
      $_SESSION['email'] = $_POST['email'];
      $_SESSION['phone'] = $_POST['tel'];

			echo "<p style='text-align:center; font-size:16px; margin: 4px 0px 4px 0px; color: #b02020;'>Account Information Update Successful!!!<br>Refresh Page to See Changes";
		}catch (Exception $e){
			echo "<p style='text-align:center; font-size:16px; margin: 4px 0px 4px 0px; color: #b02020;'>Update Account Information Failure. Please Try Again.";
		exit;
		}
	}
  else {
    echo "<p style='text-align:center; font-size:16px; margin: 4px 0px 4px 0px; color: #b02020;'>Please fill out all fields. <br>";
  }
}

if(isset($_POST['submit_image'])){
  $uploads_dir = '../resources/profile_images/';
  $tmp_name = $_FILES['file']['tmp_name'];
  $name = $_FILES['file']['name'];
  $_SESSION['file_path'] = $uploads_dir.$name;
  move_uploaded_file($tmp_name, "$uploads_dir/$name");
  $conn = new mysqli($hn, $un, $pw, $db);
  if($conn->connect_error) die($conn->connect_error);
  $query = "UPDATE users 
      SET 
        imagepath = '$uploads_dir$name'
      WHERE email = '$_SESSION[email]'";
    $result = $conn->query($query);
    if(!$result) die($conn->error);
    $conn->close();


  echo "<p style='text-align:center; font-size:16px; margin: 4px 0px 4px 0px; color: #b02020;'>Profile Picture Update Successful!!!<br>Refresh Page to See Changes";
}
else{
  
}


?>

