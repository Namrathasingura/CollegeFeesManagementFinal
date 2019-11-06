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

    $query1="insert into tblstudent(fname,mname,username,lname,email,branch,year,quota,type,bus,source,admission,exam,feast,stationary,softskill,hostel,total,paid,balance,dob) 
values ('$fname','$mname','$uname','$lname','$semail','$branch','$year','$quota','$type','$bus','$source','$admission','$exam','$feast','$stationary','$softskill','$hostel','$total','$paid','$balance','$dob')";

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

