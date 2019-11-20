<?php

include 'connect.php';

$id=$_POST['id'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$uname=$_POST['uname'];
$email=$_POST['email'];
$dob=$_POST['dob'];
//$id=1;
//$bname='comp';
//$bcode='cs';
//$hod='anandddd';

 $status=false;

$sql="update tblstudent set fname='$fname',mname='$mname',lname='$lname', username='$uname',email='$email',dob='$dob' where id='$id'";

if($conn->query($sql))
{
    //echo "<script>alert('Updated');</script>";
    $status=true;
}
else{
   // echo "error";
    $status=false;
}

echo json_encode($status);
?>