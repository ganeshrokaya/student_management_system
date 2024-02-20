<?php

session_start();

error_reporting(0);

$host='localhost';
    $user="root";
    $password="";
    $db="schoolproject";


    $data=mysqli_connect($host,$user,$password,$db);

    $sql="SELECT * FROM teacher";

    $result = mysqli_query($data,$sql);

    if($_GET['teacher_id']){
        $t_id=$_GET['teacher_id'];

        $sql2="DELETE FROM teacher WHERE id='$t_id'";

        $result2 = mysqli_query($data,$sql2);

        if($result2){
            header('location:admin_view_teacher.php');
        }
    }

    ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Teacher</title>
    <?php include 'admin_css.php'
    ?>
    <style type="text/css">
        .table_th{
            padding: 20px;
            font-size: 20px;
        }
        .table_td{
            padding: 20px;
            background-color: skyblue;
        }
    </style>
  </head>
  <body>
  <?php 
include "admin_sidebar.php"


?>
    <div class="content">
        <center>
       <h1>View Teacher</h1>
       <table border="1px"><tr>
        <th class="table_th">Teacher Name</th>
        <th class="table_th">Teacher ID</th>
        <th class="table_th">Teacher Description</th>
        
        <th class="table_th">Update</th>
        <th class="table_th">Delete</th>
        <?php 
        
        while($info=$result->fetch_assoc()){

       
        
        ?>
        <tr>
            <td class="table_td">
                <?php echo "{$info['teachername']}" ?>
            </td>
            <td class="table_td"><?php echo "{$info['teacherid']}" ?></td>
            <td class="table_td"><?php echo "{$info['teacherdescription']}" ?></td>
            
            <td class="table_td">

            <?php 
            echo "
            <a  class='btn btn-primary' href='admin_update_teacher.php?teacher_id={$info['id']}'>Update</a>";
            ?>
            </td>
        

            <td class="table_td">
                <?php 
                echo "
                <a onClick=\"javascript:return confirm('Are You Sure To Delete This');\" class='btn btn-danger' href='admin_view_teacher.php?teacher_id={$info['id']}'>Delete</a>";
                ?>
            </td>
       </tr>
        <?php
    }
    ?>
       </tr></table>
       </center>
    </div>
  </body>
</html>