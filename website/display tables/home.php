<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel ="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootsrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css">
</head>
<body>
<h1 align="center" style="color:red;">Welcome to Home Page</h1>
<br>
<div class="card-body">
<div class="table-responsible"> 


<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">SL no.</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Update</th>
	  <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
   <?php
   require('dbconnect.php');
   $sli=0;
   $query1=mysqli_query($con,"select * from student");
   while($row=mysqli_fatch_array($query1))
   {
		$sl++;
   ?>
   
   <tr>
   <td><?php echo $sl;?></td>
   <td> <?php echo $row['name'];?></td>
   <td> <?php echo $row['email'];?></td>
   <td> <?php echo $row['phone'];?></td>
   <td> <?php echo $row['state'];?></td>
   <td><i>class="fa fa-pencil-square-o"</i></td>
   <td><i>class="fa fa-trash"</i></td>
   
   
   
   </tr>
   <?php> 
   
   ?>
   
  </tbody>
</table>

</div>
</div> 

</body>
</html>
