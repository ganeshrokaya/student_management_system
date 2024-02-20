<?php
  $host='localhost';
  $user="root";
  $password="";
  $db="schoolproject";


  $data=mysqli_connect($host,$user,$password,$db);
  

  if(isset($_POST['add_student'])){

    $username=$_POST['name'];
    $user_email=$_POST['email'];
    $user_phone=$_POST['phone'];
    $user_password=$_POST['password'];
    $usertype="student";
    $userid=$_POST['userid'];
    $stu_course=$_POST['course'];
    $check="SELECT * FROM add_student WHERE  username='$username'";

    $check_user=mysqli_query($data,$check);

    $row_count=mysqli_num_rows($check_user);

    if($row_count==1){
        echo "<script type='text/javascript'>alert('username already exist. Try another one')</script>";
    }
    else{

    $sql="INSERT INTO add_student(username,userid,email,phone,usertype,password,course) VALUES('$username','$userid','$user_email','$user_phone','$usertype','$user_password','$stu_course')";
    
    $result=mysqli_query($data,$sql);

    $sql2="INSERT INTO user(username,email,phone,usertype,password) VALUES('$username','$user_email','$user_phone','$usertype','$user_password')";

    $result2=mysqli_query($data,$sql2);

   

    if($result){
        echo "<script type='text/javascript'>alert('Data upload success')</script>";
    }
else{
    echo "upload failed";
}
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
    <style>
        label{
            display: inline-block;
            text-align: right;
            width: 100px;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .div_deg{
            background-color: skyblue;
            width: 400px;
            padding-top: 70px;
            padding-bottom: 70px;

        }

    </style>


    <?php include 'admin_css.php'
    ?>
  </head>
  <body>
  <?php 
include "admin_sidebar.php"


?>
    <div class="content">
        <center>
       <h1>Add Student</h1>
       <div class="div_deg">
        <form action="#" method='POST'>

    <div>
        <label for="">Username</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="">Userid</label>
        <input type="text" name="userid">
    </div>
    
    <div>
        <label for="">Phone</label>
        <input type="number" name="phone">
    </div>

    <div>
        <label for="">Email</label>
        <input type="email" name="email">
    </div>

    <div>
        <label for="">Course</label>
        <input type="text" name="course">
    </div>

    
    <div>
        <label for="">password</label>
        <input type="text" name="password">
    </div>

    <div>
        
        <input type="Submit" class="btn btn-primary" name="add_student" value="Add Student">
    </div>
        </form>
       </div>
       </center>
    </div>
  </body>
</html>