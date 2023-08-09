<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Searching.css">
    <title>Searching</title>
</head>
<body>
<?php

include '../View/Header.php';
include '../Model/SearchingModel.php';
?>
<div class="title">
    <h1>Searching Operation from oracle</h1>
</div>
<div class="heading-table">
    <p>Find all employees with their location and job details.</p>
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
    <th>Job Title</th>
    <th>Salary</th>
    <th>City</th>
    <th>Street</th>
    
    </tr>
    <?php
    $res = problem1();
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
    <p>Find those employees and suppliers who live in same location.</p>
</div>
<table border="2">
    <tr>
    <th>Employee Name</th>
    <th>Supplier Name</th>
    <th>City</th>
    <th>Street</th>
    </tr>
    <?php
    $res = problem2();
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
    <p>Find those products information and catagory information which sold the most.</p>
</div>
<table border="2">
    <tr>
    <th>Product Id</th>
    <th>Product Name</th>
    <th>Quantity</th>
    <th>Cost Price</th>
    <th>Sell Price</th>
    <th>Catagory Id</th>
    <th>Catagory Name</th>
    </tr>
    <?php
    $res = problem3();
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
    <p>Find out the second highest price's product details.</p>
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
    $res = problem4();
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
    <p>Find the employees who purchase products most.</p>
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
    $res = problem5();
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
    <p>Find those employees whose city same as Farid and Salary same as Mohib.</p>
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
    <th>Job Title</th>
    <th>Salary</th>
    <th>City</th>
    <th>Street</th>
    </tr>
    <?php
    $res = problem6();
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
    <p>Find most junior employee's salary</p>
</div>
<table border="2">
    <tr>
    
    <th>Salary</th>
    </tr>
    <?php
    $res = problem7();
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
    <p>Find those products with catagory which have less cost price than Bread.</p>
</div>
<table border="2">
    <tr>
    <th>Product Id</th>
    <th>Product Name</th>
    <th>Quantity</th>
    <th>Cost Price</th>
    <th>Sell Price</th>
    <th>Catagory Id</th>
    <th>Catagory Name</th>
    </tr>
    <?php
    $res = problem8();
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
    <p>Find those maximum employees who join the same time.</p>
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
    $res = problem9();
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
    <p>Find the product which has maximum profit.</p>
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
    $res = problem10();
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