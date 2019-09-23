
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Textile Status Form</h2>
  </div>
	
  <form method="post" action="">
  	<div class="input-group">
  	  <label>Line</label>
  	  <input type="text" name="Line">
  	</div>
  	<div class="input-group">
  	  <label>Start Time</label>
  	  <input type="datetime-local" name="StartTime">
  	</div>
  	<div class="input-group">
  	  <label>EndTime</label>
  	  <input type="datetime-local" name="EndTime">
  	</div>
  	
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Submit</button>
  	</div>
  	
  </form>
</body>
</html>
<?php

$line = "";
$starttime   = "";
$endtime   = "";; 


$db = mysqli_connect('localhost', 'root', '', 'textilestatus');

if (isset($_POST['reg_user'])) {

  $line = mysqli_real_escape_string($db, $_POST['Line']);
  $starttime = mysqli_real_escape_string($db, $_POST['StartTime']);
  $endtime = mysqli_real_escape_string($db, $_POST['EndTime']);
  
  $query = "INSERT INTO `TextileStatus`(`Line`, `StartTime`, `EndTime`) VALUES('$line', '$starttime', '$endtime)";
  	mysqli_query($db, $query);
    
  	
  
  }
?>
