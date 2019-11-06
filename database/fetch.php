<?php

include "connect.php";
$a=[];
$sql='SELECT * from department';


$result=$conn->query($sql);
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
        array_push($a,$row);
        // echo "row".$row['dept_id'].$row['dept_name'];
        
    }
    
}
else{
    echo "0 result";
}

echo json_encode($a);
// $conn->close();
?>