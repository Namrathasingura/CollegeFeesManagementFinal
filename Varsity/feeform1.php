<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>college Fees Payment System</title>

    <link href="../css/bootstrap.css" rel="stylesheet" />

    <link href="../css/font-awesome.css" rel="stylesheet" />

    <link href="../css/basic.css" rel="stylesheet" />

    <link href="../css/custom.css" rel="stylesheet" />

    <link href="../css/datatable/datatable.css" rel="stylesheet" />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <script src="../database/jquery-3.1.1.js"></script>
    <script src="../database/script.js"></script>
    <style>
        #admit{
            width: 75px;
            height: 30px;
            background-color: lightblue;
            border: 1px solid deepskyblue;
        }
    </style>

</head>
<?php
include("../php/headerapp.php");
?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="row" >
                    <div class="col-md-12">
                        <!--                        <h2 class="page-header" ><strong>Application form</strong>-->

                        <div class="panel panel-success">
                            <div class="panel-heading">
                                Fee Structure
                            </div>
                            <div class="panel-body">
                                <div class="table-sorting table-responsive">
                                    <!--  SHOW ENTRIES-->
                                    <!--                                    <div id="tSortable22_length" class="dataTables_length"><label>Show <select size="1" name="tSortable22_length" aria-controls="tSortable22"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div>-->
                                    <!--      -->
                                    <!--                                    <div class="dataTables_filter" id="tSortable22_filter"><label><i class="fa fa-search"></i> <input type="text" aria-controls="tSortable22"></label></div>-->
                                    <?php
                                    $branch=$_POST['branch'];
                                    $year=$_POST['year'];
                                    $quota=$_POST['quota'];
                                    $type=$_POST['type'];
                                    $source=$_POST['source'];
                                    $fname=$_POST['fname'];
                                    $mname=$_POST['mname'];
                                    $lname=$_POST['lname'];
                                    $bus=$_POST['bus'];
                                    $dob=$_POST['dob'];
                                    $uname=$_POST['uname'];
                                    $semail=$_POST['semail'];

                                    include '../database/connect.php';

                                    $query1="SELECT * FROM tblfee where branch='$branch' and year='$year' and quota='$quota'";
                                    $res1=mysqli_query($conn,$query1);

                                    while($row1=mysqli_fetch_array($res1)):;
                                        $admissionfee=$row1['admission'];
                                        $examfee= $row1['exam'];
                                        $feastfee=$row1['feast'];
                                        $stationaryfee =$row1['stationary'];
                                        $softskillfee=$row1['softskill'];
                                    endwhile;


                                    $query2="SELECT * FROM tblhostel where type='$type' ";
                                    $res2=mysqli_query($conn,$query2);

                                    while($row2=mysqli_fetch_array($res2)):;
                                        $hostelfee=$row2['fee'];
                                    endwhile;


                                    if($bus=='yes')
                                    {
                                        if($source!='no')
                                        {
                                            $query3="SELECT * FROM tblsource where source='$source' ";
                                        }
                                        else
                                        {
                                            $query3="SELECT * FROM tblsource where source='hostel' ";
                                            $source='hostel';
                                        }
                                        $res3=mysqli_query($conn,$query3);
                                        while($row3=mysqli_fetch_array($res3)):;
                                            $busfee= $row3['fee'];
                                        endwhile;


                                    }
                                    else
                                    {
                                        $busfee=0;
                                        $source='no';
                                    }
                                    $total=$admissionfee+$examfee+$feastfee+$stationaryfee+$softskillfee+$hostelfee+$busfee;
                                    $paid=0;
                                    $balance=$total;
                                    ?>

                                    <label id="uname" class="pull-right"><?php echo $uname;?></label>
                                    <form class="contactform" method="post">
                                        <table class="table table-striped table-bordered table-hover" id="tSortable22" >
                                            <tr>
                                                <td id="name" ><strong>Name :</strong><?php echo $fname." ".$mname." ".$lname;?></td>
                                                <td id="branch" ><strong>Branch :</strong><?php echo $branch;?></td>
                                                <td id="year" ><strong>Year :</strong><?php echo $year;?></td>
                                                <td id="dob"><strong>DOB :</strong><?php echo $dob;?></td>
                                            </tr>

                                            <tr><td ><strong>Email:</strong></td>
                                                <td colspan="3" id="semail"><?php echo $semail;?></td> </tr>

                                            <tr>
                                                <th colspan="2">Particular</th>
                                                <th colspan="2" >Amount</th>
                                            </tr>
                                            <tr>
                                                <td colspan="2"> Admission fee</td>
                                                <td colspan="2" id="admission"> <?php echo $admissionfee;?></td>
                                            </tr>
                                            <tr>

                                                <td colspan="2"> Exam fee</td>
                                                <td colspan="2" id="exam"> <?php echo $examfee;?></td>

                                            </tr>
                                            <tr>

                                                <td colspan="2">Feast Fee</td>
                                                <td colspan="2" id="feast"><?php echo $feastfee;?> </td>

                                            </tr>
                                            <tr>

                                                <td colspan="2"> Stationary Fee</td>
                                                <td colspan="2" id="stationary"> <?php echo $stationaryfee;?> </td>


                                            </tr>
                                            <tr>

                                                <td colspan="2">SoftSkill</td>
                                                <td colspan="2" id="softskill"> <?php echo $softskillfee;?></td>

                                            </tr>

                                            <tr>

                                                <td colspan="2">Hostel Fee</td>
                                                <td colspan="2" id="hostel"><?php echo $hostelfee;?></td>


                                            </tr>


                                            <tr>

                                                <td colspan="2">Bus Fee</td>
                                                <td colspan="2" id="bus"><?php echo $busfee;?></td>


                                            </tr>

                                            <tr><td colspan="4"></td> </tr>
                                            <tr>

                                                <td colspan="2">Bus Source</td>
                                                <td colspan="2" id="source"><?php echo $source;?></td>

                                            </tr>

                                            <tr>

                                                <td colspan="2">Total</td>
                                                <td colspan="2" id="total"><?php echo $total?></td>


                                            </tr>


                                            <tr>

                                                <td colspan="2">Paid</td>
                                                <td colspan="2" id="paid"><?php echo $paid;?></td>


                                            </tr>

                                            <tr>

                                                <td colspan="2">Balance</td>
                                                <td colspan="2" id="balance"><?php echo $balance;?></td>


                                            </tr>



                                        </table>
                                        <input id="admit" type="button"
                                               class="mu-post-btn pull-right"
                                               name="admit" value="Admit" />
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















