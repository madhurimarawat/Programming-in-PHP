<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Input in PHP</title>
</head>
<body>
    <h1>User Input in PHP </h1>

    <!-- The get method sends data in the URL query string, the data is appended at the end of query string -->
    <!-- Sensitive information like credit card or password is not taken using this method -->

      <h2>Using Get method</h2>

    <form action="Thank-You.php" method="get">
        <label for="Username">Username</label>
        <input type="text" name="Username">
        <input type="submit" name="Submit">

    <!-- The post method does not sends data in the URL query string, the data is not appended at the end of query string but information is displayed -->
    <!-- Sensitive information like credit card or password is taken using this method -->
    <!-- This method is more Secure -->

        <h2>Using Post method</h2>

    <form action="Thank-You.php" method="post">
        <label for="Username">Username</label>
        <input type="text" name="Username">
        <input type="submit" name="Submit">


</body>
</html>