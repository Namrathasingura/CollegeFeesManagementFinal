<?php
if(isset($_POST['search']))
{
    $valuesearch=$_POST['valuesearch'];
    $query="SELECT * FROM `tblnotes` WHERE CONCAT( `branch`, `sem`, `notes`) LIKE '%".$valuesearch."%'";
    $search_result=filtertable($query);
}

else
{
    $query="select * from tblnotes";
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
        .pull-right{
            width: 75px;
            height: 30px;
            background-color: lightblue;
            border: 1px solid deepskyblue;
        }
        button{
            width: 30px;
            border: none;
            background-color: transparent;
        }
        #fa-book{
            color: blue;
        }
        #fa-trash{
            color: blue;
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
                        <h2 class="page-header" ><strong>Notes</strong>
                            <a href="sample.php" class="btn btn-primary btn-sm pull-right" style="background-color: darkblue"><i class="glyphicon glyphicon-plus"></i> Add </a></h2>

                        </h2>

                        <div class="panel-body">
                            <div class="table-sorting table-responsive">

                        <div class="panel panel-success">
                            <div class="panel-heading">
                                Notes
                            </div>
                                    <!--  SHOW ENTRIES-->
                                    <form action="" method="post" id="formnotes">
                                        <div id="tSortable22_length" class="dataTables_length"><input name="valuesearch"  type="text"  id="valuesearch" placeholder="Enter value to search"/></label></div>
                                        <div id="tSortable22_length" class="dataTables_length"><input type="submit" name="search" class="pull-right" id="search" value="Search"/></div>

                                        <table class="table table-striped table-bordered table-hover" id="tSortable22">
                                            <thead>
                                            <tr>
                                                <th>Notes</th>

                                            </tr>
                                            <?php
                                            while ($row=mysqli_fetch_array($search_result)):?>

                                                <tr>
                                                    <td><?php echo $row['branch'];?></td>
                                                    <td><?php echo $row['sem'];?></td>
                                                    <td><?php echo $row['notes'];?></td>
<!--                                                    <td><input type="submit" class="note fa  fa-book" name="note" id="note" value="--><?php //echo $row['id'];?><!--"/><- CLICK HERE </td>-->
                                                    <td><button class="note" name="note" id="note" value="<?php echo $row['id'];?> "><i id="fa-book" class="fa fa-book"></i> </button></td>
                                                    <td><button class="deletenotes" name="delete"  id="deletenotes" value="<?php echo $row['id'];?> "><i id="fa-trash" class="fa fa-trash"></i> </button></td>
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
