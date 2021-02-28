<?php
    include(‘header.php’);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>New Blog Post</title>
    <style>
      div {
        margin-bottom: 10px;
      }
      label {
        display: inline-block;
        width: 400px;
        text-align: left;
      }
      label textarea {
      	vertical-align:middle;
      }
    </style>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<body style="background-color:black; color:white; font-size:150%; text-align:center;">
<img src="dragon1.jfif" alt="dragon1" width="400" height="100%" style="float:left" style="vertical-align:middle">
<img src="dragon2.jfif" alt="dragon2" width="400" height="100%" style="float:right" style="vertical-align:middle">
<div>
<form action="/posthandler.php" method="post">

<label for="ptitle"><b>Title</b></label>
<input type="text" placeholder="Enter Title" name="ptitle" id="ptitle" required><br>

<label for="pdesc"><b>Description</b></label>
<input type="text" placeholder="Enter Description" name="pdesc" id="pdesc" required><br>

<label for="pdate"><b>Date</b></label>
<input type="date" placeholder="Enter Date" name="pdate" id="pdate" required><br>

<label for="pcont"><b>Post Content</b>
<textarea placeholder="Enter Post" id="pdesc" name="pdesc" rows="10" cols="50"></textarea></label><br>

<button type="submit" class="postbtn">Create Post</button>

</form>
</div>
<script>
            function nothingTyped() {
                var badWordTextBoxLength = document.getElementById('txtArea').value.length;

                if (badWordTextBoxLength == 0) {
                    alert("YOu cannot leave easily!!!Please type something ");
                    document.getElementById('txtArea').focus();
                    return false;
                }
            }
            function badWordChecker() {
                //create an array of bad words
                var badwords = ["f***", "a****", "f***"];
                var badWordTextBox = document.getElementById('txtArea');
                var badWordTextBoxValue = badWordTextBox.innerText;
                var backgroundcolor = "white";

                function isTheWordBad(value, index, array) {
                    if (value == badWordTextBoxValue) {
                        alert("hey!No badwords");
                        badWordTextBox.textContent = "";
                        return true;
                    }
                    else {                    
                        return false;
                    }

                }
                var result = badwords.filter(isTheWordBad);
            }
</script>

</body>
</html>