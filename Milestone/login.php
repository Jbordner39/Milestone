<?php
    include(‘header.php’);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<link rel="stylesheet" href="styles.css">
<title>Login</title>
<script>
function validateForm() {
  var x = document.forms["Login"]["user"].value;
  if (x == "" || x == null) {
    alert("Username must be filled out");
    return false;
  }
}
function validateForm() {
  var x = document.forms["Login"]["password"].value;
  if (x == "" || x == null) {
    alert("Password must be filled out");
    return false;
  }
}
</script>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<body style="background-color:black; color:white; font-size:150%; text-align:center;">
<img src="dragon1.jfif" alt="dragon1" width="400" height="100%" style="float:left" style="vertical-align:middle">
<img src="dragon2.jfif" alt="dragon2" width="400" height="100%" style="float:right" style="vertical-align:middle">

<form name="Login" action="/blogloghandler.php" onsubmit="return validateForm()" method="post">
	Username:  <input type="text" placeholder="Enter Username" name="user" /><br>
	Password:  <input type="password" placeholder="Enter Password" name="password" /><br>
	<input type="submit" value="Login" />
	<button type="button" onclick="document.location='registration.html'" formnovalidate>Need to Register?</button>

</form>

</body>
</html>