<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "myDB";

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
$retrieve = "SELECT FROM users WHERE username='$user_name'";
if($retrieve == "NULL")
{
		echo "Invalid user_name";
	include "get_started.html";
}
else {
	
	$sql = "INSERT INTO kickstart (user_name, webname, url, category, accuracy, reliable, comp, inter, was, views)
	VALUES ('$user_name', '$webname', '$url', '$category', '$accuracy', '$reliable', '$comp', '$inter', '$was', '$views')";
	include "Home.html";

	
}

mysqli_close($conn);
?>