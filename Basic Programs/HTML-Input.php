<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
</head>
<body>

<!-- Creating HTML form-->

    <form action="#" method="post">
        <label for="name">Name</label>
        <input type="text" name="name"><br><br>
        <label for="email">Email</label>
        <input type="email" name="email"><br><br>
        <label for="date">DOB</label>
        <input type="date" name="date"><br><br>
        <label for="file">Profile Picture</label>
        <input type="file" name="pic"><br><br>
        <input type="submit" name="submit">
    </form>

<!-- Taking Input using PHP-->

<?php

# This will remove warning and error related to input
error_reporting(0);

# Since most of the time php is used for backend taking input from user is very important in php
# $_POST and $_GET Super Global Array are used to get input from HTML Form

# Using post
$name= $_POST['name'];
$email= $_POST['email'];
$dob=$_POST['date'];
$pic=$_POST['pic'];

# In the start when input is not given it will give error or old information
# To remove the error error_reporting is used

echo "<p>Name is: $name </p>";
echo "Email is: ", $email;
echo "<br><br>Date of Birth is: ",$dob;
echo "<br><br>Profile Picture is: ", $pic;

# Using get(Just replace post with get)
# get method is not secure, there are some chances it may not work correctly
# If we want data to be necssarily stored in a database, we should use post method
/*$name= $_GET['name'];
$email= $_GET['email'];
$dob=$_GET['date'];
$pic=$_GET['pic'];

echo "<br>Name is: ",$name;
echo "<br><br>Email is: ", $email;
echo "<br>Date of Birth is: ",$dob;
echo "<br><br>Profile Picture is: ", $pic;*/

    ?>
</body>
</html>
