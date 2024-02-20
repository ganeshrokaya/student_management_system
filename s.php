<?php
  $host='localhost';
  $user="root";
  $password="";
  $db="schoolproject";


  $data=mysqli_connect($host,$user,$password,$db);
  

  if(isset($_POST['add_student'])){

    $stuname=$_POST['studname'];
    $stuemail=$_POST['studemail'];
    $studepartment=$_POST['studdepartment'];
    $gender=$_POST['studgender'];
    $dob=$_POST['studdob'];
    $stuid=$_POST['studid'];
    $fname=$_POST['studfname'];
    $mname=$_POST['studmname'];
    $connum=$_POST['studconnum'];
    $username=$_POST['uname'];
    $address=$_POST['address'];
    
    $password=$_POST['password'];

    // $check="SELECT * FROM user WHERE  username='$username'";

    // $check_user=mysqli_query($data,$check);

    // $row_count=mysqli_num_rows($check_user);

    // if($row_count==1){
    //     echo "<script type='text/javascript'>alert('username already exist. Try another one')</script>";
    // }
    // else{

    $sql="INSERT INTO add_student(stuname,stuemail,studept,gender,dob,stuid,fname,mname,connum,address,username,password) VALUES('$stuname','$stuemail','$studepartment','$gender','$dob','$stuid','$fname','$mname','$connum','$address','$username','$password')";
    
    $result=mysqli_query($data,$sql);

    if($result){
        echo "<script type='text/javascript'>alert('Data upload success')</script>";
    }
else{
    echo "upload failed";
}
    }
//   }






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
        <label for="">Student Name</label>
        <input type="text" name="studname">
    </div>
    
    <div>
        <label for="">Student Email</label>
        <input type="email" name="studemail">
    </div>

    <div>
        <label for="">Student Department</label>
        <input type="text" name="studdepartment">
    </div>
    <div>
    <label for="exampleInputName1">Gender</label>
                        <select name="studgender">
                          <option value="">Choose Gender</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
    </div>

    
    <div>
        <label for="">Date Of Birth</label>
        <input type="text" name="studdob" value="dd/mm/year">
    </div>
    <div>
        <label for="">Student ID</label>
        <input type="text" name="studid" >
    </div>
    <div>
        <label for="">Fathers Name</label>
        <input type="text" name="studfname">
    </div>
    <div>
        <label for="">Mothers Name</label>
        <input type="text" name="studmname">
    </div>
    <div>
        <label for="">Contact Number</label>
        <input type="text" name="studconnum">
    </div>
    <div>
        <label for="">Address</label>
        <textarea name="address" cols="30" rows="10"></textarea>
    </div>
    <div>
        <label>Username</label>
        <input type="text" name="uname">
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