<header>
    <script>
        function dropdown(){
            document.getElementById("nav-dropdown").classList.toggle("show");
        }
        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.small-user-icon')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>
</header>
<div style="background-color: #2360c9;display: flex;justify-content: center;margin-bottom: 20px;">
    <nav class="navbar">
    <div style='flex:1'>
        <a href="/src/app/home.php"><img class='logo' src="../resources/icons/FoodReviewsLogo-light.png"/></a>
    </div>
    
    <div style='flex:1'>
        <ul style= 'justify-content: center;' class="nav-links">
        <li class="nav-item"><a href="/src/app/home.php">Home</a></li>
        <li class="nav-item"><a href="/src/app/account_view.php">Account View</a></li>
        <li class="nav-item"><a href="/src/app/restaurant_view.php">Restaurant View</a></li>
        </ul>
    </div>
    <div style='flex:1'>
        <ul style= 'display:flex; justify-content: right;'>
            <div class="dropdown">
                <img onclick="dropdown()" class='small-user-icon'src=<?php 
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
                <div id="nav-dropdown" class="dropdown-content">
                    <a href="user_settings.php">Settings</a>
                    <a style="color:red; text-decoration:underline; " href="logout.php">Logout</a>
                </div>
            </div>
        </ul>
    </div>
    </nav>
</div>

