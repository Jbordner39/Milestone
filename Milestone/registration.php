<?php
    include(‘header.php’);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Registration Page</title>
    <style>
    <link rel="stylesheet" href="styles.css">
      Div {
      width: 300px; 
      height: 300px; 
      margin: 0 auto;
      }
      label {
        display: inline-block;
        width: 400px;
        text-align: left;
      }
    </style>
</head>
<body>
<body style="background-color:black; color:white; font-size:150%; text-align:center;">
<img src="dragon1.jfif" alt="dragon1" width="400" height="100%" style="float:left" style="vertical-align:middle">
<img src="dragon2.jfif" alt="dragon2" width="400" height="100%" style="float:right" style="vertical-align:middle">


<div>
<form action="/bloghandler.php" method="post">

<label for="fname"><b>First Name</b></label>
<input type="text" placeholder="Enter First Name" name="fname" id="fname" required><br>

<label for="lname"><b>Last Name</b></label>
<input type="text" placeholder="Enter Last Name" name="lname" id="lname" required><br>

<label for="dob"><b>Date of Birth</b></label>
<input type="date" placeholder="Enter Date of Birth" name="dob" id="dob" required><br>

<label for="email"><b>Email</b></label>
<input type="text" placeholder="Enter E-mail Address" name="email" id="dob" required><br>

<label for="user"><b>User Name</b></label>
<input type="text" placeholder="Create User Name" name="user" id="user" required><br>

<label for="password"><b>Password</b></label>
<input type="password" placeholder="Create Password" name="password" id="password" required><br>

<label for="passconf"><b>Confirm Password</b></label>
<input type="password" placeholder="Re-Enter Password" name="passconf" id="passconf" required><br>

<button type="submit" class="registerbtn">Register</button>
<button onclick="document.location='login.html'">Already Registered?</button>

</form>
</div>


</body>
</html>