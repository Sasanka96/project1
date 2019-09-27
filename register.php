<!doctype html>

<html lang="en"
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<form action="register.php" method="post" >
<div class="container">
  <div class="panel panel-primary">
    <div class="panel-heading">Textile Status Management</div>
      <div class="panel-body">
         <div class="row">
            <div class="col-md-6">
               <div class="form-group required">
                  <label class="control-label">Line</label>
                  <input type="text" class="form-control" name="fname" id="fname" required>
               </div>
							 </div>
            <div class="col-md-6">
               <div class="form-group required">
                  <label class="control-label">Error Code</label>
								
                  <input type="text" class="form-control" name="lname" id="lname" required>
               </div>
            </div>
         </div>

         <div class="row">
            <div class="col-md-6">
               <div class="form-group  required">
							   <label class="control-label">Start Time</label>
                    <div class='input-group date' id='datetimepicker2'>
                      <input type='text' class="form-control" required >
                      <span class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar"></span>
										  </span>
							      </div>
							 </div>
						 </div>
       
            <div class='col-md-6'>
               <div class="form-group  required">
                  <label class="control-label">End Time</label>
                  <div class='input-group date' id='datetimepicker1'>
                     <input type='text' class="form-control" required>
                     <span class="input-group-addon">
                     <span class="glyphicon glyphicon-calendar"></span>
                     </span>
                  </div>
               </div>
            </div>
        </div>
        <input type="submit" class="btn btn-primary" name="reg_user" value="Submit">
      </div>
   </div>
</div>
</form>
							 <script>
  $(function () {
    $('#datetimepicker1').datetimepicker();
 });
               </script>
	
	             <script>
  $(function () {
    $('#datetimepicker2').datetimepicker();
 });
               </script>
</body>
</html>



<?php

$line = "";
$starttime   = "";
$endtime   = "";
$errorcode ="";

$db = mysqli_connect('localhost', 'root', '', 'textilestatus');

if (isset($_POST['reg_user'])) {

  $line = mysqli_real_escape_string($db, $_POST['Line']);
  $starttime = mysqli_real_escape_string($db, $_POST['StartTime']);
  $endtime = mysqli_real_escape_string($db, $_POST['EndTime']);
	$errorcode = mysqli_real_escape_string($db, $_POST['ErrorCode']);
	
  $query = "INSERT INTO `textileStatus`(`Line`, `StartTime`, `EndTime`,'ErrorCode') VALUES('$line', '$starttime', '$endtime', '$errorcode' )";
  	mysqli_query($db, $query);
    
  	
  
  }
?>


	