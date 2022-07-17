<?php
//This file returns the tiles for restaurants in the database and will not work in Replit
//Test this in WAMP once you have the database setup in phpMyAdmin and have adjusted your hostname correctly.
require_once '../db/db_login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

$query = "select * from restaurant";
$result = $conn->query($query);
if(!$result) die($conn->error);

$query2 = "SELECT 
	sum(r.Rating) as totalScore
    ,count(r.ReviewID) as numReview
    ,rt.RestaurantName
from review r
inner join food f on f.FoodID = r.FoodID
inner join restaurant rt on rt.RestaurantID = f.RestaurantID
group by rt.RestaurantName";
$result2 = $conn->query($query2);
//echo $result;

if(!$result2) die($conn->error);

//Example 10-4
$rows = $result->num_rows;

//echo $rows;

for($j=0; $j<$rows; ++$j) {
	$result->data_seek($j);
	$RestName = $result->fetch_assoc()['RestaurantName'].'<br>';
	if(is_null($RestName)) 
		{
			$RestName = 'No DB Connection';
		}
	$result->data_seek($j);
	$desc = $result->fetch_assoc()['Description'].'<br>';
	if(is_null($desc)) 
		{
			$desc = 'No DB Connection';
		}
	$result2->data_seek($j);
	$ratingscore = $result2->fetch_assoc()['totalScore'];
	$result2->data_seek($j);
	$ratingnum = $result2->fetch_assoc()['numReview'];
	//echo $ratingscore.'<br>';
	//echo $ratingnum;
	$avgRating = round( $ratingscore / $ratingnum, 1);
	//echo '<br>'.$avgRating;
	$test = 'this is a test';

	echo '<div class= "restaurant-card">
			<img class ="card-img" src="../../src/resources/images/restaurant-photo.jpg" alt ="Test Image">
			<div class="restaurant-description">
				<h1>'.$RestName.'</h1>
				<div class="restaurant-rating">
					<p style="text-align:center">Rating: '.$avgRating.'/10 ('.$ratingnum.' reviews)</p>
				</div>
				<p class="restaurant-paragraph">'.$desc.'</p>
				<br>
			</div>
		</div>';
}




?>
