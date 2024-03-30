<?php

$connection = mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'skyylane');

if(isset($_POST['updatedata']))
{
	$vehicleid=$_POST['Vehicle_ID'];
	$automaker =$_POST['Vehicle_Maker'];
	$registrationnumber =$_POST['Registration_Number'];
	$vehicletype =$_POST['Vehicle_Type'];
	$enginesize =$_POST['Engine_Size'];
	$currentodm =$_POST['Current_Odm'];
	$year =$_POST['Year'];
	
	
	
	$query ='UPDATE vehicleinfo SET `Vehicle ID` = "'.$vehicleid.'", `Vehicle Maker` = "'.$automaker.'",`Registration Number` = "'.$registrationnumber.'",`Vehicle Type` = "'.$vehicletype.'",`Engine Size` = "'.$enginesize.'",`Current Odm` = "'.$currentodm.'",`Year` = "'.$year.'" WHERE `Vehicle ID` = "'.$vehicleid.'" ';
	$query_run = mysqli_query($connection, $query);
	
	if($query_run)
	{
		echo '<script> alert("Data Updated");</script>';
		header('Location:index.php');
	}
	else
	{
		echo '<script> alert("Data Not Updated");</script>';
	}	
}

?>

