<?php 
$host='localhost';
$user="root";
$password="";
$db="schoolproject";


$data=mysqli_connect($host,$user,$password,$db);

if(isset($_POST['add_teacher'])){

    $t_name=$_POST["teachername"];
    $t_id=$_POST["teacherrid"];
    $t_description=$_POST["description"];
    
$sql="INSERT INTO teacher(teachername,teacherid,teacherdescription) VALUES('$t_name','$t_id','$t_description')";

$result=mysqli_query($data,$sql);
  
    if($result){
      header('location:admin_add_teacher.php');

    }
}
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Teacher</title>
    <?php include 'admin_css.php'
    ?>
    <style>
        .div_deg{
            padding-top: 70px;
            page-break-inside: 70px;
            background-color: skyblue;
            width: 500px;

        }
    </style>
  </head>
  <body>
  <?php 
include "admin_sidebar.php"


?>
    <div class="content">
        <center>
       <h1>Add Teacher</h1><br><br>
       <div class="div_deg"><form action="#" method="POST"><div>
<label for="">Teacher Name</label>
<input type="text" name="teachername">
 
       </div>
       <br>      <div><form action=""><div>
<label for="">Teacher Id</label>
<input type="text" name="teacherrid">

       </div>

       <br>
       <div><form action=""><div>
<label for="">Teacher Description</label>
<textarea name="description" id="" cols="30" rows="10"></textarea>

       </div>
       <br>
       
       <div><form action=""><div>
<input type="submit" name="add_teacher" value="Add Teacher" class="btn btn-primary">

       </div>
    </form>
    </div>
       </center>

    </div>
  </body>
</html>