<?php
if(isset($_POST['search']))
{
    $valuesearch=$_POST['valuesearch'];
    $query="SELECT * FROM `tblstudent` WHERE email= '".$valuesearch."'";
    $search_result=filtertable($query);
}

else
{
    $query="select * from tblstudent where email='null'";
    $search_result=filtertable($query);
}

function filtertable($query)
{
    $connect=mysqli_connect("localhost","root","","collegefee");
    $filter_Result=mysqli_query($connect,$query);
    return $filter_Result;
}


?>




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
    <style>
        #search{
            width: 75px;
            height: 30px;
            background-color: lightblue;
            border: 1px solid deepskyblue;
        }
    </style>
</head>
<?php
include("php/userheader.php");

?>

<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="row" >
                    <div class="col-md-12">
                        <h2 class="page-header" ><strong>Student Details</strong>
                        </h2>


                        <div class="panel panel-success">
                            <div class="panel-heading">
                                Student Details
                            </div>
                            <div class="panel-body">
                                <div class="table-sorting table-responsive">
                                    <!--  SHOW ENTRIES-->
                                    <form action="" method="post" id="formnotes">
                                        <div id="tSortable22_length" class="dataTables_length"><input name="valuesearch"  type="email"  id="valuesearch" placeholder="Enter the Email"/></label></div>
                                        <div id="tSortable22_length" class="dataTables_length"><input type="submit" name="search" class="pull-right" id="search" value="Search"/></div>
                                        <?php
                                        while ($row=mysqli_fetch_array($search_result)):?>
                                        <table class="table table-striped table-bordered table-hover" id="tSortable22">
                                            <label id="uname" class="pull-right">Reference: <?php echo $row['username'];?></label>

                                            <thead>
<!--                                            <tr>-->
<!--                                                <th>Student Details</th>-->
<!---->
<!--                                            </tr>-->


                                                <tr>
                                                    <td id="name" ><strong>Name :</strong><?php echo $row['fname']." ".$row['mname']." ".$row['lname'];?></td>
                                                    <td id="branch" ><strong>Branch :</strong><?php echo $row['branch']?></td>
                                                    <td id="year" ><strong>Year :</strong><?php echo $row['year']?></td>
                                                    <td id="dob"><strong>DOB :</strong><?php echo $row['dob']?></td>
                                                </tr>

                                                <tr><td ><strong>Email:</strong></td>
                                                    <td colspan="3" id="semail"><?php echo $row['email']?></td> </tr>

                                                <tr>
                                                    <th colspan="2">Particular</th>
                                                    <th colspan="2" >Amount</th>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"> Admission fee</td>
                                                    <td colspan="2" id="admission"><?php echo $row['admission']?></td>
                                                </tr>
                                                <tr>

                                                    <td colspan="2"> Exam fee</td>
                                                    <td colspan="2" id="exam"><?php echo $row['exam']?></td>

                                                </tr>
                                                <tr>

                                                    <td colspan="2">Feast Fee</td>
                                                    <td colspan="2" id="feast"><?php echo $row['feast']?> </td>

                                                </tr>
                                                <tr>

                                                    <td colspan="2"> Stationary Fee</td>
                                                    <td colspan="2" id="stationary"> <?php echo $row['stationary']?></td>


                                                </tr>
                                                <tr>

                                                    <td colspan="2">SoftSkill</td>
                                                    <td colspan="2" id="softskill"> <?php echo $row['softskill']?></td>

                                                </tr>

                                                <tr>

                                                    <td colspan="2">Hostel Fee</td>
                                                    <td colspan="2" id="hostel"><?php echo $row['hostel']?></td>


                                                </tr>


                                                <tr>

                                                    <td colspan="2">Bus Fee</td>
                                                    <td colspan="2" id="bus"><?php echo $row['bus']?></td>


                                                </tr>

                                                <tr><td colspan="4"></td> </tr>
                                                <tr>

                                                    <td colspan="2">Bus Source</td>
                                                    <td colspan="2" id="source"><?php echo $row['source']?></td>

                                                </tr>

                                                <tr>

                                                    <td colspan="2">Total</td>
                                                    <td colspan="2" id="total"><?php echo $row['total']?></td>


                                                </tr>


                                                <tr>

                                                    <td colspan="2">Paid</td>
                                                    <td colspan="2" id="paid"><?php echo $row['paid']?></td>


                                                </tr>

                                                <tr>

                                                    <td colspan="2">Balance</td>
                                                    <td colspan="2" id="balance"><?php echo $row['balance']?></td>


                                                </tr>

                                            <?php endwhile;
                                            ?>

                                            </thead>

                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<body>

</body>
</html>
