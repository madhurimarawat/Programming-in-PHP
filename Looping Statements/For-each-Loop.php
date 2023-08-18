<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Each Loop in PHP</title>
</head>
<body>

<?php
    
# Loops are used to repeat a set of statements till a specific condition
# For each loop execute till length of array and iterate over each element
# It stops after Array is empty

echo "<p>Using For Each Loop in PHP</p>";

# Declaring Array
$arr=array(1,67,4,236,99,78,45,41,11,10);

echo "Elements of Array using For Each loop are:<br><br> ";

# Printing Numbers from Array
foreach($arr as $ele){
    echo $ele."&nbsp;";
}

echo "<br><br>Even Numbers from Array using For each loop are:<br><br> ";

# Printing Even Numbers
foreach($arr as $ele){
    if($ele%2==0){
    echo $ele."&nbsp;";}
}

?>
</body>
</html>