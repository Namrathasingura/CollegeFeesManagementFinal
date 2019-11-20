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
        #addnote{
            width: 75px;
            height: 30px;
            background-color: lightblue;
            border: 1px solid deepskyblue;
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
                        <h2 class="page-header" ><strong>Add Notes</strong>
                        </h2>


                        <div class="panel panel-success">
                            <div class="panel-heading">
                                Enter Details
                            </div>
                            <div class="panel-body">
                                <div class="table-sorting table-responsive">
                                    <!--  SHOW ENTRIES-->
                                    <form action="database/upload.php" enctype="multipart/form-data" method="post" id="formnotes">
                                        <?php
                                        include "database/connect.php";
                                        $query1="SELECT distinct branch FROM tblfee";

                                        $res1=mysqli_query($conn,$query1);

                                        ?>
                                        <div  class="dataTables_length">
                                            <select name="branch" id="branch" style="width: 150px; height: 25px;" required="required">
                                                <option value="" selected disabled>Choose Branch</option>

                                                <?php while($row1=mysqli_fetch_array($res1)):;?>
                                                    <option value="<?php echo $row1['branch'];?>"><?php echo $row1['branch'];?></option>
                                                <?php endwhile;?>
                                            </select><br/><br/><br/>
                                            <input name="sem"  required="required" style="width="40px""  type="number"  min="1" max="8" id="sem" placeholder="Sem"/><br/><br/><br/>

                                            <input name="file1"  type="file"  id="notes" required="required" /><br/><br/><br/>
                                            <input type="submit" name="addnote" class="addnote pull-right" id="addnote" value="Add"/></div>

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
