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
        function showpopup() {
            $('.popup1').animate({top:'1%'},500);
        }
        function hidepopup() {
            $('.popup1').animate({top:'-500%'},500);
        }
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
                            <a href="Varsity/application1.php" class="btn btn-primary btn-sm pull-right" style="background-color: darkblue"><i class="glyphicon glyphicon-plus"></i> Add </a></h2>
                        <form action="test.php" method="post">
                            <input type="text" name='uid' placeholder="Enter id to view details"/>
                            <button>view</button>
                        </form>

                        <div class="panel panel-success">
                            <div class="panel-heading">
                                Manage Students
                            </div>
                            <div class="panel-body">
                                <div class="table-sorting table-responsive">
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

                                            <td ><input type="text" id="id"  value="<?php echo $row['id']; ?>"/></td>
                                            <td ><input type="text" id="name" value="<?php echo $row['fname']." ".$row['mname']." ".$row['lname'] ; ?>"/></td>
<!--                                            <td ><input type="text" value="--><?php //echo $row['lname']; ?><!--"/></td>-->
                                            <td ><input type="text" id="email" value="<?php echo $row['email']; ?>"/></td>
                                            <td ><input type="date" id="dob" value="<?php echo $row['dob']; ?>"/></td>
                                            <td ><input type="text" id="uname" value="<?php echo $row['username']; ?>"/></td>

<!--                                            <td >-->
<!--                                              <a href="test.php"> <button class="editstudent"  name="view" vals="--><?php //echo $row['id'];?><!--"><i  class="fa fa-eye"></i> </button>&nbsp;</button></a></td>-->
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


<!--<div class="popup1">-->
<!---->
<!---->
<!--    <div class="panel panel-success">-->
<!--        <div class="panel-heading">-->
<!--            Student Details-->
<!--            <button class="pull-right" onclick="hidepopup()" style="border: none;background-color: transparent">x</button>-->
<!--        </div>-->
<!--        <div class="panel-body">-->
<!--            <div class="table-sorting table-responsive">-->
<!--                <!--  SHOW ENTRIES-->-->
<!--                <form action="" method="post" id="formnotes">-->
<!--                    --><?php
//                    while ($row=mysqli_fetch_array($search_result)):?>
<!--                    <table class="table table-striped table-bordered table-hover" id="tSortable22">-->
<!--                        <!--                        <label id="uname" class="pull-right">Reference:ash@gmail.com</label>-->-->
<!--                        <label id="uname" class="pull-right">Reference: --><?php //echo $row['username'];?><!--</label>-->
<!---->
<!--                        <thead>-->
<!---->
<!--                        <tr>-->
<!--                            <!--                            <td id="name" ><strong>Name :</strong>asha b u</td>-->-->
<!--                            <!--                            <td id="branch" ><strong>Branch :</strong>CSE</td>-->-->
<!--                            <!--                            <td id="year" ><strong>Year :</strong>2019</td>-->-->
<!--                            <!--                            <td id="dob"><strong>DOB :</strong>98/09/8765</td>-->-->
<!---->
<!--                            <td id="name" ><strong>Name :</strong>--><?php //echo $row['fname']." ".$row['mname']." ".$row['lname'];?><!--</td>-->
<!--                            <td id="branch" ><strong>Branch :</strong>--><?php //echo $row['branch']?><!--</td>-->
<!--                            <td id="year" ><strong>Year :</strong>--><?php //echo $row['year']?><!--</td>-->
<!--                            <td id="dob"><strong>DOB :</strong>--><?php //echo $row['dob']?><!--</td>-->
<!--                        </tr>-->
<!---->
<!--                        <tr><td ><strong>Email:</strong></td>-->
<!--                            <!--                            <td colspan="3" id="semail">nam@gmail.com</td> </tr>-->-->
<!--                            <td colspan="3" id="semail">--><?php //echo $row['email']?><!--</td> </tr>-->
<!---->
<!--                        <tr>-->
<!--                            <th colspan="2">Particular</th>-->
<!--                            <th colspan="2" >Amount</th>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td colspan="2"> Admission fee</td>-->
<!--                            <!--                            <td colspan="2" id="admission">8765</td>-->-->
<!--                            <td colspan="2" id="admission">--><?php //echo $row['admission']?><!--</td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!---->
<!--                            <td colspan="2"> Exam fee</td>-->
<!--                            <!--                            <td colspan="2" id="exam">7665</td>-->-->
<!--                            <td colspan="2" id="exam">--><?php //echo $row['exam']?><!--</td>-->
<!---->
<!--                        </tr>-->
<!--                        <tr>-->
<!---->
<!--                            <td colspan="2">Feast Fee</td>-->
<!--                            <!--                            <td colspan="2" id="feast">6789</td>-->-->
<!--                            <td colspan="2" id="feast">--><?php //echo $row['feast']?><!-- </td>-->
<!---->
<!--                        </tr>-->
<!--                        <tr>-->
<!---->
<!--                            <td colspan="2"> Stationary Fee</td>-->
<!--                            <!--                            <td colspan="2" id="stationary"> 9876</td>-->-->
<!--                            <td colspan="2" id="stationary"> --><?php //echo $row['stationary']?><!--</td>-->
<!---->
<!---->
<!--                        </tr>-->
<!--                        <tr>-->
<!---->
<!--                            <td colspan="2">SoftSkill</td>-->
<!--                            <!--                            <td colspan="2" id="softskill"> 7346</td>-->-->
<!--                            <td colspan="2" id="softskill"> --><?php //echo $row['softskill']?><!--</td>-->
<!---->
<!--                        </tr>-->
<!---->
<!--                        <tr>-->
<!---->
<!--                            <td colspan="2">Hostel Fee</td>-->
<!--                            <!--                            <td colspan="2" id="hostel">6855</td>-->-->
<!--                            <td colspan="2" id="hostel">--><?php //echo $row['hostel']?><!--</td>-->
<!---->
<!---->
<!--                        </tr>-->
<!---->
<!---->
<!--                        <tr>-->
<!---->
<!--                            <td colspan="2">Bus Fee</td>-->
<!--                            <!--                            <td colspan="2" id="bus">3265</td>-->-->
<!--                            <td colspan="2" id="bus">--><?php //echo $row['bus']?><!--</td>-->
<!---->
<!---->
<!--                        </tr>-->
<!---->
<!--                        <tr><td colspan="4"></td> </tr>-->
<!--                        <tr>-->
<!---->
<!--                            <td colspan="2">Bus Source</td>-->
<!--                            <!--                            <td colspan="2" id="source">hostel</td>-->-->
<!--                            <td colspan="2" id="source">--><?php //echo $row['source']?><!--</td>-->
<!---->
<!--                        </tr>-->
<!---->
<!--                        <tr>-->
<!---->
<!--                            <td colspan="2">Total</td>-->
<!--                            <!--                            <td colspan="2" id="total">325965</td>-->-->
<!--                            <td colspan="2" id="total">--><?php //echo $row['total']?><!--</td>-->
<!---->
<!---->
<!--                        </tr>-->
<!---->
<!---->
<!--                        <tr>-->
<!---->
<!--                            <td colspan="2">Paid</td>-->
<!--                            <!--                            <td colspan="2" id="paid">325965</td>-->-->
<!--                            <td colspan="2" id="paid">--><?php //echo $row['paid']?><!--</td>-->
<!---->
<!---->
<!--                        </tr>-->
<!---->
<!--                        <tr>-->
<!---->
<!--                            <td colspan="2">Balance</td>-->
<!--                            <!--                            <td colspan="2" id="balance">0</td>-->-->
<!--                            <td colspan="2" id="balance">--><?php //echo $row['balance']?><!--</td>-->
<!---->
<!---->
<!--                        </tr>-->
<!---->
<!--                        --><?php //endwhile;
//                        ?>
<!---->
<!--                        </thead>-->
<!---->
<!--                    </table>-->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->


<body>

</body>
</html>
