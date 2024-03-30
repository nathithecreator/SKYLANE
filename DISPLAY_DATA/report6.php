<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> All Services Given</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
</head>
<body>


<form action ="../AdminHome.html" method ="post">
				<button  class="btn btn-dark" data-toggle="modal" >
				Home
				</button>
				</form>



<div class="container">
	<div class="jumbotron">
		<div class="card">
		<h2 style="font-size:5vw"> Planned Trip Report</h2>
		<h3 style="font-size:1vw"> Trips that are not completed</h3>
		</div>
		<div class="card">
			<div class ="card-body">
				
			</div>
		</div>
		
		<div class="card">
			<div class="card-body">
			
			<?php
			$connection = mysqli_connect("localhost","root","");
			$db = mysqli_select_db($connection,'skyylane');
			
			$query = 'SELECT `jobid`,`destination`,`describe`,`distance` FROM `ourjobs`WHERE `jobDone` ="no"';
			$query_run = mysqli_query($connection,$query);
			?>
			
			<table id="datatableid" class="table">
				  <thead>
					<tr>
					  
					  <th scope="col">Job ID</th> 
					  <th scope="col">Destination</th> 
					  <th scope="col">Description</th> 
					  <th scope="col">Distance</th> 
					  
					  
					</tr>
				  </thead>
				  
				  <?php
					if($query_run)
					{
						foreach($query_run as $row)
						{
					?>
				  
				  <tbody>
					<tr>
						  <td> <?php echo $row['jobid'];?> </td>
						  <td> <?php echo $row['destination'];?> </td>
						  <td> <?php echo $row['describe'];?> </td>
						  <td> <?php echo $row['distance'];?> </td>
						  
						  
					</tr>
				  </tbody>
				  
				  <?php
				}
			}
			else
			{
				echo "No Record Found";
			}
			
			?>
				  
				</table>
			</div>
		</div>
		
		
	</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

<script>
$(document).ready(function () {
	
    $('#datatableid').DataTable({
		"pagingType":"full_numbers",
		"lengthMenu":[
			[10,25,50,-1],
			[10,25,50,"All"]
		],
		responsive: true,
		language: {
			search:"_INPUT_",
			searchPlaceholder:"Search Your Trip",
	});
	
});
</script>


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

