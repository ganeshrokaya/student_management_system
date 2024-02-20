<?php

session_start();

if(!isset($_SESSION["username"])){
  header("loctaion:login.php");
}

elseif ($_SESSION['usertype']=='admin') {
  header('location:login.php');
  
}

$host='localhost';
$user="root";
$password="";
$db="schoolproject";

$data=mysqli_connect($host,$user,$password,$db);

$name=$_SESSION['username'];

$sql="SELECT * FROM add_student WHERE username='$name' ";

$result=mysqli_query($data,$sql);

$info=mysqli_fetch_assoc($result);

?>








<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student DashBoard</title>
    <link rel="stylesheet" href="admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <?php 
    include("student_css.php");
    
    ?>
    <style type="text/css">
      .content{
        padding-right: 50%;
      }
      h2{
        background-color: whitesmoke;
        width: 100%;
          text-align: left;
      }
        .content2{
          background-color: whitesmoke;
         
          width: 100%;
          text-align: left;
          
        }
        h4{
          
          padding-top: 2%;
        }
    </style>
  </head>
  <body>
    <?php 
    include("student_sidebar.php");
    
    ?>
<center>
    <div class="content">
        
    <h2>Profile:</h2>   
    <hr>     
<div class=content2>
  <h4>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<?php echo" {$info['username']}";?></h4>
  <h4>User Id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<?php echo" {$info['userid']}";?></h4>
  <h4>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<?php echo" {$info['email']}";?></h4>
  <h4>Phone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<?php echo" {$info['phone']}";?></h4>
  <h4>Usertype&nbsp;&nbsp;&nbsp;&nbsp;:<?php echo" {$info['usertype']}";?></h4>
  <h4>Course&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<?php echo" {$info['course']}";?></h4>

</div>
        </center>
        
    </div>
  </body>
</html>