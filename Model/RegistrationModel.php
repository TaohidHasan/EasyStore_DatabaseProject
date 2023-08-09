<?php
include'../Model/DBConnection.php';
function Registration($fname,$lname,$age,$gender,$phnNo,$email,$city,$street,$pass){
    $conn = connection();
    $sql1 = oci_parse($conn,"INSERT INTO LOCATION(Loc_id,City,Street) VALUES (SEQ_Loc.NEXTVAL,'$city','$street')") ;
    $sql2 = oci_parse($conn,"INSERT INTO ADMIN(A_ID,A_FNAME,A_LNAME,A_GENDER,A_EMAIL,A_PASSWORD,A_PHN,LOC_ID,AGE) VALUES (SEQ_ADMIN.NEXTVAL,'$fname','$lname','$gender','$email','$pass','$phnNo',SEQ_Loc.CURRVAL,'$age')") ;
    $res1 = oci_execute($sql1);
    $res2= oci_execute($sql2);
    return $res2;
}

function UniqueEmail($email){
    $conn = connection();
    $sql = oci_parse($conn,"SELECT count(*) FROM ADMIN WHERE A_EMAIL='$email' ") ;
    $res = oci_execute($sql);
   
    return $sql;
}


?> 