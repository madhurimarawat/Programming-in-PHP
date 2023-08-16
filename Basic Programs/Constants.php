<!-- Code can be written in HTML as well-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constant</title>
</head>
<body>
<?php

# It is an identifier whose value cannot be changed during the execution of a program
# It start with letter or _ except $ else it become variable

# Defining a Constant Lowercase
define("Name","abc");
echo "Constant is: ",Name;

# Defining a Constant Uppercase
# No issues as PHP is Case Sensitive so name and NAME are not same
define("NAME","xyz");
echo "<br><br>Constant is: ",NAME;

# rying to change value of a Constant
# define("Name","xyz");
# This gives the following error as constant value cannot be changed
# Warning: Constant Name already defined in C:\xampp\htdocs\PHP Programming\Basic Programs\Constants.php on line 20

# Defining a Constant with case insensitivity
# define("Name1","abc",true);
# This gives the following error
# Warning: define(): Argument #3 ($case_insensitive) is ignored since declaration of case-insensitive constants is no longer supported in C:\xampp\htdocs\PHP Programming\Basic Programs\Constants.php on line 20

# Defining a Constant with $ sign
# define($con,12);
# This gives the following error
# Warning: Undefined variable $con in C:\xampp\htdocs\PHP Programming\Basic Programs\Constants.php on line 34
?> 
</body>
</html>