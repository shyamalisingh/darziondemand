<?php
$dbConnectLink=mysqli_connect("localhost","shammi","1J2c3e4e","rentalhome");
	
if ($dbConnectLink->connect_error) {
	echo 'connection failed';
	die("Connection failed: " . $dbConnectLink->connect_error);
} 
$flat_type =$_POST["FlatType"];
$flat_area =$_POST["flat_area"];
$flat_price =$_POST["flat_price"];
$posted_by =$_POST["postedby"];
$amenities =$_POST["Amenities"];
echo "Your flat area is".$flat_area."<br>";
echo "your flat price is".$flat_price."<br>";
echo "posted by".$posted_by."<br>";

	

	if (isset($_POST["Amenities"])){ 
	$amenities_total='';
	foreach ($_POST["Amenities"] as $feature) { 
		print "You want a $feature Amenities. <br/>"; 
		$amenities_total = $amenities_total.",".$feature;
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