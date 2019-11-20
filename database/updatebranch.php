<?php

include 'connect.php';

$id=$_POST['id'];
$bname=$_POST['bname'];
$bcode=$_POST['bcode'];
$hod=$_POST['hod'];
//$id=1;
//$bname='comp';
//$bcode='cs';
//$hod='anandddd';

 $status=false;

$sql="update tblbranch set bname='$bname',bcode='$bcode',hod='$hod' where id='$id'";

if($conn->query($sql))
{
   // echo "success";
    $status=true;
}
else{
   // echo "error";
    $status=false;
}

echo json_encode($status);
?>