<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mydb";
$name = $uname = $email = $pwd =  $gender = $country = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $uname = test_input($_POST["uname"]);
  $email = test_input($_POST["email"]);
  $pwd = test_input($_POST["pwd"]);
  $gender = test_input($_POST["gender"]);
  $country = test_input($_POST["country"]);
 

}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// Create connection
$conn = new mysqli($servername, $username, $password,$database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


	$sql = "INSERT INTO users (name, username, email, password,  gender, country)
	VALUES ('$name', '$uname','$email', '$pwd',  '$gender', '$country')";
	
if ($conn->query($sql) === TRUE) 
	{

				echo "successfull";
		
		include "Home.html";
		
	}
	else
{
	
	echo "Invalid user name";
	include "register.html";
}










mysqli_close($conn);
?>