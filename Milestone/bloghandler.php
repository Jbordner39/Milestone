<?php

$link = mysqli_connect("localhost", "root", "root", "blog");

// Check Connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$fname = mysqli_real_escape_string($link, $_REQUEST['fname']);
$lname = mysqli_real_escape_string($link, $_REQUEST['lname']);
$dob = mysqli_real_escape_string($link, $_REQUEST['dob']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$user = mysqli_real_escape_string($link, $_REQUEST['user']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);

// Attempt insert query execution
$sql = "INSERT INTO blogsters (FIRST_NAME, LAST_NAME, DOB, E_MAIL, USERNAME, PASSWORD) VALUES ('$fname', '$lname', '$dob', '$email', '$user', '$password')";

if(mysqli_query($link, $sql)){
    echo "Welcome to the Blog.";
} else{
    echo "ERROR: Could not execut $sql. " .mysqli_error($link);
}

// Close Connection
mysqli_close($link);
?>
