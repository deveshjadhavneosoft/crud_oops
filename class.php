<?php
class employee{
    private $conn;
    public $msg,$det,$uparr;
    public $pub_name;
    function __construct()
    {
       $this->conn=mysqli_connect("localhost","root","","todo");

    }
    //Adding
    function add($uname,$email,$age,$city,$tmp,$fname){
        $dest="uploads/";
        $ext=pathinfo($fname,PATHINFO_EXTENSION);
        $fn=$email.".".$ext;
        $imgpath=$dest.$fn;
        if(move_uploaded_file($tmp,$dest.$fn)){
           
        }
    if(mysqli_query($this->conn,"insert into employee (uname,email,age,city,imagepath)
    values ('$uname','$email',$age,'$city','$imgpath')")){
        header("location:show.php");
        return "updated";
    }
    else{
        return "Already registered";
    }
    }
    function details(){
        $this->det=mysqli_query($this->conn,"select * from employee");
    }
    
    //update
    function update($name,$mail,$age,$city){
        $id=$_GET['que'];
        $sql=mysqli_query($this->conn,"select * from employee where id=$id");
        if(mysqli_num_rows($sql)>0){
            $this->uparr=mysqli_fetch_assoc($sql);
    if(mysqli_query($this->conn,"update employee set uname='$name' ,email='$mail',age=$age,city='$city' where id=$id")){
        header("location:show.php");
        return "updated";
    }
    else{
        return "Please update";
    } 
}
      else{
          return "error";
      } 
    }
    //delete logic
   function delete(){
    $id=$_GET['que'];
    if(mysqli_query($this->conn,"delete from employee where id=$id")){
        header("location:show.php");
    }
   }
   //Changed image
   function changed($tmp,$fname){
    $id=$_GET['que'];
    $sql=mysqli_query($this->conn,"select * from employee where id=$id");
    if(mysqli_num_rows($sql)>0){
        $sq=mysqli_fetch_assoc($sql);
        $mail=$sq["email"];
    $dest="uploads/";
    $ext=pathinfo($fname,PATHINFO_EXTENSION);
    $fn=$mail.".".$ext;
    $imgpath=$dest.$fn;
    if(move_uploaded_file($tmp,$dest.$fn)){
    }
    else{
        return "pls upload image";
    }
if(mysqli_query($this->conn,"update employee set imagepath='$imgpath' where id=$id")){
    header("location:show.php");
}
else{
    return "Please update";
} 
   }
}
    function __destruct()
    {
        mysqli_close($this->conn);
    }
}
?>