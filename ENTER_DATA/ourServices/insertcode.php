<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'skyylane');

if(isset($_POST['insertdata']))
{
	$jobid = $_POST['jobid'];
	$vehicleid = $_POST['vehicleid'];
	$driverid = $_POST['driverid'];
	$destination = $_POST['destination'];
	$describe = $_POST['describe'];
	$hours = $_POST['hours'];
	$distance = $_POST['distance'];
	$jobDone = $_POST['jobDone'];
	$jobdate = $_POST['jobdate'];
	
	
	$query = 'INSERT INTO `ourjobs` ( `jobid`, `vehicleid`, `driverid`, `destination`, `describe`, `hours`, `distance`, `jobDone`, `jobdate`) VALUES("'.$jobid.'","'.$vehicleid.'","'.$driverid.'","'.$destination.'","'.$describe.'","'.$hours.'","'.$distance.'","'.$jobDone.'","'.$jobdate.'")';
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


						