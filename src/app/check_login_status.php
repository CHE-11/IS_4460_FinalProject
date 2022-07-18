<?php 
  session_start();
  if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
    include('header_signed_in.php');
  } 
  else {
    include('header.html');
  }
?>