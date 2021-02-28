<?php

include(‘header.php’);

$link = mysqli_connect("localhost", "root", "root", "blog");

// Check Connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$ptitle = mysqli_real_escape_string($link, $_REQUEST['ptitle']);
$pdesc = mysqli_real_escape_string($link, $_REQUEST['pdesc']);
$pcont = mysqli_real_escape_string($link, $_REQUEST['pcont']);
$pdate = mysqli_real_escape_string($link, $_REQUEST['pdate']);


// Attempt insert query execution
$sql = "INSERT INTO blog_posts (postTitle, postDesc, postCont, postDate) VALUES ('$ptitle', '$pdesc', '$pcont', '$pdate')";

if(mysqli_query($link, $sql)){
    echo "Welcome to the Blog.";
} else{
    echo "ERROR: Could not execut $sql. " .mysqli_error($link);
}

// Close Connection
mysqli_close($link);
?>