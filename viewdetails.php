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
    </style>

</head>

<button class="showp" name="showp" onclick="showpopup()" vals="48">click</button>

                    <div class="popup1">



                        <div class="panel panel-success">
                            <div class="panel-heading">
                                Student Details
                            </div>
                            <div class="panel-body">
                                <div class="table-sorting table-responsive">
                                    <!--  SHOW ENTRIES-->
                                    <form action="" method="post" id="formnotes">
<!--                                        <div id="tSortable22_length" class="dataTables_length"><input name="valuesearch"  type="text"  id="valuesearch" placeholder="search here"/></label></div>-->
<!--                                        <div id="tSortable22_length" class="dataTables_length"><input type="submit" name="search" class="pull-right" id="search" value="Search"/></div>-->



<!--                                                   --><?php //$id="<script>$(\".showp\").click(function() {
//                                                var name = $(this).attr(\"name\");
//                                                if (name == 'showp') {
//                                                    var id = $(this).attr(\"vals\");  alert(id);document.write(id);  }  })</script>";?>




                                            <script>
                                                $(".showp").click(function() {
                                                var name = $(this).attr("name");
                                                if (name == 'showp') {
                                                    var id = $(this).attr("vals");
                                                    alert(id);<?php $id = "<script>document.write(id);</script>"?> }    })</script>


<?php
                                                   include 'database/connect.php';

                                                   //                                        $sql="SELECT f.id,f.sem,f.fee,b.bcode,b.bname FROM tblfee f,tblbranch b where b.id=f.bid";


                                     echo $id;
                                        $sql="SELECT * FROM tblstudent where id='$id'";
                                        $result=$conn->query($sql);

                                        if($result->num_rows>0)
                                        {
                                        while ($row = $result->fetch_assoc())
                                        {
                                        ?>
                                        <table class="table table-striped table-bordered table-hover" id="tSortable22">
<!--                                            <label id="uname" class="pull-right">Reference:ash@gmail.com</label>-->
                                            <label id="uname" class="pull-right">Reference: <?php echo $row['username'];?></label>

                                            <thead>

                                            <tr>
<!--                                                <td id="name" ><strong>Name :</strong>asha b u</td>-->
<!--                                                <td id="branch" ><strong>Branch :</strong>CSE</td>-->
<!--                                                <td id="year" ><strong>Year :</strong>2019</td>-->
<!--                                                <td id="dob"><strong>DOB :</strong>98/09/8765</td>-->

                                                <td id="name" ><strong>Name :</strong><?php echo $row['fname']." ".$row['mname']." ".$row['lname'];?></td>
                                                <td id="branch" ><strong>Branch :</strong><?php echo $row['branch']?></td>
                                                <td id="year" ><strong>Year :</strong><?php echo $row['year']?></td>
                                                <td id="dob"><strong>DOB :</strong><?php echo $row['dob']?></td>
                                            </tr>

                                            <tr><td ><strong>Email:</strong></td>
<!--                                                <td colspan="3" id="semail">nam@gmail.com</td> </tr>-->
                                                <td colspan="3" id="semail"><?php echo $row['email']?></td> </tr>

                                            <tr>
                                                <th colspan="2">Particular</th>
                                                <th colspan="2" >Amount</th>
                                            </tr>
                                            <tr>
                                                <td colspan="2"> Admission fee</td>
<!--                                                <td colspan="2" id="admission">8765</td>-->
                                                <td colspan="2" id="admission"><?php echo $row['admission']?></td>
                                            </tr>
                                            <tr>

                                                <td colspan="2"> Exam fee</td>
<!--                                                <td colspan="2" id="exam">7665</td>-->
                                                <td colspan="2" id="exam"><?php echo $row['exam']?></td>

                                            </tr>
                                            <tr>

                                                <td colspan="2">Feast Fee</td>
<!--                                                <td colspan="2" id="feast">6789</td>-->
                                                <td colspan="2" id="feast"><?php echo $row['feast']?> </td>

                                            </tr>
                                            <tr>

                                                <td colspan="2"> Stationary Fee</td>
<!--                                                <td colspan="2" id="stationary"> 9876</td>-->
                                                <td colspan="2" id="stationary"> <?php echo $row['stationary']?></td>


                                            </tr>
                                            <tr>

                                                <td colspan="2">SoftSkill</td>
<!--                                                <td colspan="2" id="softskill"> 7346</td>-->
                                                <td colspan="2" id="softskill"> <?php echo $row['softskill']?></td>

                                            </tr>

                                            <tr>

                                                <td colspan="2">Hostel Fee</td>
<!--                                                <td colspan="2" id="hostel">6855</td>-->
                                                <td colspan="2" id="hostel"><?php echo $row['hostel']?></td>


                                            </tr>


                                            <tr>

                                                <td colspan="2">Bus Fee</td>
<!--                                                <td colspan="2" id="bus">3265</td>-->
                                                <td colspan="2" id="bus"><?php echo $row['bus']?></td>


                                            </tr>

                                            <tr><td colspan="4"></td> </tr>
                                            <tr>

                                                <td colspan="2">Bus Source</td>
<!--                                                <td colspan="2" id="source">hostel</td>-->
                                                <td colspan="2" id="source"><?php echo $row['source']?></td>

                                            </tr>

                                            <tr>

                                                <td colspan="2">Total</td>
<!--                                                <td colspan="2" id="total">325965</td>-->
                                                <td colspan="2" id="total"><?php echo $row['total']?></td>


                                            </tr>


                                            <tr>

                                                <td colspan="2">Paid</td>
                                                <td colspan="2" id="paid">325965</td>
<!--                                                <td colspan="2" id="paid">--><?php //echo $row['paid']?><!--</td>-->


                                            </tr>

                                            <tr>

                                                <td colspan="2">Balance</td>
                                                <td colspan="2" id="balance"><?php echo $row['balance']?></td>


                                            </tr>



                                            </thead>

                                        </table>
                                            <?php
                                        }
                                        }
                                        ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<body>

</body>
</html>
