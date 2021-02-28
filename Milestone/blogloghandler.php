<?php

include(‘header.php’);

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "blog";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$user = $_POST['user'];
$password = $_POST['password'];

//to prevent from mysqli injection
$user = stripcslashes($user);
$password = stripcslashes($password);
$user = mysqli_real_escape_string($conn, $user);
$password = mysqli_real_escape_string($conn, $password);

$sql = "select *from blogsters where USERNAME = '$user' and PASSWORD = '$password'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if($count == 1){
    echo "<h1><center> Login successful </center></h1>";
}
elseif($count == 2){
    echo "<h1> There are multiple users registered. </h1>";
}
else{
    echo "<h1> Login failed. Invalid username or password.</h1>";
}     
$conn->close();
?>
