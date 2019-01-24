<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mydb";
$user_name = $webname = $url = $category = $accuracy = $reliable = $comp = $inter = $was = $views = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $user_name = test_input($_POST["username"]);
  $webname = test_input($_POST["webname"]);
  $url = test_input($_POST["url"]);
  $category = test_input($_POST["category"]);
  $accuracy = test_input($_POST["accuracy"]);
  $reliable = test_input($_POST["reliable"]);
  $comp = test_input($_POST["comp"]);
  $inter = test_input($_POST["inter"]);
  $was = test_input($_POST["was"]);
  $views = test_input($_POST["views"]);
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$accuracy = (int)$accuracy;
$reliable = (int)$reliable;
$comp = (int)$comp;
$inter = (int)$inter;
$was = (int)$was ;
// Create connection
$conn = new mysqli($servername, $username, $password,$database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$retrieve = "SELECT username FROM users WHERE username='$user_name'";

if($result=mysqli_query($conn,$retrieve))
{
	$rating = ($accuracy+$reliable+$comp+$inter+$was)/5;
	$sql = "INSERT INTO kickstart (user_name, webname, url, category, accuracy, reliable, comp, inter, was,rating, views)
VALUES ('$user_name', '$webname', '$url', '$category', '$accuracy', '$reliable', '$comp', '$inter', '$was', '$rating','$views')";
	
	if ($conn->query($sql) === TRUE) 
	{
		// $check = "SELECT web_name FROM websites WHERE web_name = '$webname'";
		// if($conn->query($check) === TRUE)
		// {
			// $insert = "INSERT INTO websites (web_name, URL) VALUES ('$webname','$url')";
			// if($conn->query($check) === TRUE)
			// {
				echo "successfull";
			// }
		include "Home.html";
		
	}
	else
{
	
	echo "Invalid user name";
	include "get_started.html";
}
}






mysqli_close($conn);
?>