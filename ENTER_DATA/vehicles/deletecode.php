<?php

$connection = mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'skyylane');

if(isset($_POST['delete']))
{
	$id=$_POST['Vehicle ID'];
	
	$query ='DELETE FROM `tblBooks` WHERE `Vehicle ID` = "'.$id.'"';
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