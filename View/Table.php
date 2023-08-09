<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Table.css">
    <title>Table View</title>
</head>
<body>
<?php

include '../View/Header.php';
include '../Model/TableModel.php';
?>
<div class="title">
    <h1>Table View From Oracle</h1>
</div>
<div class="heading-table">
    <h1>Employee:</h1>
</div>
<table border="2">
    <tr>
    <th>Employee Id</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Gender</th>
    <th>Email</th>
    <th>Password</th>
    <th>Phone Number</th>
    <th>Hiredate</th>
    <th>Job Id</th>
    <th>Location Id</th>
    </tr>
    <?php
    $res = EmployeeShow(); //res = sql
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
    <h1>Admin:</h1>
</div>
<table border="2">
    <tr>
    <th>Admin Id</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Gender</th>
    <th>Email</th>
    <th>Password</th>
    <th>Phone Number</th>
    <th>Location Id</th>
    <th>Age</th>
 
    </tr>
    <?php
    $res = AdminShow();
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
    <h1>Job:</h1>
</div>
<table border="2">
    <tr>
    <th>Job Id</th>
    <th>Job Title</th>
    <th>Salary</th>
    
    </tr>
    <?php
    $res = JobShow();
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
    <h1>Location:</h1>
</div>
<table border="2">
    <tr>
    <th>Location Id</th>
    <th>City</th>
    <th>Street</th>
    
    </tr>
    <?php
    $res = LocationShow();
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
    <h1>Product:</h1>
</div>
<table border="2">
    <tr>
    <th>Product Id</th>
    <th>Product Name</th>
    <th>Quantity</th>
    <th>Cost Price</th>
    <th>Sell Price</th>
    <th>Catagory Id</th>
    </tr>
    <?php
    $res =ProductShow();
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
    <h1>Catagory:</h1>
</div>
<table border="2">
    <tr>
    <th>Catagory Id</th>
    <th>Catagory Name</th>
    
    </tr>
    <?php
    $res = CatagoryShow();
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

</body>
</html>