<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>college Fees Payment System</title>

    <link href="css/bootstrap.css" rel="stylesheet" />

    <link href="css/font-awesome.css" rel="stylesheet" />

    <link href="css/basic.css" rel="stylesheet" />

    <link href="css/custom.css" rel="stylesheet" />

    <link href="css/datatable/datatable.css" rel="stylesheet" />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <script src="database/jquery-3.1.1.js"></script>
    <script src="database/script.js"></script>
    <script>

        function showpopup(id) {
            $('.popup1').animate({top:'1%'},500);
            alert(id);
            // $v=id;
            // // $i=$row['id']
            // alert($v);
<!--            --><?php //$i=$v?>

            // window.location.href="http://localhost:8088/CollegeFeesManagement/student.php?id+"+id;
        }
        function hidepopup() {
            $('.popup1').animate({top:'-500%'},500);
        }
        // function  show(value) {
        //     v=document.getElementById('res').value+=value;
        //     document.getElementById('res').value=v;
        // }
    </script>
    <style>
        .popup1{
            position: fixed;
            top: -500%;
            width: 40%;
            margin-left: 30%;
            background-color: white;
            box-shadow: 2px 3px 8px slategrey;
            border-radius: 5px;
        }
         button{
             width: 30px;
             border: none;
             background-color: transparent;
         }
         .fa-eye{
             color: green;
         }
        .fa-edit{
            color: blue;
        }
        .fa-trash{
            color: red;
        }

    </style>

</head>
<?php
include("php/header.php");
?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="row" >
                    <div class="col-md-12">
                        <h2 class="page-header" ><strong>STUDENTS</strong>
                            <a href="Varsity/application.php" class="btn btn-primary btn-sm pull-right" style="background-color: darkblue"><i class="glyphicon glyphicon-plus"></i> Add </a></h2>
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                Manage Students
                            </div>
                            <div class="panel-body">
                                <div class="table-sorting table-responsive">
                                    <!--  SHOW ENTRIES-->
<!--                                    <div id="tSortable22_length" class="dataTables_length"><label>Show <select size="1" name="tSortable22_length" aria-controls="tSortable22"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div>-->
                                        <!--      -->
<!--                                    <div class="dataTables_filter" id="tSortable22_filter"><label><i class="fa fa-search"></i> <input type="text" aria-controls="tSortable22"></label></div>-->
                                    <table class="table table-striped table-bordered table-hover" id="tSortable22"  style="width: 50px; ">
                                        <thead>
                                        <tr>

                                            <th>id</th>
                                            <th>Name</th>
<!--                                            <th>Lname</th>-->
                                            <th>Email</th>
                                            <th>DOB</th>
                                            <th>Reference</th>
                                            <th colspan="3">Action</th>
                                        </tr>
                                        <?php
                                        include 'database/connect.php';
                                        //                                        $sql="SELECT f.id,f.sem,f.fee,b.bcode,b.bname FROM tblfee f,tblbranch b where b.id=f.bid";
                                        $sql="SELECT  * FROM tblstudent ";
                                        $result=$conn->query($sql);
                                        if($result->num_rows>0)
                                        {
                                        while ($row = $result->fetch_assoc())
                                        {
                                        ?>
                                        <tr>
<!--                                            --><?php //$myrow[]=$row;?>

                                            <td ><input type="text" id="id" value="<?php echo $k=$row['id']; ?>"/></td>
                                            <td ><input type="text" id="name" value="<?php echo $row['fname']." ".$row['mname']." ".$row['lname'] ; ?>"/></td>
<!--                                            <td ><input type="text" value="--><?php //echo $row['lname']; ?><!--"/></td>-->
                                            <td ><input type="text" id="email" value="<?php echo $row['email']; ?>"/></td>
                                            <td ><input type="date" id="dob" value="<?php echo $row['dob']; ?>"/></td>
                                            <td ><input type="text" id="uname" value="<?php echo $row['username']; ?>"/></td>

                                            <td >
                                                <button class="editstudent" onclick="showpopup(<?php echo $row['id']; ?> )" name="view" value="<?php echo $row['id'];?>"><i  class="fa fa-eye"></i> </button>&nbsp;</td>
                                            <?php $v= $row['id'];?>
                                            <td> <button class="editstudent" name="update" vals="<?php echo $row['id'];?>"><i  class="fa fa-edit"></i> </button>&nbsp;</button></td>
                                               <td> <button class="editstudent" name="delete" vals="<?php echo $row['id'];?>"><i  class="fa fa-trash"></i> </button>&nbsp;&nbsp;</button>
                                            </td>
                                        </tr>

                                        </thead>
                                        <?php
                                        }
                                        }
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!------------------------------------------------------------------------------------->


<div class="popup1">


    <div class="panel panel-success">
        <div class="panel-heading">
            Student Details
            <button class="pull-right" onclick="hidepopup()" style="border: none;background-color: transparent">x</button>
        </div>
        <div class="panel-body">
            <div class="table-sorting table-responsive">

                <!--  SHOW ENTRIES-->
                <form action="" method="post" id="formnotes">
                   <!--                                        --><?php
                    //   while ($row=mysqli_fetch_array($search_result)):?>
                    <table class="table table-striped table-bordered table-hover" id="tSortable22">


<!--                    <label id="uname" class="pull-right">Reference:ash@gmail.com</label>-->
<!--                        <label id="uname" class="pull-right">Reference: --><?php //echo $row['username'];?><!--</label>-->

                        <thead>

                        <tr>
                            <th>Reference :</th>
                            <th>Name :</th>
                            <th>Branch :</th>
                            <!--<th>Lname</th>-->
                            <th>Year :</th>
                            <th>DOB :</th>
<!--                            <td>Reference</td>-->
<!--                            <td colspan="3">Action</td>-->
                        </tr>
                        <?php
                        include 'database/connect.php';
                        //$sql="SELECT f.id,f.sem,f.fee,b.bcode,b.bname FROM tblfee f,tblbranch b where b.id=f.bid";
//                        $v= $row['id'];
                        ?>


                        <?php
                        $sql1="SELECT * FROM tblstudent where id='$v'";

                        $result1=$conn->query($sql1);
                        if($result1->num_rows>0) {
                            while ($row1 = $result1->fetch_assoc()) {
//                                $i = $row['id'];
//                                if ($row['id'] == 60) {
                                    ?>
                                    <tr>
                                        <!--                            <td id="name" ><strong>Name :</strong>asha b u</td>-->
                                        <!--                            <td id="branch" ><strong>Branch :</strong>CSE</td>-->
                                        <!--                            <td id="year" ><strong>Year :</strong>2019</td>-->
                                        <!--                            <td id="dob"><strong>DOB :</strong>98/09/8765</td>-->
                                        <td id="uname"><?php echo $row1['username']; ?></td>
                                        <td id="name"><?php echo $row1['fname'] . " " . $row1['mname'] . " " . $row1['lname']; ?></td>
                                        <td id="branch"><?php echo $row1['branch'] ?></td>
                                        <td id="year"><?php echo $row1['year'] ?></td>
                                        <td id="dob"><?php echo $row1['dob'] ?></td>
                                        <!---->

                                    </tr>
                                    <tr>
                                        <td><strong>Email:</strong></td>
                                        <td colspan="4" id="semail"><?php echo $row1['email'] ?></td>
                                    </tr>

                                    <tr>
                                        <th colspan="2">Particular</th>
                                        <th colspan="3">Amount</th>
                                    </tr>
                                    <tr>
                                        <td colspan="2"> Admission fee</td>
                                        <td colspan="3" id="admission"><?php echo $row1['admission'] ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"> Exam fee</td>
                                        <td colspan="3" id="exam"><?php echo $row1['exam'] ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"> Feast fee</td>
                                        <td colspan="3" id="feast"><?php echo $row1['feast'] ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"> Stationary fee</td>
                                        <td colspan="3" id="stationary"><?php echo $row1['stationary'] ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"> SoftSkill</td>
                                        <td colspan="3" id="softskill"><?php echo $row1['softskill'] ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"> Hostel Fee</td>
                                        <td colspan="3" id="hostel"><?php echo $row1['hostel'] ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"> Bus Fee</td>
                                        <td colspan="3" id="bus"><?php echo $row1['bus'] ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="5"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"> Bus Source</td>
                                        <td colspan="3" id="source"><?php echo $row1['source'] ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"> Total</td>
                                        <td colspan="3" id="total"><?php echo $row1['total'] ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"> Paid</td>
                                        <td colspan="3" id="paid"><?php echo $row1['paid'] ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"> Balance</td>
                                        <td colspan="3" id="balance"><?php echo $row1['balance'] ?></td>
                                    </tr>
                                    <?php
                                }
//                            }
                        }
                        ?>



                        </thead>

                    </table>
                </form>
            </div>
        </div>
    </div>
</div>




<body>

</body>
</html>
