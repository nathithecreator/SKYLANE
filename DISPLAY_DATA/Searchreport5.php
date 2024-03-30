<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content ="IE=edge"
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Search Data</title>
	<!--Bootstrap CSS -->
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<form action ="../AdminHome.html" method ="post">
				<button  class="btn btn-dark" data-toggle="modal" >
				Home
				</button>
				</form>
				
				<h2 style="font-size:5vw"> Specific service report for a completed service.</h2>
				
				
				
				<h2 style="font-size:1vw"> Enter Job ID then click search</h2>
<div class ="container my-5">
	<form method="post">
		<input type="text" placeholder ="Search data" name="search">
		
		<button class ="btn btn-dark btn-sm" name="submit">Search</button>
	</form>
	<div class="container my-5">
	<table class="table">
	<?php
	
	
	if(isset($_POST['submit'])){
		
		$search = $_POST['search'];
		
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,'skyylane');
		
		$sql = 'SELECT `jobid`,`destination`,`describe`,`distance` FROM `ourjobs` WHERE `jobid` = "'.$search.'"';
		$result = mysqli_query($connection,$sql);
		if($result){
			if(mysqli_num_rows($result)>0){
				echo '<thead>
				<tr>
				<th scope="col">Job ID</th> 
				<th scope="col">Destination</th> 
				<th scope="col">Description</th> 
				<th scope="col">Distance</th> 
				</tr>
				</thead>';
				while($row = mysqli_fetch_assoc($result)){
					echo '<tbody>
				<tr>
				<td>'.$row['jobid'].' </td>
				<td>'.$row['destination'].' </td>
				<td>'.$row['describe'].' </td>
				<td>'.$row['distance'].' </td>
				</tr>
				</tbody>';
				};
				
			}else{
				echo '<h2 class=text-danger>Data not found</h2>';
			}
		}
		
	}
	
	?>
	
	</table>
	
	</div>
</div>
</body>
<footer class = "footer">
  <div class = "inner-footer">
<div class = "outer-footer">
 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
Copyright &copy;2022 SKYYLANE Fleet Management Coding Pro. All Rights Reserved 
</div>
</footer>
</div>
</html>