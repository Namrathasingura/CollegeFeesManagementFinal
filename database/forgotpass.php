<?php

include 'connect.php';

$email=$_POST['email'];
$address=$_POST['address'];
$dob=$_POST['dob'];
$phone=$_POST['phone'];
$cpass=$_POST['cpass'];
$npass=$_POST['npass'];
//$id=1;
//$bname='comp';
//$bcode='cs';
//$hod='anandddd';

//$status=false;
if($npass==$cpass)
{
    $sql="update tbluser set password='$npass' where username='$email' and address='$address' and dob='$dob' and phone='$phone'";
    if($conn->query($sql))
    {
        echo "<script>alert('Password Updated');</script>";
        echo "<script>window.location.href='../userlogin.php';</script>";

        //  $status=true;
    }
    else{
        echo "<script>alert('Password Update Failed');</script>";
        echo "<script>window.location.href='../Varsity/forgot.html';</script>";

// echo "error";
      //  $status=false;
    }


}
else
{
    echo "<script>alert('Password do not match');</script>";
    echo "<script>window.location.href='../Varsity/forgot.html';</script>";

}


//echo json_encode($status);
?>