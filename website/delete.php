<?php

include 'connect.php';

if(isset($_ POST['deletesend'])){
$unique=$_POST['deletesend'];

$sql="delete from 'crud' where id=$unique";
$result=mysqli_query($con,$sql);

}

?>
