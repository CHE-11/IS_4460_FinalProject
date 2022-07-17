<!--
Murray
Test this in WAMP once you have the database setup in phpMyAdmin.
it won't work well in replit 
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NavBar</title>
    <link rel="stylesheet" href="../../src/css/main.css">
</head>
<div class="header"><?php include('header.html');?></div>


<!-- 
  Restaurant Name
  Reviews (number of reviews)
  Average Rating
  Restaurant Address
  Description

-->

  
<body>
  <div class="container">
    <div class="searchbar" style="border:3px solid Black;">
      <center>
        <h1>Your Favorite Restaurants in One place</h1>
        <form id='search-container'> <!--action='somefile.php' method='post'-->
          <input id='search-bar' type='text' name='restaurantSearch' placeholder='Search for Food!'>
          <input id='search-button' type='submit' value='Search'>
        </form>
      </center>
      <br>
    </div>
  </div>
<div class='container'>
	<?php
		require_once 'RestaurantTiles.php';
	?>
  <div class ="Bottom" style="float:left; width:100%;" >
    <center>
      <br>
      <p>Never Wonder What to Order Again</p>
    </center>
  </div>
</div>

<div>
  <?php include('footer.html');?>
</div>

</body>

</html>