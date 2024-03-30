<?php

$connection = mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'skyylane');

if(isset($_POST['updatedata']))
{
	$driverid=$_POST['driverid'];
	$fname =$_POST['fname'];
	$lname =$_POST['lname'];
	$age =$_POST['age'];
	$licensecode =$_POST['licensecode'];
	
	$query ='UPDATE `drivers` SET `driverid` ="'.$driverid.'",`fname` ="'.$fname.'", `lname` ="'.$lname.'",`age` = "'.$age.'",`licensecode` ="'.$licensecode.'" WHERE `driverid` = "'.$driverid.'" ';
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

