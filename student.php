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
                            <a href="Varsity/applicationform.php" class="btn btn-primary btn-sm pull-right" style="background-color: darkblue"><i class="glyphicon glyphicon-plus"></i> Add </a></h2>

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
                                        $sql="SELECT * FROM tblstudent ";
                                        $result=$conn->query($sql);
                                        if($result->num_rows>0)
                                        {
                                        while ($row = $result->fetch_assoc())
                                        {
                                        ?>
                                        <tr>

                                            <td ><input type="text" id="id" value="<?php echo $row['id']; ?>"/></td>
                                            <td ><input type="text" id="name" value="<?php echo $row['fname']." ".$row['mname']." ".$row['lname'] ; ?>"/></td>
<!--                                            <td ><input type="text" value="--><?php //echo $row['lname']; ?><!--"/></td>-->
                                            <td ><input type="text" id="email" value="<?php echo $row['email']; ?>"/></td>
                                            <td ><input type="date" id="dob" value="<?php echo $row['dob']; ?>"/></td>
                                            <td ><input type="text" id="uname" value="<?php echo $row['username']; ?>"/></td>

                                            <td >
                                                <button style="width: 10px;" class="editstudent" name="view" vals="<?php echo $row['id'];?>"></button></td>
                                            <td> <button style="width: 10px;" class="editstudent" name="update" vals="<?php echo $row['id'];?>"></button></td>
                                               <td> <button style="width: 10px;" class="editstudent" name="delete" vals="<?php echo $row['id'];?>"></button>
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
<body>

</body>
</html>
