<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output(Echo and Print) in PHP</title>
</head>
<body>

    <?php
    # Echo and print statement are used to print output in php

    # Echo Function
    echo "Printing using echo function";

    # Printing variable using echo 
    # For printing variable name in echo we can use , or . (Using Multiple arguments)
    $var1="pop1";
    echo "<br><br>Variable using echo is: ",$var1;

    # Printing Multiple Arguments in echo
    echo "<br><br>Printing Multiple Arguments in echo is: ",$var1," Hello";
    
    # Returning Argument from echo
    # Dosen't return any argument
    # $r=echo(2+2);
    # Parse error: syntax error, unexpected token "echo" in C:\xampp\htdocs\PHP Programming\Basic Programs\Output.php on line 22
    
    echo "<br><br>Addition of 2 and 2 is: ",(2+2);

    # Print Function
    # We cannot use , in print, it gives error
    print "<br><br>Printing using print function";

    # Printing variable using print 
    $var2="pop2";
    print "<br><br>Variable using print is: ".$var2;

    # Printing Multiple Arguments in print
    # print "<br><br>Printing Multiple Arguments in print is: ",$var2,"Hello";
    # This gives the following error as print does not take multiple arguments
    # Parse error: syntax error, unexpected token "," in C:\xampp\htdocs\PHP Programming\Basic Programs\Output.php on line 27
    
    # Returning Argument from print
    # Returns 1 as 1 is for true
    $r=print(2+6);
    print "<br><br>Value returned from print is: ".$r;

    print "<br><br>Addition of 2 and 2 is: ".(2+2);

    ?>
    
</body>
</html>