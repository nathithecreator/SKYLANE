<?php

$connection = mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'skyylane');

if(isset($_POST['insertdata']))
{
	$serviceid=$_POST['serviceid'];
	$vehicleid =$_POST['vehicleid'];
	$maker =$_POST['maker'];
	$kilometers =$_POST['kilometers'];
	$issue =$_POST['issue'];
	$datefix =$_POST['datefix'];
	$costfix =$_POST['costfix'];
	$yesorno =$_POST['yesorno'];
	
	
	$query ='INSERT INTO `fixcars` (`serviceid`,`vehicleid`,`maker`,`kilometers`,`issue`,`datefix`,`costfix`,`yesorno`) VALUES("'.$serviceid.'","'.$vehicleid.'","'.$maker.'","'.$kilometers.'","'.$issue.'","'.$datefix.'","'.$costfix.'","'.$yesorno.'")';
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



