<?php
error_reporting(0);
$err="";
include("class.php");
$obj=new employee;
$obj->update($name,$mail,$age,$city);
$name=$obj->uparr['uname'];
$mail=$obj->uparr['email'];
$age=$obj->uparr['age'];
$city=$obj->uparr['city'];

if(isset($_POST["sub"])){
    $name=$_POST["uname"];
    $mail=$_POST["mail"];
    $age=$_POST["age"];
    $city=$_POST["city"];

$usernameErr = $emailErr = $ageErr= $cityErr= "";
if (empty($name)) {
    $usernameErr = "*username is required.";
  } 
  if (empty($mail)) {
    $emailErr = "*email is required.";
  } 
  
  if (empty($age)) {
    $ageErr = "*age is required.";
  } 
  if (empty($city)) {
    $cityErr= "*city is required.";
  } 

  if(!empty($name) && !empty($mail)&& !empty($age)&& !empty($city))
  $err=$obj->update($name,$mail,$age,$city);
}




?>
<!DOCTYPE html>
<html>
    <head>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   

   <style>
    h4{
           color: red;
       }
   </style>
    </head>
    <body>
       
        <div class="container">
      <h3 class="jumbotron bg-warning">Edit Details</h3>
      <h4><?php echo $err;?></h4>
    
      <form method="post">


       <div class="form-group">
   <label for="username">
       Username </label> <input class="form-control" type="text" name="uname" placeholder="Enter username" value="<?php echo $name?>" />
          <small><?php  echo "<p style='color:red;'>" . $usernameErr;  "</p>" ?></small>
        
                 </div>
          
           <div class="form-group">
  <label for="email">
          email    </label>
          <input class="form-control"  type="email" name="mail" placeholder="Enter email" value="<?php echo $mail?>"  />
          <small><?php echo "<p style='color:red;'>" . $emailErr;  "</p>" ?></small>
     
          </div>
          
           <div class="form-group">
 <label for="Age">
          Age</label>
          <input class="form-control"  type="number" name="age" placeholder="Enter age" value="<?php echo $age?>"  />
          <small><?php echo  "<p style='color:red;'>" . $ageErr;  "</p>" ?></small>
        
          </div>

           <div class="form-group">
 <label for="City">
          City</label>
          <input class="form-control"  type="text" name="city" placeholder="Enter city" value="<?php echo $city?>"  />
          <small><?php echo  "<p style='color:red;'>" . $cityErr; "</p>" ?></small> 
     
          </div>
          
      
          
          
          
     <button class="btn btn-primary" type="submit" name="sub">Update</button>
    </form>
   
    </div>
          <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
    </body>
    </html>