<?php
include '../Model/DBConnection.php';
function problem1(){
    $conn = connection();
    $sql = oci_parse($conn,"SELECT e.*,j.Job_title,j.Salary,l.City,l.Street from employee e,job j,location l where e.Job_id=j.Job_id and e.Loc_id=l.Loc_id") ;
    $res = oci_execute($sql);
    return $sql;
}

function problem2(){
    $conn = connection();
    $sql = oci_parse($conn,"SELECT employee.e_fname,Supplier.supplier_name,location.city,location.street from employee,location,Supplier where employee.Loc_id=Location.Loc_id and  Supplier.Loc_id=Location.Loc_id") ;
    $res = oci_execute($sql);
    return $sql;
}

function problem3(){
    $conn = connection();
    $sql = oci_parse($conn,"select p.*,c.* from product p, catagory c where c.catagory_id=p.catagory_id and p_id in(select p_id from sales group by p_id having max(quantity)=(select max(max(quantity)) from sales group by p_id))
        ") ;
    $res = oci_execute($sql);
    return $sql;
}
function problem4(){
    $conn = connection();
    $sql = oci_parse($conn,"select p.* from product p where p.sell_price in(select max(sell_price) from product where sell_price<(select max(sell_price) from product))") ;
    $res = oci_execute($sql);
    return $sql;
}

function problem5(){
    $conn = connection();
    $sql = oci_parse($conn,"select e.* from employee e where e_id=(select E_id from purchase group by E_id having max(quantity) in(select max(max(quantity)) from purchase group by E_id))") ;
    $res = oci_execute($sql);
    return $sql;
}

function problem6(){
    $conn = connection();
    $sql = oci_parse($conn,"select e.*,j.*,l.* from employee e,job j,location l where e.job_id=j.job_id and e.loc_id=l.loc_id and l.city=(select l.city from employee e,location l where e.loc_id=l.loc_id and e.e_fname='Farid') and j.job_title=(select j.job_title from employee e,job j where e.job_id=j.job_id and e.e_fname='Mohib')
        ") ;
    $res = oci_execute($sql);
    return $sql;
}

function problem7(){
    $conn = connection();
    $sql = oci_parse($conn,"select j.salary from employee e,job j where e.job_id=j.job_id and e.e_hiredate=(select min(e_hiredate) from employee)") ;
    $res = oci_execute($sql);
    return $sql;
}
function problem8(){
    $conn = connection();
    $sql = oci_parse($conn,"select p.* ,c.* from product p,catagory c where p.catagory_id=c.catagory_id and cost_price<(select cost_price from product where p_name='Bread')
        ") ;
    $res = oci_execute($sql);
    return $sql;
}
function problem9(){
    $conn = connection();
    $sql = oci_parse($conn,"select e.* from employee e where e_hiredate in(select e.e_hiredate from employee e group by e_hiredate having count(*)=(select max(count(*)) from employee group by e_hiredate))") ;
    $res = oci_execute($sql);
    return $sql;
}
function problem10(){
    $conn = connection();
    $sql = oci_parse($conn,"select product.* from product where sell_price-cost_price=(select max(sell_price-cost_price) from product)
        ") ;
    $res = oci_execute($sql);
    return $sql;
}
?>