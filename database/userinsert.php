<?php

include 'connect.php';

$uname=$_POST['uname'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$password=$_POST['pass'];
$dob=$_POST['dob'];
// $status=false;
//$fname='asha';
//$lname='asha';
//$email='latha';
//$phone='9988776655';
//$branch='cse';
//$sem=7;
//$address='kunjath';
//$password=1;
$sql="INSERT into tbluser(username,phone,address,password,dob) values('$uname','$phone','$address','$password','$dob')";

if($conn->query($sql))
{
    echo "success";
    //  $status=true;
}
else{
    echo "error";
    //  $status=false;
}

//  echo json_encode($status);
?>