<?php
include("class.php");
$obj=new employee;
$obj->details();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    
</head>
<body>
    
<div class="container">
	<p id="success"></p>
        <div class="table-wrapper">
            <div class="table-title ">
                <div class="row jumbotron">
                    <div class="col-sm-10">
						<h2><b>EMPLOYEE  DETAILS</b></h2>
					</div>
					<div class="col-sm-2">
                        <h2>	<a href="./index.php" class="btn btn-warning text-dark" ><b> Add Employee</b></a></h2>
						
					</div>
                </div>
            </div>
            <table class="table  table-dark table-hover ">
                <thead class="bg-warning text-dark">
                    <tr>
						
                        <th>SNO</th>
    <th>UNAME</th>
    <th>EMAIL</th>
    <th>AGE</th>
    <th>CITY</th>
    <th>IMAGE</th>
    <th>ACTIONS</th>
                    </tr>
                </thead>
				<tbody>
				



<?php
if(mysqli_num_rows($obj->det)>0){
    $sn=1;
    while($arr=mysqli_fetch_assoc($obj->det)){
?>
<tr>
<td><?php echo $sn?></td>
<td><?php echo $arr['uname']?></td>
<td><?php echo $arr['email']?></td>
<td><?php echo $arr['age']?></td>
<td><?php echo $arr['city']?></td>
<td><img src='<?php echo $arr['imagepath']?>' height="70px" width="100px"></td> 


    <td>						
        <a href="edit.php?que=<?php echo $arr['id']?>" class="edit "><i style="color:blue;" class="fas fa-pencil-alt "></i></a>&nbsp;&nbsp;
        <a href="delete.php?que=<?php echo $arr['id']?>" class="delete"><i style="color:red" class="fas fa-trash-alt "></i></a>&nbsp;&nbsp;
        <a href="change.php?que=<?php echo $arr['id']?>" class="image "><i style="color:green" class="fas fa-file-image"></i>
    </td>



</tr>
<?php
$sn++;
}
}?>
   </table>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>