<?php

$connection = mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'skyylane');

if(isset($_POST['insertdata']))
{
	$vehicleid=$_POST['Vehicle_ID'];
	$automaker =$_POST['Vehicle_Maker'];
	$registrationnumber =$_POST['Registration_Number'];
	$vehicletype =$_POST['Vehicle_Type'];
	$enginesize =$_POST['Engine_Size'];
	$currentodm =$_POST['Current_Odm'];
	$year =$_POST['Year'];
	
	
	$query ='INSERT INTO `vehicleinfo` (`Vehicle ID`,`Vehicle Maker`,`Registration Number`,`Vehicle Type`,`Engine Size`,`Current Odm`,`Year`) VALUES("'.$vehicleid.'","'.$automaker.'","'.$registrationnumber.'","'.$vehicletype.'","'.$enginesize.'","'.$currentodm.'","'.$year.'")';
	$query_run = mysqli_query($connection, $query);
	
	if($query_run)
	{
		echo '<script> alert("Data Saved");</script>';
		header('Location: index.php');
	}
	else
	{
		echo '<script> alert("Data Not Saved");</script>';
	}	
}

?>


