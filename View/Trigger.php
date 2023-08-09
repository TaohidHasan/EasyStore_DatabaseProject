<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Trigger.css">
    
    <title>Trigger</title>
</head>
<body>
<?php

include '../View/Header.php';
include '../Model/TriggerModel.php';
?>
<div class="title">
    <h1>Trigger Operation</h1>
</div>
<div class="heading-table">
    <p>Insert a negative value of product quantity to check trigger</p>
</div>
<div class="info">
   
<form action="../Controller/TriggerCheck.php" method="POST"  name="form1" >
    <label for="pid">Purchase ID: </label>
    <input type="number" id="pid" name="pid" required>
    <label for="quantity">Add Negative Quantity: </label>
    <input type="number" id="quantity" name="quantity" required>
   
    <br><br>
    <input class="submit" type="submit" id="submit1" name="submit1" value="Submit">
</form>
<hr>



<hr>
</div>


<div class="heading-table">
    <p>Creating a trigger to automatically store employee  salary update information in a table to identify when and how much salary increased</p>
</div>
<div class="info">
   
<form action="../Controller/TriggerCheck.php" method="POST" name="form2" >
     <label for="jid">Job ID: </label>
    <input type="number" id="jid" name="jid" required>
    <label for="salary">New Salary: </label>
    <input type="number" id="salary" name="salary" required>
    <br><br>
    <input class="submit" type="submit" id="submit2" name="submit2" value="Submit">
</form>
<hr>


<hr>
</div>

<div class="heading-table">

<p>Creating a trigger to automatically check employee table to identify when, who and what operations done in this table.</p>
   
</div>
<div class="info">
   
<form action="../Controller/TriggerCheck.php" method="POST" name="form3" >
  <label for="eid">Employee ID: </label>
    <input type="number" id="eid" name="eid" required>
    <label for="efname">Fisrt Name: </label>
    <input type="text" id="efname" name="efname" required>
    <br><br>
    <input class="submit" type="submit" id="submit3" name="submit3" value="Submit">
</form>
<hr>

<p id="msg3"></p>

<hr>
</div>

<div class="heading-table">

<p>Creating a trigger to check that DML operation can't be happened/done on sales table after office hour.</p>
</div>
   
<div class="info">
   
<form action="../Controller/TriggerCheck.php" method="POST"  name="form4" >
    <label for="sid">Sales ID: </label>
    <input type="number" id="sid" name="sid" required>
    <label for="quan">Updated Quantity: </label>
    <input type="number" id="quan" name="quan" required>
    <br><br>
    <input class="submit" type="submit" id="submit4" name="submit4" value="Submit">
</form>
<div class="heading-table">
<p>emp_dml_log table:</p>  

</div>

<table border="2">
    <tr>
    <th>Database User</th>
    <th>Operation name</th>
    <th>Operation Date</th>
    </tr>
    <?php
    $res = logShow1();
    while ($row = oci_fetch_array($res, OCI_RETURN_NULLS+OCI_ASSOC)) {
        
        echo '<tr>';
        foreach ($row as $item) 
        {
            echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
        }
        echo '</tr>';
        }
    ?>
</table>
<div class="heading-table">
<p>emp_sal_uplog table:</p>  

</div>


<table border="2">
    <tr>
    <th>Employee ID</th>
    <th>Old Salary</th>
    <th>New Salary</th>
    <th>Date</th>
    </tr>
    <?php
    $res = logShow2();
    while ($row = oci_fetch_array($res, OCI_RETURN_NULLS+OCI_ASSOC)) {
        
        echo '<tr>';
        foreach ($row as $item) 
        {
            echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
        }
        echo '</tr>';
        }
    ?>
</table>
<hr>


<hr>
</div>
</body>
</html>