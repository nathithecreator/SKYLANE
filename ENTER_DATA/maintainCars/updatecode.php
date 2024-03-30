<?php

$connection = mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'skyylane');

if(isset($_POST['updatedata']))
{
	$serviceid=$_POST['serviceid'];
	$vehicleid =$_POST['vehicleid'];
	$maker =$_POST['maker'];
	$kilometers =$_POST['kilometers'];
	$issue =$_POST['issue'];
	$datefix =$_POST['datefix'];
	$costfix =$_POST['costfix'];
	$yesorno =$_POST['yesorno'];
	

	
	$query = 'UPDATE `fixcars` SET `serviceid` ="'.$serviceid.'",vehicleid="'.$vehicleid.'",maker="'.$maker.'",kilometers="'.$kilometers.'",issue="'.$issue.'",datefix="'.$datefix.'",costfix="'.$costfix.'",yesorno="'.$yesorno.'" WHERE serviceid= "'.$serviceid.'" ';
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

