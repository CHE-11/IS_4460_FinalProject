<html>
<head>
  <title>Delete Account</title>
  <link rel = "stylesheet" type = "text/css" href = "/src/css/main.css">
</head>
<div class="header"><?php include('header.html');?></div>


<?php
session_start();
if (isset($_POST['delete_account'])) {

  try{
    require_once '../db/db_login.php';
    require_once '../security/destory_session_and_data.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    if($conn->connect_error) die($conn->connect_error);
    $query = "DELETE FROM users WHERE email = '$_SESSION[email]'";
    $result = $conn->query($query);
    if(!$result) die($conn->error);
    $conn->close();
    destroy_session_and_data();
    echo "<p style='text-align:center; font-size:16px; margin: 4px 0px 4px 0px; color: #b02020;'>Account Deleted Successfully!!!<br><a style='text-decoration:underline; font-weight:700; color:blue;' href='home.php'> Go to Home Page </a>";
  }catch (Exception $e){
    echo "<p style='text-align:center; font-size:16px; margin: 4px 0px 4px 0px; color: #b02020;'>Delete Account Failure. Please Try Again.";
  exit;
  }
}
else{
  echo "failure";
}
?>

<div><?php include('footer.html');?></div>
</body>
</html>

