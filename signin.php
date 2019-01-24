<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mydb";
$uname = $pwd =   "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
  $email = test_input($_POST["uname"]);
  $pwd = test_input($_POST["pwd"]);
 
 

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


$sql = "SELECT * FROM users WHERE username = '$uname'";
	
if ($result=mysqli_query($conn,$sql)) 
{
	$row=mysqli_fetch_row($result);
	
   
	
	
	if(strcmp($row[3],$pwd) == 0)
	{

				echo "successfull";
		
		include "Home.html";
		
	}
	else{
		echo "Invalid password";
		include "signinpage.html";
	}
}
	else
{
	
	echo "Invalid user name";
	include "signinpage.html";
}










mysqli_close($conn);
?>