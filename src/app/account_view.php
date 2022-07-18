<html>
<head>
  <title>User Account Settings</title>
  <link rel = "stylesheet" type = "text/css" href = "/src/css/main.css">
</head>
<div class="header"><?php include_once 'check_login_status.php';?></div>
<body>
<!--   Profile picture and information -->
<div style='justify-content: center; display: flex; gap:20px;'>
  <div>
  <img style='height: 150px; margin-top:3%; border-radius: 20px;' src ="/src/resources/images/profile-pic.jpg">
  </div>
  
  <div style = 'display: flex; flex-direction: column; align-items: left; justify-content: center' >
    <h2>User Name Here</h2>
    <div style = 'display: flex; flex-direction: column; align-items: left; justify-content: space-around'>
      <p>Reviews: ### </p>
      <p>Followers: ###</p>
      <p>Following: ###</p>
    </div>
  </div>
</div>
<br>
  
<!-- Favorite Restaurants  -->
<h2> USER NAME Favorite Restaurants</h2>
<div class='container'>
  <div class= 'restaurant-card'>
    <img class ='card-img' src="/src/resources/images/restaurant-photo.jpg" alt ="Test Image" >
    <h1>Restaurant #1</h1>
    <p>This is a' short description of the restaurant</p>
  </div>
  <div class= 'restaurant-card'>
    <img class ='card-img' src="/src/resources/images/restaurant-photo.jpg" alt ="Test Image" >
    <h1>Restaurant #2</h1>
    <p>This is a' short description of the restaurant</p>
  </div>
  <div class= 'restaurant-card'>
    <img class ='card-img' src="/src/resources/images/restaurant-photo.jpg" alt ="Test Image">
    <h1>Restaurant #3</h1>
    <p>This is a short description of the restaurant</p>
  </div>
  <div class= 'restaurant-card'>
    <img class ='card-img' src="/src/resources/images/restaurant-photo.jpg" alt ="Test Image" >
    <h1>Restaurant #4</h1>
    <p>This is a short description of the restaurant</p>
  </div>
</div>

<br>
<br>

<!-- Recent Reviews  -->
<div class='container'>
  <hr style= 'width:80%'>
</div>
<br>
<h2> USER NAME Recent Reviews</h2>
<div class= 'container'>
  <table style="width:80%">
    <tr>
      <th style="width:20%">Restaurant Name</th>
      <th style="width:60%">Review Description</th>
      <th style="width:10%">Rating (0/5)</th>
      <th style="width:10%">Date</th>
    </tr>
    <tr>
      <td>Restaurant #1</td>
      <td>The menu was small but my kids like the mac and cheese. Could be fast and better quality but not the worst</td>
      <td id='rating'>3.4</td>
      <td>05/11/2022</td>
    </tr>
    <tr>
       <td>Restaurant #2</td>
      <td>The menu was small but my kids like the mac and cheese. Could be fast and better quality but not the worst</td>
      <td id='rating'>3.4</td>
      <td>05/11/2022</td>
    </tr>
    <tr>
       <td>Restaurant #3</td>
      <td>The menu was small but my kids like the mac and cheese. Could be fast and better quality but not the worst</td>
      <td id='rating'>3.4</td>
      <td>05/11/2022</td>
    </tr>
    <tr>
       <td>Restaurant #4</td>
      <td>The menu was small but my kids like the mac and cheese. Could be fast and better quality but not the worst</td>
      <td id='rating'>3.4</td>
      <td>05/11/2022</td>
    </tr>
    <tr>
       <td>Restaurant #5</td>
      <td>The menu was small but my kids like the mac and cheese. Could be fast and better quality but not the worst</td>
      <td id='rating'>3.4</td>
      <td>05/11/2022</td>
    </tr>
  </table>
</div>

<br>
<br>


  

<div><?php include('footer.html');?></div>
</body>
</html>

