<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> Cargo Drivers </title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
</head>
<body>



<!-- Modal -->
<div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Cargo Drivers Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  
		   <form action="insertcode.php" method="POST">
		  <div class="form-group">
			<label>Driver ID</label>
			<input type="text" class="form-control" name="driverid" placeholder="Enter Driver ID">
		  </div>
		  
		  <div class="form-group">
			<label>Name</label>
			<input type="text" class="form-control" name="fname" placeholder="Enter Name of Driver">
		  </div>
		  
		  <div class="form-group">
			<label>Surname</label>
			<input type="text" class="form-control" name="lname" placeholder="Enter the Surname">
		  </div>
		  
		  <div class="form-group">
			<label>Age</label>
			<input type="text" class="form-control" name="age" placeholder="Enter age of the driver">
		  </div>
		  
		  <div class="form-group">
			<label>License Code</label>
			<input type="text" class="form-control" name="licensecode" placeholder="Enter License Code">
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
			<label>Driver ID</label>
			<input type="text" class="form-control" name="driverid" placeholder="Enter Driver ID">
		  </div>
		  
		  <div class="form-group">
			<label>Name</label>
			<input type="text" class="form-control" name="fname" placeholder="Enter Name of Driver">
		  </div>
		  
		  <div class="form-group">
			<label>Surname</label>
			<input type="text" class="form-control" name="lname" placeholder="Enter the Surname">
		  </div>
		  
		  <div class="form-group">
			<label>Age</label>
			<input type="text" class="form-control" name="age" placeholder="Enter age of the driver">
		  </div>
		  
		  <div class="form-group">
			<label>License Code</label>
			<input type="text" class="form-control" name="licensecode" placeholder="Enter License Code">
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
<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Vehicle Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  
	  
      <form action="deletecode.php" method="POST">
	  
		<div class="modal-body">
		
		<input type ="hidden" name="delete_driverid" id="delete_driverid">
		
		  <h4> Do you want to Delete this Data?</h4>
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




<div class="container">
	<div class="jumbotron">
		<div class="card">
		<h2> Company Drivers</h2>
		</div>
		<div class="card">
			<div class ="card-body">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal">
				Add Data
				</button>
			</div>
		</div>
		
		<div class="card">
			<div class="card-body">
			
			<?php
			$connection = mysqli_connect("localhost","root","");
			$db = mysqli_select_db($connection,'skyylane');
			
			$query = "SELECT * FROM drivers";
			$query_run = mysqli_query($connection,$query);
			?>
			
			<table class="table">
				  <thead>
					<tr>
					  
					  <th scope="col">Driver ID</th>
					  <th scope="col">Name</th>
					  <th scope="col">Surname</th>
					  <th scope="col">Age</th>
					  <th scope="col">License Code</th>
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
						  <td> <?php echo $row['driverid'];?> </td>
						  <td> <?php echo $row['fname'];?> </td>
						  <td> <?php echo $row['lname'];?> </td>
						  <td> <?php echo $row['age'];?> </td>
						  <td> <?php echo $row['licensecode'];?> </td>
						  
						  
						  <td> 
								<button type="button" class="btn btn-success editbtn"> EDIT </button>
						  </td>
						  <form action="delete.php" method ="post">
							<input type ="hidden" name ="id" value ="<?php echo $row['driverid'] ?>">
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
			
			$('#delete_driverid').val(data[0]);
			
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
			$('#fname').val(data[1]);
			$('#lname').val(data[2]);
			$('#age').val(data[3]);
			$('#licensecode').val(data[4]);
			
			  
			
	});	
});

</script>
</body>
</html>

						