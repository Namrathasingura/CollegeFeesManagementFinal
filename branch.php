<!DOCTYPE html>
<html>
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
        function showpopup1() {
            // alert(vals);
            $('.popup1').animate({top:'1%'},500);
        }
        function hidepopup1() {
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
            width: 10px;
            border: none;
            background-color: transparent;
        }
        .fa-edit{
            color: blue;
        }
        .fa-trash{
            color: red;
        }
    </style>

</head>
<body>
<?php
include("php/header.php");
?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row" >
            <div class="col-md-12">
                <h2 class="page-header" ><strong>BRANCH</strong>
                <a href="AddBranch.php" class="btn btn-primary btn-sm pull-right" style="background-color: darkblue"><i class="glyphicon glyphicon-plus"></i> Add </a></h2>

                <div class="panel panel-success">
                    <div class="panel-heading">
                        Manage Branch
                    </div>
                    <div class="panel-body">
                        <div class="table-sorting table-responsive">
                            <div class="dataTables_filter" id="tSortable22_filter"><label><i class="fa fa-search"></i> <input type="text" aria-controls="tSortable22"></label></div>
                            <table class="table table-striped table-bordered table-hover" id="tSortable22">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Code</th>
                                    <th>Hod</th>
                                    <th>Action</th>
                                </tr>
                                <?php
                                include 'database/connect.php';
                                //                                        $sql="SELECT f.id,f.sem,f.fee,b.bcode,b.bname FROM tblfee f,tblbranch b where b.id=f.bid";
                                $sql="SELECT * FROM tblbranch ";
                                $result=$conn->query($sql);
                                if($result->num_rows>0)
                                {
                                while ($row = $result->fetch_assoc())
                                {
                                ?>
                                <tr>

                                    <td ><label type="text" id="id" value=""><?php echo $row['id']; ?></label></td>
                                    <td ><input type="text" id="bname" value="<?php echo $row['bname']; ?>"/></td>
                                    <td ><input type="text"  id="bcode" value="<?php echo $row['bcode']; ?>"/></td>
                                    <td ><input type="text" id="hod" value="<?php echo $row['hod']; ?>"/></td>

                                    <td>
                                        <button class="editbranch" onclick="showpopup1()" name="update" vals="<?php echo $row['id'];?>"><i  class="fa fa-edit"></i> </button>&nbsp;&nbsp;

                                        <button class="editbranch" name="delete" vals="<?php echo $row['id'];?>"><i  class="fa fa-trash"></i></button>
                                    </td>
                                </tr>

                                </thead>
                                <?php
                                }
                                }
                                ?>


                            </table>
<!--                            <div class="dataTables_paginate paging_two_button" id="tSortable22_paginate"><a class="paginate_enabled_previous" tabindex="0" role="button" id="tSortable22_previous" aria-controls="tSortable22">Previous</a><a class="paginate_enabled_previous" tabindex="0" role="button" id="tSortable22_next" aria-controls="tSortable22">Next</a></div>-->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--=======-->
<!--<div class="popup1">-->
<!---->
<!---->
<!--    <div class="panel panel-success">-->
<!--        <div class="panel-heading">-->
<!--            Branch Details-->
<!--            <button class="pull-right" onclick="hidepopup1()" style="border: none;background-color: transparent">x</button>-->
<!--        </div>-->
<!--        <div class="panel-body">-->
<!--            <div class="table-sorting table-responsive">-->
<!--                <!--  SHOW ENTRIES-->-->
<!--                <form action="" method="post" id="formnotes">-->
<!---->
<!---->
<!--                    <table class="table table-striped table-bordered table-hover" id="tSortable22">-->
<!--<!--                        <label id="uname" class="pull-right">Reference:ash@gmail.com</label>-->-->
<!--                        <!--<label id="uname" class="pull-right">Reference: -->--><?php ////echo $row['username'];?><!--<!--</label>-->-->
<!--                        <thead>-->
<!--                        --><?php
//                        include 'database/connect.php';
//                        //                                        $sql="SELECT f.id,f.sem,f.fee,b.bcode,b.bname FROM tblfee f,tblbranch b where b.id=f.bid";
//                        $sql="SELECT * FROM tblbranch";
//                        $result=$conn->query($sql);
//                        if($result->num_rows>0)
//                        {
//                        while ($row = $result->fetch_assoc())
//                        {
//                        ?>
<!--                        <tr>-->
<!--                            <td id="name"><strong>Branch Id :</strong>--><?php //echo $row['id']; ?><!--</td></tr><tr>-->
<!--                            <td id="branch" ><strong>Branch Name :</strong>--><?php //echo $row['bname']; ?><!--</td></tr><tr>-->
<!--                            <td id="year" ><strong>Code :</strong>--><?php //echo $row['bcode']; ?><!--</td></tr><tr>-->
<!--                            <td id="dob"><strong>HOD :</strong>--><?php //echo $row['hod']; ?><!--</td></tr><tr><td>-->
<!--                            <button class="editbranch" name="update" vals="--><?php //echo $row['id'];?><!--">EDIT</button></td></tr>-->
<!--                            --><?php
//                        }
//                        }
//                        ?>
<!--                            <!--                                                <td id="name" ><strong>Name :</strong>-->--><?php ////echo $row['fname']." ".$row['mname']." ".$row['lname'];?><!--<!--</td>-->-->
<!--                            <!--                                                <td id="branch" ><strong>Branch :</strong>-->--><?php ////echo $row['branch']?><!--<!--</td>-->-->
<!--                            <!--                                                <td id="year" ><strong>Year :</strong>-->--><?php ////echo $row['year']?><!--<!--</td>-->-->
<!--                            <!--                                                <td id="dob"><strong>DOB :</strong>-->--><?php ////echo $row['dob']?><!--<!--</td>-->-->
<!---->
<!---->
<!---->
<!--                        <!--                                            -->--><?php ////endwhile;
//                        //                                            ?>
<!---->
<!--                        </thead>-->
<!---->
<!--                    </table>-->
<!---->
<!---->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
</body>
</html>
