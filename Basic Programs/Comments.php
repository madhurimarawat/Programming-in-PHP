<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comments in PHP</title>
</head>
<body>

    <?php
    # Comments are for the developer not for the user
    # Comments are not executed by the compiler
    # # and // is for one line comment in PHP
    # /**/ is for Multiline Comments in  PHP

    echo "# is used for Single Line Comment in PHP.";
    echo "<br><br>// is used for Single Line Comment in PHP.";
    echo "<br><br>/* Multiline Comment */ is used for Multi Line Comment in PHP.";

    $a=1; # Storing value in a
    $b=2; # Storing value in b
    $r=$a+$b; # Storing value of addition in r
    echo "<br><br>Addition is: ". $r;

    # Comments are not displayed in browser,we can go to page source in browser to see comments
    # Due to PHP no source code is displayed
    # This is why PHP also proviedes security to code
?>

</body>
</html>