<?php

$connection = mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'skyylane');

if(isset($_POST['updatedata']))
{
	$jobid=$_POST['jobid'];
	$vehicleid =$_POST['vehicleid'];
	$driverid =$_POST['driverid'];
	$destination =$_POST['destination'];
	$describe =$_POST['describe'];
	$hours =$_POST['hours'];
	$distance =$_POST['distance'];
	$jobDone =$_POST['jobDone'];
	$jobdate =$_POST['jobdate'];
	
	
	 
	$query ='UPDATE `ourjobs` SET `jobid` ="'.$jobid.'",`vehicleid`="'.$vehicleid.'",`driverid`="'.$driverid.'",`destination`="'.$destination.'",`describe`="'.$describe.'",`hours`="'.$hours.'",`distance`="'.$distance.'",`jobDone` = "'.$jobDone.'",`jobdate` = "'.$jobdate.'" WHERE `jobid` = "'.$jobid.'" ';
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

							

