<?php
require_once '../security/destory_session_and_data.php';
session_start();
destroy_session_and_data();
echo "<p style='text-align:center; font-size:16px; margin: 4px 0px 4px 0px; color: #b02020;'>Log Out Successful<br><a style='text-decoration:underline; font-weight:700; color:blue;' href='home.php'> Go to Home Page </a>";

?>
