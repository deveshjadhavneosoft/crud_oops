<?php
error_reporting(0);
include("class.php");
$obj=new employee;
$obj->changed($tmp,$fname);
    $err=$obj->changed($tmp,$fname);
if(isset($_POST["sub"])){
    $tmp=$_FILES["att"]["tmp_name"];
    $fname=$_FILES["att"]["name"];
 $obj->changed($tmp,$fname);
    $err=$obj->changed($tmp,$fname);
}


?>
<!DOCTYPE html>
<html>
    <head>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



    </head>
    <body>
  
        <div class="container">
      <h3 class="jumbotron bg-warning">Change Image</h3>
             <h4 style="color:red;"><?php echo $err?></h4>
      <!-- <h1><?php echo $err;?></h1> -->
      <form method="post" enctype="multipart/form-data">

<div class="form-group">
     <label for="file">
         Image</label>
        
<input class="form-control" type="file" name="att">
        
          </div>
<br>

 <button class="btn btn-primary" type="submit" name="sub">Change Image</button>
 
    </form>
   
    </div>
              <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
    </html>