<?php
session_start();
error_reporting(0);
include('includes/config.php');

if(isset($_POST['submit']))
{
$subjectname=$_POST['subjectname'];
$subjectcode=$_POST['subjectcode']; 
$sql="INSERT INTO  tblsubjects(SubjectName,SubjectCode) VALUES(:subjectname,:subjectcode)";
$query = $dbh->prepare($sql);
$query->bindParam(':subjectname',$subjectname,PDO::PARAM_STR);
$query->bindParam(':subjectcode',$subjectcode,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Subject Created successfully";
}
else 
{
$error="Something went wrong. Please try again";
}

}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Admin Subject Creation </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        
    </head>
    <body >

            

                    <!-- ========== LEFT SIDEBAR ========== -->
                   <?php include('sidenav.php');?>  
                    <!-- /.left-sidebar -->

                    <div class="main-page" style="margin-left: 230px;">

                     <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Subject Creation</h2>
                                
</div>
                                
<!-- /.col-md-6 text-right -->
</div>
                            <!-- /.row -->
<div class="row breadcrumb-div"  >
<div class="col-md-6">
<ul class="breadcrumb">
<li><a href="finaladmin.php"><i class="fa fa-home"></i> Home</a></li>
<li> Subjects</li>
<li class="active">Create Subject</li>
<li style="float: right;"><a href="logout.php"><i class="fa fa-sign-out"></i>Log out</a></li>
</ul>
</div>
                             
</div>
<!-- /.row -->
</div>
<div class="container-fluid">
                           
<div class="row">
<div class="col-md-12">
<div class="panel">
<div class="panel-heading">
<div class="panel-title">
<h5>Create Subject</h5>
</div>
</div>
<div class="panel-body">
<?php if($msg){?>
<div class="alert alert-success left-icon-alert" role="alert">
 <strong>Well done!</strong><?php echo htmlentities($msg); ?>
 </div><?php } 
else if($error){?>
    <div class="alert alert-danger left-icon-alert" role="alert">
<strong>Oh snap!</strong> <?php echo htmlentities($error); ?>
</div>
<?php } ?>
<form class="form-horizontal" method="post">
<div class="form-group">
<label for="default" class="col-sm-2 control-label">Subject Name</label>
<div class="col-sm-10">
 <input type="text" name="subjectname" class="form-control" id="default" placeholder="Subject Name" required="required">
</div>
</div>
<div class="form-group">
<label for="default" class="col-sm-2 control-label">Subject Code</label>
<div class="col-sm-10">
 <input type="text" name="subjectcode" class="form-control" id="default" placeholder="Subject Code" required="required">
</div>
</div>
<div class="col-sm-offset-2 col-sm-10">
<button type="submit" name="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>

</div>
</div>
</div>
<!-- /.col-md-12 -->
</div>
</div>
                </div>
<!-- /.content-container -->
</div>
            <!-- /.content-wrapper -->
        </div>
        <!-- /.main-wrapper -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>
        <script src="js/prism/prism.js"></script>
        <script src="js/select2/select2.min.js"></script>
        <script src="js/main.js"></script>
        <script>
            $(function($) {
                $(".js-states").select2();
                $(".js-states-limit").select2({
                    maximumSelectionLength: 2
                });
                $(".js-states-hide").select2({
                    minimumResultsForSearch: Infinity
                });
            });
        </script>
    </body>
</html>

