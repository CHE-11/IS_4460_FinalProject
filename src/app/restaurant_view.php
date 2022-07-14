
<html>
  <head>
    <title>Page Title</title> 
    <link rel = "stylesheet" type = "text/css" href = "/src/css/main.css">
  </head>  
  <body>
  <div class="header"><?php include('header.html');?></div>
  
  <div style='justify-content: center; display: flex;'>
    <div style = 'align-items: center' class='vertical-container'>
      <h1>Welcome to Your Restaurant Page</h1>
      <img style='width: 50%; margin:3%' src ="/src/resources/images/restaurant-photo.jpg">
      <h2>Select an appropriate button from below.</h2>
    </div>
  </div>

  <div style='margin-top: 40px' class='container'>
    <div style='row-gap: 25px' class='vertical-container'>
      <button id='btn-primary' type="button">Create Menu</button>
      <button id='btn-primary' type="button">View Menu</button>
      <button id='btn-primary' type="button">Delete Menu</button> 
      <button id='btn-primary' type="button">View Followers</button>
      <button id='btn-primary' type="button">View Reviews</button>
      <button id='btn-primary' type="button">Pay Fees</button>
      <br>
      <br>
      
    </div>
  </div>
    
    <!-- Close of HTML code and moving to php code for forms -->
<div><?php include('footer.html');?></div>
</body>   
</html>
