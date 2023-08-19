<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Website</title>
</head>
<body>

<!-- Instead of writing all the codes in one index file, we ditribute that in different PHP files -->
<!-- include and require are used to add PHP files in HTML-->
<!-- This Makes the website easier to manage-->
 
 <?php

    # If we set error_reporting to false, it will not show any error even if file is missing
    # error_reporting(0);

    # Using include-include allows the script to be exeuted even if the specified file is not found
    include 'Header.php';

    # Using require-require does not allows the script to be exeuted even if the specified file is not found
    # It first check if specified file exists and is readable and then execute
    require 'Navigation-Bar.php';

    require 'Main-Content.php';

    # Now if we try without creating file for footer

    # Include dosen't give any error,it only shows warning
    # Also execution of statement continues
    # include 'Footer.php';
    # Include gives the following error
    # Warning: include(Footer.php): Failed to open stream: No such file or directory in C:\xampp\htdocs\PHP Programming\Web Application Functions\Index.php on line 31
    # Warning: include(): Failed opening 'Footer.php' for inclusion (include_path='C:\xampp\php\PEAR') in C:\xampp\htdocs\PHP Programming\Web Application Functions\Index.php on line 31

    # require 'Footer.php';
    # Execution of statement stops
    # Require gives the following error
    # Warning: require(Footer.php): Failed to open stream: No such file or directory in C:\xampp\htdocs\PHP Programming\Web Application Functions\Index.php on line 32
    # Fatal error: Uncaught Error: Failed opening required 'Footer.php' (include_path='C:\xampp\php\PEAR') in C:\xampp\htdocs\PHP Programming\Web Application Functions\Index.php:32 Stack trace: #0 {main} thrown in C:\xampp\htdocs\PHP Programming\Web Application Functions\Index.php on line 32
 
    # After Creating file
    include 'Footer.php';

   ?> 
    
</body>
</html>