<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
      <title>Designer At Home</title>
      <link rel="stylesheet" href="css/bootstrap.css">
      <!-- Optional theme -->
      <link rel="stylesheet" href="css/custom.css">
      <link rel="stylesheet" href="css/bootstrap-theme.css">
      
      <!-- Latest compiled and minified JavaScript -->
      <script src="js/jquery.min.js"></script>
      <script src="js/moment.js"></script>
      <script src="js/bootstrap.min.js"></script>
      
   </head>
   <body>
      <!-- This is the top  navigation !-->
      <nav class="navbar navbar-default">
         <div class="container-fluid">
            <div class="navbar-header">
               <a class="navbar-brand" href="#">Designer @ Home</a>
            </div>
            <ul class="nav navbar-nav">
               <li class="active"><a href="#">Home</a></li>
               <li><a href="search_form.php">About</a></li>
               <li><a href="#">Services</a></li>
               <li><a href="#">Contact</a></li>
            </ul>
         </div>
      </nav>
      <div class="container">
         <div class="row">
            
            <div class="col-md-8 panel panel-default">
<?php
			$dbConnectLink=mysqli_connect("localhost","shammi","1J2c3e4e","darziondemand");
	
if ($dbConnectLink->connect_error) {
	echo 'connection failed';
	die("Connection failed: " . $dbConnectLink->connect_error);
} 
     $location =$_POST["location"]; 
	 $name =$_POST["name"];
	 $email =$_POST["email"];
	 $phoneNumber =$_POST["phoneNumber"];
	 $workType =$_POST["workType"];
	 $gender = $_POST["optradio"];
	 $schedule =$_POST["datetimepicker1"];
	 
	if (isset($_POST["workType"])){ 
	$total_work='';
	foreach ($_POST["workType"] as $work) { 
		print "You want a $work workType. <br/>"; 
		$total_work = $total_work.",".$work;
	} 
 }
 $sql ="INSERT INTO property (flat_type,flat_area,flat_price,posted_by,amenities)
		VALUES ('$flat_type', '$flat_area','$flat_price','$posted_by','$amenities_total')";
	if($dbConnectLink->query($sql)=== TRUE) {
			echo "new record created successfully";
			} else {
			echo "error" . $sql . "<br>" . $dbConnectLink->error;
			}
		$dbConnectLink->close();
		
?>
designer@home<br>
your location is:
<?php echo $_POST["location"]; ?><br>
Your email address is: 
<?php echo $_POST["name"]; ?><br>
your email address is:
<?php echo $_POST["email"];?><br> 
your phone number is:
<?php echo $_POST["phoneNumber"]; ?><br>

choice of tailor:
<?php echo $_POST["optradio"]; ?><br>
time schedule:
<?php echo $_POST["datetimepicker1"]; ?><br>



<div class="row">
         <div class="col-md-12 panel-default">
            <div class="panel-footer" style="text-align:center">
               <span class="glyphicon glyphicon-copyright-mark"></span> All rights reserved www.luckyakhi.com
            </div>
         </div>
      </div>

</body>
</html>