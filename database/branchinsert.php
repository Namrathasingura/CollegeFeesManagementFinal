<?php

include 'connect.php';


$bname=$_POST['bname'];
$bcode=$_POST['bcode'];
$hod=$_POST['bhod'];
//$bname='cc';
//$bcode='nn';
//$hod='jhcyx';

// $status=false;

$sql="INSERT into tblbranch(bname,bcode,hod) values('$bname','$bcode','$hod')";

if($conn->query($sql))
{
    echo "<script>alert('success')</script>";
    echo "<script>window.location.href='../branch.php';</script>";

}
else{
    echo "<script>alert('error')</script>";
    echo "<script>window.location.href='../branch.php';</script>";

    //  $status=false;
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