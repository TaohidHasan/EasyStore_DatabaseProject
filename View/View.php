<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/View.css">
    <title>View</title>
</head>
<body>
<?php

include '../View/Header.php';
include '../Model/ViewModel.php';
?>
<div class="title">
    <h1>View</h1>
</div>
<div class="heading-table">
    <p>Create a view sales_view for showing sales information with customer and product details. </p>
</div>
<table border="2">
    <tr>
    <th>Sales Id</th>
    <th>Product Name</th>
    <th>Quantity </th>
    <th>Sale Price</th>
    <th>Total Amount</th>
    <th>Customer First Name</th>
    <th>Last Name </th>
    <th>Phone Number</th>
    </tr>
    <?php
    $res = view1();
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
    <p>Create a view product_discount based on product table to get 5% discount for all products.</p>
</div>
<table border="2">
    <tr>
    <th>Product Id</th>
    <th>Product Name</th>
    <th>Quantity</th>
    <th>Cost Price</th>
    <th>Sell Price</th>
    <th>Discount</th>
    </tr>
    <?php
    $res = view2();
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
    <p>Create a view manager_new_salary based on job table to get 15% salary increase for manager. </p>
</div>
<table border="2">
    <tr>
    <th>Job Id</th>
    <th>Job Titile</th>
    <th>Salary</th>
    </tr>
    <?php
    $res = view3();
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
    <p>Create a view supplier_company for showing supplier companies location details. </p>
</div>
<table border="2">
    <tr>
    <th>Company name</th>
    <th>City</th>
    <th>Sreet</th>
    </tr>
    <?php
    $res = view4();
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