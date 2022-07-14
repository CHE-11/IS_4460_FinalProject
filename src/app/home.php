
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
<div class="Top" style="border:3px solid Black;">
  <center>
    <h1>Your Favorite Restaurants in One place</h1>
    <form> <!--action='somefile.php' method='post'-->
      Search For a Restaurant <input type='text' name='restaurantSearch'>
      <input type='submit' value='Search'>
    </form>
  </center>
  <br>
</div>
<div class="Left" style="float:left; width:33%; ">
  <h1>Restaurant #1</h1>
  <p>This is a short description of the restaurant</p>
  <img src="/src/resources/images/restaurant-photo.jpg" alt ="Test Image" width="200" height="150">
  <br>
</div>

<div class="Middle" style="float:left; width:33%;">
  <h1>Restaurant #2</h1>
  <p>This is a short description of the restaurant</p>
  <img src="/src/resources/images/restaurant-photo.jpg" alt ="Test Image" width="200" height="150">
  <br>
</div>

<div class="Right" style="float:left; width:33%;">
  <h1>Restaurant #3</h1>
  <p>This is a short description of the restaurant</p>
  <img src="/src/resources/images/restaurant-photo.jpg" alt ="Test Image" width="200" height="150">
  <br>
</div>

<div class ="Bottom" style="float:left; width:100%;" >
  <center>
    <br>
    <p>Never Wonder What to Order Again</p>
  </center>
</div>
<div><?php include('footer.html');?></div>
</body>

</html>