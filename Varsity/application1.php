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
        #getfee{
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
                                Application form
                            </div>
                            <div class="panel-body">
                                <div class="table-sorting table-responsive">
                                    <!--  SHOW ENTRIES-->
                                    <!--                                    <div id="tSortable22_length" class="dataTables_length"><label>Show <select size="1" name="tSortable22_length" aria-controls="tSortable22"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div>-->
                                    <!--      -->
                                    <!--                                    <div class="dataTables_filter" id="tSortable22_filter"><label><i class="fa fa-search"></i> <input type="text" aria-controls="tSortable22"></label></div>-->
                                    <form class="contactform" action="feeform1.php" method="post">
                                        <?php
                                        include "../database/connect.php";
                                        $query1="SELECT distinct branch FROM tblfee";
                                        $query2="SELECT distinct year FROM tblfee";
                                        $query3="SELECT distinct quota FROM tblfee";
                                        $query4="SELECT DISTINCT type FROM tblhostel";
                                        $query5="SELECT DISTINCT source FROM tblsource";
                                        $res1=mysqli_query($conn,$query1);
                                        $res2=mysqli_query($conn,$query2);
                                        $res3=mysqli_query($conn,$query3);
                                        $res4=mysqli_query($conn,$query4);
                                        $res5=mysqli_query($conn,$query5);
                                        ?>
                                        <table class="table table-striped table-bordered table-hover" id="tSortable22"  style="width: 50px; ">
                                            <thead>
                                            <tr>
                                                <td><p class="comment-form-author">
                                                        <label for="author">First Name <span class="required">*</span></label> <br/>
                                                        <input type="text" id="fname" required="required" size="30" value="" name="fname">
                                                    </p>
                                                </td>
                                                <td> <p class="comment-form-author">
                                                        <label for="author">Middle Name </label>  <br/>
                                                        <input type="text" id="mname"  size="30" value="" name="mname">
                                                    </p>
                                                </td>
                                                <td> <p class="comment-form-author">
                                                        <label for="author">Last Name <span class="required">*</span></label>   <br/>
                                                        <input type="text" id="lname" required="required" size="30" value="" name="lname">
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <p class="comment-form-author">
                                                        <label for="author">Email <span class="required">*</span></label> <br/>
                                                        <input type="email" id="semail" required="required" size="30" value="" name="semail">
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="comment-form-author">
                                                        <label for="author">DOB <span class="required">*</span></label> <br/>
                                                        <input type="date" id="dob" required="required" size="30" value="" name="dob">
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <p class="comment-form-author">
                                                        <label for="author">Branch <span class="required">*</span></label> <br/>
                                                        <!--                                            <input type="text" id="lname" required="required" size="30" value="" name="author">-->
                                                        <select name="branch" id="branch">
                                                            <option value="" selected disabled>Choose Branch</option>

                                                            <?php while($row1=mysqli_fetch_array($res1)):;?>
                                                                <option value="<?php echo $row1['branch'];?>"><?php echo $row1['branch'];?></option>
                                                            <?php endwhile;?>
                                                        </select>
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="comment-form-author">
                                                        <label for="author">Year <span class="required">*</span></label> <br/>
                                                        <!--                                            <input type="text" id="lname" required="required" size="30" value="" name="author">-->
                                                        <select name="year" id="year">
                                                            <option value="" selected disabled>Choose Year</option>

                                                            <?php while($row2=mysqli_fetch_array($res2)):;?>
                                                                <option value="<?php echo $row2['year'];?>"><?php echo $row2['year'];?></option>
                                                            <?php endwhile;?>
                                                        </select>
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"> <p class="comment-form-author">
                                                        <label for="author">Quota <span class="required">*</span></label> <br/>

                                                        <select name="quota" id="quota">
                                                            <option value="" selected disabled>Choose Student Quota</option>

                                                            <?php while($row3=mysqli_fetch_array($res3)):;?>
                                                                <option value="<?php echo $row3['quota'];?>"><?php echo $row3['quota'];?></option>
                                                            <?php endwhile;?>
                                                        </select>
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="comment-form-author">
                                                        <label >Type <span class="required">*</span></label> <br/>

                                                        <select name="type" id="type">
                                                            <option value="" selected disabled>Choose Student Type</option>
                                                            <?php while($row4=mysqli_fetch_array($res4)):;?>
                                                                <option value="<?php echo $row4['type'];?>"><?php echo $row4['type'];?></option>
                                                            <?php endwhile;?>
                                                        </select>
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <p class="comment-form-author">
                                                        <label >Bus <span class="required">*</span></label> <br/>

                                                        <select name="bus" id="bus">
                                                            <option value="no" selected disabled>Choose For Bus</option>

                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>

                                                        </select>
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="comment-form-author">
                                                        <label for="author">Bus Source <span class="required">*</span></label> <br/>
                                                        <select name="source" id="source">
                                                            <option  selected value="no">Choose source</option>

                                                            <?php while($row5=mysqli_fetch_array($res5)):;?>
                                                                <option value="<?php echo $row5['source'];?>"><?php echo $row5['source'];?></option>
                                                            <?php endwhile;?>
                                                        </select>
                                                    </p>
                                                </td>
                                            </tr>
                                            <p class="comment-form-author">
                                                <label for="author">Reference <span class="required">*</span></label> <br/>
                                                <input type="email" id="uname" placeholder="Enter the Username" size="30" value="" name="uname">

                                            </p>


                                            <input type="submit" id="getfee"  value="Getfee"  class="mu-post-btn   pull-right" name="submit">
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