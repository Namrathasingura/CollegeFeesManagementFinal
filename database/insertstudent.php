<?php

    include 'connect.php';

    $branch=$_POST['branch'];
    $year=$_POST['year'];
    $quota=$_POST['quota'];
    $type=$_POST['type'];
    $semail=$_POST['semail'];
    $source=$_POST['source'];
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $uname=$_POST['uname'];
    $lname=$_POST['lname'];
    $bus=$_POST['bus'];
    $dob=$_POST['dob'];
    $admission=$_POST['admission'];
    $exam=$_POST['exam'];
    $feast=$_POST['feast'];
    $stationary=$_POST['stationary'];
    $softskill=$_POST['softskill'];
    $hostel=$_POST['hostel'];
    $total=$_POST['total'];
    $paid=$_POST['paid'];
    $balance=$_POST['balance'];

$status=false;

    $query1="insert into tblstudent(fname,mname,username,lname,email,branch,year,quota,type,bus,source,admission,exam,feast,stationary,softskill,hostel,total,paid,balance,dob) 
values ('$fname','$mname','$uname','$lname','$semail','$branch','$year','$quota','$type','$bus','$source','$admission','$exam','$feast','$stationary','$softskill','$hostel','$total','$paid','$balance','$dob')";

if($conn->query($query1))
{
    //echo "<script>alert('Registration Successfull');</script>";
    $status=true;
}
else{
   // echo "<script>alert('Registration Unsuccessfull');</script>";

    $status=false;
}

echo json_encode($status);
?>

