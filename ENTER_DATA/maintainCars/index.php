<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> Service Company Vehicles </title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
</head>
<body>



<!-- Modal -->
<div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Maintenance Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  
		   <form action="insertcode.php" method="POST">
		  <div class="form-group">
			<label>Service ID</label>
			<input type="text" class="form-control" name="serviceid" placeholder="Enter Service ID">
		  </div>
		  
		  <div class="form-group">
			<label>Vehicle ID</label>
			<input type="text" class="form-control" name="vehicleid" placeholder="Enter Vehicle ID">
		  </div>
		  
		  <div class="form-group">
			<label>Maker(Brand)</label>
			<input type="text" class="form-control" name="maker" placeholder="Enter brand maker of vehicle">
		  </div>
		  
		  <div class="form-group">
			<label>kilometers</label>
			<input type="text" class="form-control" name="kilometers" placeholder="Enter current kilometers of vehicle">
		  </div>
		  
		  <div class="form-group">
			<label>Description</label>
			<input type="text" class="form-control" name="issue" placeholder="Enter Description of vehicle service">
		  </div>
		  
		  <div class="form-group">
			<label>Date</label>
			<input type="text" class="form-control" name="datefix" placeholder="Enter the date of service">
		  </div>
		  
		  <div class="form-group">
			<label>Cost</label>
			<input type="number" class="form-control" name="costfix" placeholder="Enter the Cost">
		  </div>
		  
		  <div class="form-group">
			<label>Completed?</label>
			<input type="text" class="form-control" name="yesorno" placeholder="Enter if it is Completed">
		  </div>
		  
		  
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<button type="submit" name="insertdata" class="btn btn-primary">Save Data</button>
		  </div>
		  </form>
    </div>
  </div>
</div>

<!-- ########################################################################################### -->
<!-- EDIT POP UP FORM -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Vehicle Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  
	  
      <form action="updatecode.php" method="POST">
	  
		<div class="modal-body">
		
		<input type ="hidden" name="update_id" id="update_id">
		
		  <div class="form-group">
			<label>Service ID</label>
			<input type="text" class="form-control" name="serviceid" placeholder="Enter Service ID">
		  </div>
		  
		  <div class="form-group">
			<label>Vehicle ID</label>
			<input type="text" class="form-control" name="vehicleid" placeholder="Enter Vehicle ID">
		  </div>
		  
		  <div class="form-group">
			<label>Vehicle Brand</label>
			<input type="text" class="form-control" name="maker" placeholder="Enter brand maker of vehicle">
		  </div>
		  
		  <div class="form-group">
			<label>kilometers</label>
			<input type="text" class="form-control" name="kilometers" placeholder="Enter current kilometers of vehicle">
		  </div>
		  
		  <div class="form-group">
			<label>Description</label>
			<input type="text" class="form-control" name="issue" placeholder="Enter Description of vehicle service">
		  </div>
		  
		  <div class="form-group">
			<label>Date</label>
			<input type="text" class="form-control" name="datefix" placeholder="Enter the date of service">
		  </div>
		  
		  <div class="form-group">
			<label>Cost</label>
			<input type="number" class="form-control" name="costfix" placeholder="Enter the Cost">
		  </div>
		  
		  <div class="form-group">
			<label>Completed?</label>
			<input type="text" class="form-control" name="yesorno" placeholder="Enter if it is Completed">
		  </div>
		  
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
		  </div>
		  </form>
    </div>
  </div>
</div>

<!-- ########################################################################################### -->

<!-- ########################################################################################### -->
<!-- DELETE POP UP FORM (Bootstrap MODAL)-->
<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampledeletemodal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampledeletemodal">Delete Vehicle Service Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  
	  
      <form action="deletecode.php" method="POST">
	  
		<div class="modal-body">
		
		<input type ="hidden" name="delete_id" id="delete_id">
		
		  <h4> Do you want to Delete this Service Data?</h4>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
			<button type="submit" name="deletedata" class="btn btn-primary">Delete Data</button>
		  </div>
		  </form>
    </div>
  </div>
</div>

<!-- ########################################################################################### -->


<form action ="http://localhost/HomeWebsite/AdminHome.html" method ="post">
		<button  class="btn btn-dark" data-toggle="modal" >
				Home
				</button>
				</form>

<div class="container">
	<div class="jumbotron">
		<div class="card">
		<h2 style="font-size:4vw"> Vehicles Service</h2>
		<h3 style="font-size:1vw"> Add the vehicle maintenance service  </h3>
		</div>
		<div class="card">
			<div class ="card-body">
				<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#studentaddmodal">
				Add Data
				</button>
			</div>
		</div>
		
		<div class="card">
			<div class="card-body">
			
			<?php
			$connection = mysqli_connect("localhost","root","");
			$db = mysqli_select_db($connection,'skyylane');
			
			$query = "SELECT * FROM fixcars";
			$query_run = mysqli_query($connection,$query);
			?>
			
			<table class="table">
				  <thead>
					<tr>
					  
					  <th scope="col">Service ID</th>
					  <th scope="col">Vehicle ID</th>
					  <th scope="col">Brand</th>
					  <th scope="col">Distance</th>
					  <th scope="col">Description</th>
					  <th scope="col">Appointment</th>
					  <th scope="col">Cost(Rand)</th>
					  <th scope="col">Completed?</th>
					  <th scope="col">EDIT</th>
					  <th scope="col">DELETE</th>
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
						  <td> <?php echo $row['serviceid'];?> </td>
						  <td> <?php echo $row['vehicleid'];?> </td>
						  <td> <?php echo $row['maker'];?> </td>
						  <td> <?php echo $row['kilometers'];?> </td>
						  <td> <?php echo $row['issue'];?> </td>
						  <td> <?php echo $row['datefix'];?> </td>
						  <td> <?php echo $row['costfix'];?> </td>
						  <td> <?php echo $row['yesorno'];?> </td>
						  <td> 
								<button type="button" class="btn btn-dark editbtn"> EDIT </button>
						  </td>
						  <form action="deletecode.php" method ="post">
							<input type ="hidden" name ="id" value ="<?php echo $row['serviceid'] ?>">
							<td> <input type ="submit" name ="delete" class="btn btn-danger" value="DELETE"> </td>
						  </form>
						  
						  
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

<script>

$(document).ready(function (){
	$('.deletebtn').on('click',function(){
		$('#deletemodal').modal('show');
		
			$tr = $(this).closest('tr');
			
			var data = $tr.children("td").map(function(){
				return $(this).text();
			}).get();
			
			console.log(data);
			
			$('#delete_id').val(data[0]);
			
	});	
});

</script>


<script>

$(document).ready(function (){
	$('.editbtn').on('click',function(){
		$('#editmodal').modal('show');
		
			$tr = $(this).closest('tr');
			
			var data = $tr.children("td").map(function(){
				return $(this).text();
			}).get();
			
			console.log(data);
			
			$('#update_id').val(data[0]);
			$('#serviceid').val(data[1]);
			$('#vehicleid').val(data[2]);
			$('#maker').val(data[3]);
			$('#kilometers').val(data[4]);
			$('#issue').val(data[5]);
			$('#datefix').val(data[6]);
			$('#costfix').val(data[7]);
			$('#yesorno').val(data[8]);  
			
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

