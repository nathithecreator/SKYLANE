<!DOCTYPE html>
<html lang="en">
<head>
<meta charset= "UTF-8">
<meta http-equiv= "X-UA-Compatible" content "IE=edge">
<meta name= "viewport" content="width=device - width,
initial-scale=1.0">
<title>PHP Bootstrap Modal CRUD</title>
<!--Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>

<!-- Modal --> <div class="modal fade" id="completeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> <div class="modal-dialog" role="document"> <div class="modal-content"> <div class="modal-header"> <h5 class="modal-title" id="exampleModalLabel">New User</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> </div> <div class="modal-body"> 

<div class="form-group"> <label for="completename">Name</label> <input type="text" class="form-control" id="completename" 
placeholder="Enter your name"> 
</div>

<div class="form-group"> <label for="completemail">Email</label> <input type="email" class="form-control" id="completemail" 
placeholder="Enter your email"> 
</div>

<div class="form-group"> <label for="completemobile">Mobile</label> <input type="text" class="form-control" id="completemobile" 
placeholder="Enter your mobile number"> 
</div>

<div class="form-group"> <label for="completeplace">Place</label> <input type="email" class="form-control" id="completeplace" 
placeholder="Enter your place"> 
</div>

</div> 
<div class="modal-footer"> <button type="button" class="btn btn-dark" oneclick="adduser()">Submit</button> 
<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> 





</div> 
</div> 
</div> 
</div>

<!-- update modal -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> <div class="modal-dialog" role="document"> <div class="modal-content"> <div class="modal-header"> <h5 class="modal-title" id="exampleModalLabel">Update details</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> </div> <div class="modal-body"> 

<div class="form-group"> <label for="updatename">Name</label> <input type="text" class="form-control" id="updatename" 
placeholder="Enter your name"> 
</div>

<div class="form-group"> <label for="updateemail">Email</label> <input type="email" class="form-control" id="updateemail" 
placeholder="Enter your email"> 
</div>

<div class="form-group"> <label for="updatemobile">Mobile</label> <input type="text" class="form-control" id="updatemobile" 
placeholder="Enter your mobile number"> 
</div>

<div class="form-group"> <label for="updateplace">Place</label> <input type="email" class="form-control" id="updateplace" 
placeholder="Enter your place"> 
</div>

</div> 
<div class="modal-footer"> <button type="button" class="btn btn-dark" oneclick="updateDetails()">Update</button> 
<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> 
<input type="hidden" id="hiddendata">



</div> 
</div> 
</div> 
</div>


<div class="container my-3">
<h1 class="text-center">PHP CRUD operations using Bootstrap Modal</h1>
<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#completeModal"> Add new users </button>
<div id="displayDataTable"></div>
</div>

<!-- bootstrap JavaScript -->
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> →
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script> <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

<script>

$(document).ready(function(){
displayData();
});

//display function 

function displayData(){
var displayData ="true";
$.ajax({
url:"display.php",
type:'post',
data:{
displaySend:displayData 
},

success:function(data,status){
$('#displayDataTable').html(data);
}

});
}



function  adduser(){
var nameAdd=$('#completename').val();
var emailAdd=$('#completeemail').val();
var mobileAdd=$('#completemobile').val();
var placeAdd=$('#completeplace').val();

$.ajax({
url:"insert.php",
type:'post',
data:{
nameSend:nameAdd,
emailSend:emailAdd,
mobileSend:mobileAdd
placeSend:placeAdd
}

success:function(data,status){
//function to display data;
//console.log(status);
displayData();
}

});

}

//Delete record 
function DeleteUser(deleteid){
$.ajax({
url:"delete.php",
type:'post',
data:{
deletesend:deleteid
},
success:function(data,status){
displayData();
}

});

}

// Update function 
function GetDetails(updateid){
$('#hiddendata').val(updateid);

$.post("update.php",{updateid:updateid},function(data,status){
var userid=JSON.parse(data);
});
$('updatename').val(userid.name);
$('updateemail').val(userid.email);
$('updatemobile').val(userid.mobile);
$('updateplace').val(userid.place);

});

$('#updateModal').modal("show");
}

//one click update event function 

function updateDetails(){
var updatename=$('updatename').val();
var updateemail=$('updateemail').val();
var updatemobile=$('updatemobile').val();
var updateplace=$('updateplace').val();
var hiddendata=$('hiddendata').val();

$.post("update.php",{
updatename: updatename,
updateemail:updateemail,
updatemobile:updatemobile
updateplace:updateplace,
hiddendata:hiddendata}, function (data,status){
$('updateModal').modal('hide');
displayData();
});
}

}

}

</script>

</body>

</html>


