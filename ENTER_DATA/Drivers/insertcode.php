<?php

$connection = mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'skyylane');

if(isset($_POST['insertdata']))
{
	$driverid=$_POST['driverid'];
	$fname =$_POST['fname'];
	$lname =$_POST['lname'];
	$age =$_POST['age'];
	$licensecode =$_POST['licensecode'];
	
	
	
	
	$query ='INSERT INTO `drivers` (`driverid`, `fname`, `lname`, `age`, `licensecode` ) VALUES("'.$driverid.'","'.$fname.'","'.$lname.'","'.$age.'","'.$licensecode.'")';
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




