<?php

include 'connect.php';

$branch=$_POST['branch'];
$uname=$_POST['uname'];
$semail=$_POST['semail'];
$year=$_POST['year'];
$quota=$_POST['quota'];
$type=$_POST['type'];
$source=$_POST['source'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
$total=$_POST['total'];
$paid=$_POST['paid'];
$balance=$_POST['balance'];

//$branch='CSE';
//$year='1';
//$quota='SNQ';
//$type='Hostel';
//$source='hostel';
//$fname='Asha';
//$lname='latha';
//$bus='9000';
//$dob='1998/05/26';
//$admission='18000';
//$exam='1500';
//$feast='2500';
//$stationary='3000';
//$softskill='3500';
//$hostel='50000';
//$total='87500';
//$paid='0';
//$balance='87500';

$query1="insert into tblreport(fname,mname,username,lname,email,branch,year,quota,type,source,total,paid,balance,dob) values ('$fname','$mname','$uname','$lname','$semail','$branch','$year','$quota','$type','$source','$total','$paid','$balance','$dob')";

if($conn->query($query1))
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

