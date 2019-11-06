<?php
include 'connect.php';


$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$uname=$_POST['uname'];
$email=$_POST['email'];
$dob=$_POST['dob'];

//$fname='A';
//$mname='B';
//$lname='C';
//$uname='J';
//$email='D';
//$dob='I';

$status=false;

$sql="DELETE from tblreport where fname='$fname' and mname='$mname' and lname='$lname' and username='$uname' and email='$email'and dob='$dob'";
if($conn->query($sql)===true)
{
      $status=true;

}
else{
    $status=false;
}
echo json_encode($status);
?>