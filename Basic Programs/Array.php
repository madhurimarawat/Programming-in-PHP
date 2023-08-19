<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array in PHP</title>
</head>
<body>

<?php

echo "<p>Array in PHP</p>";

# Array is the object which stores multiple values
# Items have same data type 
# Indexing starts from 0
# In PHP, there are three types of arrays:

# 1. Indexed arrays - Arrays with a numeric index
# Creating Array
$arr=array("hello","abc","xyz","lko");

# We cannot print array directly, foreach loop is used for this
echo "<br>1. Indexed Array is:<br> <br> ";
foreach($arr as $ele){
    echo $ele."&nbsp";
}

# Accessing Items via indexing
echo "<p>Accessing Elements via Indexing</p>";
echo "First element is: ".$arr[0];
echo "<br><br>Third element is: ".$arr[2];
# Count is used to get length of array
echo "<br><br>Last element is: ".$arr[count($arr)-1];

# 2. Associative arrays - Arrays with named keys
# These types of arrays are similar to the indexed arrays but instead of linear storage, every value can be assigned with a user-defined key of string type.

# Creating Array
# First we give index, then value
$arr2=array("One"=>"hello","Two"=>"abc","Three"=>"xyz","Four"=>"lko");

# We cannot print array directly, foreach loop is used for this
echo "<br><br><br>2. Associate Array is:<br><br> ";
foreach($arr2 as $ind=>$ele){
    echo "Index is ".$ind." and value is ".$ele."<br><br>";
}

# Accessing Items via indexing
echo "Accessing Elements via Indexing";
echo "<br><br>First element is: ".$arr2["One"];
echo "<br><br>Third element is: ".$arr2["Two"];
# end is used to get last element of array
echo "<br><br>Last element is: ".end($arr2);

# Multidimensional arrays - Arrays containing one or more arrays
# Multi-dimensional arrays are such arrays that store another array at each index instead of a single element.
# In other words, we can define multi-dimensional arrays as an array of arrays.
# As the name suggests, every element in this array can be an array and they can also hold other sub-arrays within.
# Arrays or sub-arrays in multidimensional arrays can be accessed using multiple dimensions. 

# Creating Array
# First we give index, then value
$arr3=array(array("One"=>"hello","Two"=>"abc","Three"=>"xyz","Four"=>"lko"),
   array("One1"=>"hello1","Two2"=>"abc2","Three3"=>"xyz3","Four4"=>"lko4"));

# We cannot print array directly, foreach loop is used for this
echo "<br><br><br>3. Multi-dimensional Array is:<br><br> ";

# To get First Array
$i=0;
echo "First Array of Multidimensional Array is:<br><br>";
foreach($arr3[$i] as $ind=>$ele){
    echo "Index is ".$ind." and value is ".$ele."<br><br>";
}

# To get Second Array
$i++;
echo "<br>Second Array of Multidimensional Array is:<br><br>";
foreach($arr3[$i] as $ind=>$ele){
    echo "Index is ".$ind." and value is ".$ele."<br><br>";
}

# Accessing Items via indexing
echo "<br>Accessing Elements via Indexing";
echo "<br><br>First element of first array is: ".$arr3[0]["One"];
echo "<br><br>Third element of second array is: ".$arr3[1]["Two2"];
# end is used to get last element of array
echo "<br><br>Last element of first array is: ".end($arr3[0]);
echo "<br><br>Last element of second array is: ".end($arr3[1]);

?>
    
</body>
</html>