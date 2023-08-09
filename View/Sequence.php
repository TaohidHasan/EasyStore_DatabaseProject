<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Sequence.css">
    <title>Sequence</title>
</head>
<body>
<?php

include '../View/Header.php';
?>
<h1>Customer insertion</h1>
<form action="../Controller/SequenceCheck.php" method="post">
            <label for="fname">Fisrt Name:</label>
            <input id="fname" type="text" name="fname" required>
            <br>
            <br>
            <label for="lname">Last Name:</label>
            <input id="lname" type="text" name="lname" required>
            <br>
            <br>
            <label for="phn">Phone Number:</label>
            <input id="phn" type="text" name="phn" required>
            <br>
            <br>
            
           
            <input class="submit" type="submit" name="customer" value="Register">
            <br>
            <br>
</form>

<h1>Location insertion</h1>
<form action="../Controller/SequenceCheck.php" method="post">
            <label for="city">City:</label>
            <input id="city" type="text" name="city" required>
            <br>
            <br>
            <label for="street">Street:</label>
            <input id="street" type="text" name="street" required>
            <br>
            <br>
            <input class="submit" type="submit" name="location" value="Register">
</form>
</body>
</html>