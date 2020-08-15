
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
        <title>Admin Manage Students</title>
    
       
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
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
                                    <h2 class="title">Manage Students</h2>
                                
                                </div>
                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
<div class="row breadcrumb-div">
<div class="col-md-6">
<ul class="breadcrumb">
<li><a href="finaladmin.php"><i class="fa fa-home"></i> Home</a></li>
<li> Students</li>
<li class="active">Manage Students</li>
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
                                                    <h5>View Students Info</h5>
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
 <th>Student Name</th>
<th>Roll Id</th>
<th>Class</th>
<th>Reg Date</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead>
<tfoot>
<tr>
<th>#</th>
<th>Student Name</th>
<th>Roll Id</th>
<th>Class</th>
<th>Reg Date</th>
<th>Status</th>
<th>Action</th>
</tr>
</tfoot>
<tbody>
<?php $sql = "SELECT tblstudents.StudentName,tblstudents.RollId,tblstudents.RegDate,tblstudents.StudentId,tblstudents.Status,tblclasses.ClassName,tblclasses.Section from tblstudents join tblclasses on tblclasses.id=tblstudents.ClassId";
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
 <td><?php echo htmlentities($result->StudentName);?></td>
<td><?php echo htmlentities($result->RollId);?></td>
 <td><?php echo htmlentities($result->ClassName);?>(<?php echo htmlentities($result->Section);?>)</td>
<td><?php echo htmlentities($result->RegDate);?></td>
 <td><?php if($result->Status==1){
echo htmlentities('Active');
}
else{
   echo htmlentities('Blocked'); 
}  ?></td>
<td>
    <a href="editstudent.php?stid=<?php echo htmlentities($result->StudentId);?>"><i class="fa fa-edit" title="Edit Record"></i> </a> 

</td>
</tr>
<?php $cnt=$cnt+1;}} ?>
                                                       
                                                    
</tbody>
</table>
</div>
</div>
</div>
                                   

                                                               
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
                    <!-- /.main-page --></div>
                <!-- /.content-container -->
</div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        
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


