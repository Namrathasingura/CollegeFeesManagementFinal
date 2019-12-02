<?php

include 'connect.php';


$name=$_POST['name'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
//$bname='cc';
//$bcode='nn';
//$hod='jhcyx';

// $status=false;
if($pass==$cpass)
{
    $sql="INSERT into tbladmin(name,password) values('$name','$pass')";

    if($conn->query($sql))
    {
        echo "<script>alert('success')</script>";
        echo "<script>window.location.href='../Varsity/admininsert.php';</script>";

    }
    else{
        echo "<script>alert('error')</script>";
        echo "<script>window.location.href='../Varsity/admininsert.php';</script>";

        //  $status=false;
    }
}
else
{
    echo "<script>alert('Password do not match');</script>";
    echo "<script>window.location.href='../Varsity/admininsert.php';</script>";

}
//  echo json_encode($status);
?>




    //<?php
//
//include 'connect.php';
//
//
//$bname=$_POST['bname'];
//$bcode=$_POST['bcode'];
//$hod=$_POST['hod'];
////$bname='cc';
////$bcode='nn';
////$hod='jhcyx';
//
//// $status=false;
//
//$sql="INSERT into tblbranch(bname,bcode,hod) values('$bname','$bcode','$hod')";
//
//if($conn->query($sql))
//{
//    echo "success";
//    //  $status=true;
//}
//else{
//    echo "error";
//    //  $status=false;
//}
//
////  echo json_encode($status);
//?>