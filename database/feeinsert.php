<?php

include 'connect.php';

$sem=$_POST['sem'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$branch=$_POST['branch'];
$sem=$_POST['sem'];
$address=$_POST['address'];
$password=$_POST['pass'];
// $status=false;

$sql="INSERT into tbluser(fname,lname,email,phone,bname,sem,address,password) values('$fname','$lname','$email','$phone','$branch','$sem','$address','$password')";

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