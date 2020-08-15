
<?php
session_start();
error_reporting(0);
include('includes/config.php');


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Manage Subjects</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >

    </head>
    <body >

            <div class="main">
                <div class="content-container">
<?php include('sidenav.php');?>  

<div class="main-page" style="margin-left: 230px;">
<div class="container-fluid">
<div class="row page-title-div">
<div class="col-md-6">
<h2 class="title">Manage Subjects</h2>
                                
</div>
                                
<!-- /.col-md-6 text-right -->
</div>
<!-- /.row -->
<div class="row breadcrumb-div">
<div class="col-md-6">
<ul class="breadcrumb">
<li><a href="finaladmin.php"><i class="fa fa-home"></i> Home</a></li>
<li> Subjects</li>
<li class="active">Manage Subjects</li>
<li style="float: right;"><a href="logout.php"><i class="fa fa-sign-out"></i>Log out</a></li>
</ul>
</div>
                             
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->

<section class="section">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="panel">
<div class="panel-heading">
<div class="panel-title">
<h5>View Subjects Info</h5>
</div>
</div>
<?php if($msg){?>
<div class="alert alert-success left-icon-alert" role="alert">
 <strong>Well done!</strong><?php echo htmlentities($msg); ?>
 </div><?php } 
else if($error){?>
    <div class="alert alert-danger left-icon-alert" role="alert">
<strong>Oh snap!</strong> <?php echo htmlentities($error); ?>
</div>
<?php } ?>
<div class="panel-body p-20">

<table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
<thead>
<tr>
<th>#</th>
<th>Subject Name</th>
<th>Subject Code</th>
<th>Creation Date</th>
<th>Updation Date</th>
<th>Action</th>
</tr>
</thead>
<tfoot>
<tr>
<th>#</th>
<th>Subject Name</th>
<th>Subject Code</th>
<th>Creation Date</th>
<th>Updation Date</th>
<th>Action</th>
</tr>
</tfoot>
<tbody>
<?php $sql = "SELECT * from tblsubjects";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{   ?>
<tr>
 <td><?php echo htmlentities($cnt);?></td>
<td><?php echo htmlentities($result->SubjectName);?></td>
<td><?php echo htmlentities($result->SubjectCode);?></td>
<td><?php echo htmlentities($result->Creationdate);?></td>
<td><?php echo htmlentities($result->UpdationDate);?></td>
<td>
<a href="editsubject.php?subjectid=<?php echo htmlentities($result->id);?>"><i class="fa fa-edit" title="Edit Record"></i> </a> 

</td>
</tr>
<?php $cnt=$cnt+1;}} ?>
                                                       
                                                    
</tbody>
</table>

                                         
<!-- /.col-md-12 -->
</div>
</div>
</div>
<!-- /.col-md-6 -->

                                                               
</div>
<!-- /.col-md-12 -->
</div>
</div>
<!-- /.panel -->
</div>
<!-- /.col-md-6 -->

</div>
<!-- /.row -->

</div>
<!-- /.container-fluid -->
</section>
<!-- /.section -->

</div>
<!-- /.main-page -->

                    

                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/prism/prism.js"></script>
        <script src="js/DataTables/datatables.min.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            $(function($) {
                $('#example').DataTable();

                $('#example2').DataTable( {
                    "scrollY":        "300px",
                    "scrollCollapse": true,
                    "paging":         false
                } );

                $('#example3').DataTable();
            });
        </script>
    </body>
</html>


