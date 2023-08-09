<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/PlSql.css">

    <title>PLSQL</title>
</head>
<body>
<?php

include "../Controller/PlSqlCheck.php";


include '../View/Header.php';
?>
<div class="title">
    <h1>Procedures and function</h1>
</div>
<div class="heading-table">
    <p>Increase employees's salary</p>
</div>
<div class="info">
   
<form action="" method="POST" name="form1" >
    <label for="eid">Employee ID: </label>
    <input type="number" id="eid" name="eid" requird>
    
    <label for="esal">New Salary: </label>
    <input type="number" id="esal" name="esal" required>
    
    <br><br>
    <input class="submit" type="submit" id="submit1" name="submit1" value="Submit">
</form>

</div>

<!-- 2nd ques -->
<div class="heading-table">
    <p>Delete customer by giving input his / her id</p>
</div>
<div class="info">
   
<form action="" method="POST"  name="form2" required>
    <label for="cid">Customer ID: </label>
    <input type="number" id="cid" name="cid">
   
    <br><br>
    <input class="submit" type="submit" id="submit2" name="submit2" value="Submit">
</form>

</div>

<!-- 3rd ques -->
<div class="heading-table">
    <p>Add a sale</p>
</div>
<div class="info">
   
<form action="" method="POST" name="form3">
    <label for="sid">Sales ID: </label>
    <input type="number" id="sid" name="sid" required>
    

    <label for="pid">Product ID: </label>
    <input type="number" id="pid" name="pid" required>
   
    <label for="quan">Quantity </label>
    <input type="number" id="quan" name="quan" required>
    
    <label for="eid">Employee ID: </label>
    <input type="number" id="eid" name="eid" required>

    <label for="cid">Customer ID: </label>
    <input type="number" id="cid" name="cid" required>

    <label for="tamount">Total Amount: </label>
    <input type="number" id="tamount" name="tamount" required>
    
   
    <br><br>
    <input class="submit" type="submit" id="submit3" name="submit3" value="Submit">
</form>

</div>




</body>
</html>