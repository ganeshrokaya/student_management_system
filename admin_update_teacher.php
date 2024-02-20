<?php 

session_start();
error_reporting(0);
$host='localhost';
$user="root";
$password="";
$db="schoolproject";

$data=mysqli_connect($host,$user,$password,$db);


if($_GET['teacher_id']){
    $t_id=$_GET['teacher_id'];

    $sql="SELECT * FROM teacher WHERE id='$t_id'";

    $result=mysqli_query($data,$sql);

    $info=$result->fetch_assoc();

}








#updating the student details

if(isset($_POST['update_teacher'])){

$t_name=$_POST['name'];
$te_id=$_POST['tid'];
$t_desc=$_POST['description'];
$id=$_POST['id'];

 $query="UPDATE teacher SET teachername='$t_name',teacherid='$te_id',teacherdescription='$t_desc' WHERE id='$id' ";

 $result2=mysqli_query($data,$query);

 if($result2){
    header("location:admin_update_teacher.php");
 }

}


?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin DashBoard</title>
    <?php include 'admin_css.php'
    ?>
    <style>
        label{
            display: inline-block;
            width: 150px;
            text-align: right;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .form_deg{
            background-color: skyblue;
            width: 600px;
            padding-bottom: 70px;

            padding-top: 70px;
        }
    </style>
  </head>
  <body>
  <?php 
include "admin_sidebar.php"


?>
<center>
    <div class="content">
       <h1>Update Teacher</h1>

       <div class="form_deg">
        <form action="#" action="admin_update_teacher.php" method="POST">
            <input type="text" name="id" value="<?php echo "{$info['id']}"?>" hidden>
            <div>
                <label for="">Teacher Name</label>
                <input type="text" name="name" value="<?php echo "{$info['teachername']}"?>">
            </div>
            <div>
                <label for="">Teacher id</label>
                <input type="text" name="tid" value="<?php echo "{$info['teacherid']}"?>">
            </div>
            <div>
                <label for="">Description</label>
                <textarea name="description" cols="30" rows="10""><?php echo "{$info['teacherdescription']}"?></textarea>
            </div>
           
            <div>
                
                <input class="btn btn-success" type="submit" name="update_teacher" value="update">
            </div>
        </form>
       </div>
       </center>
    </div>

  </body>
</html>