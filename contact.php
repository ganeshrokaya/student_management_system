<?php

error_reporting(0);

session_start();

session_destroy();

if($_SESSION['message'])
{

    $message=$_SESSION['message'];
    echo "<script type='text/javascript'> 
    
    alert('$message');

    </script>";
}  



?>


<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMS</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<style>

.cn{
    color:red;
    
}  
th,
td {
  width: 150px;
  text-align: center;

  padding: 5px;
}
</style>
</head>
  <body>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <div>
    <nav>
        <label class="logo">W-School</label>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="">Admission</a></li>
            <li><a href="login.php" class="btn btn-success">Login</a></li>
        </ul>
    
    </nav>
    </div>
    <br><br><br>    
    <div class="cn">
    <center>
    <H1>Feel Free to Contact to us</H1>
    </center> 
    <br><br><br> 
    <center>
    <table style="width:50%">
  <tr >
    <td style="border-bottom:1px solid black"><h4>Address</h4></td>
    <td style="border-bottom:1px solid black"><h4>Phone</h4></td>
    <td style="border-bottom:1px solid black"><h4>Email</h4></td>
  </tr>
  <tr>
    <td>Apt. 731 87681 Shannon Motorway, North Noel, FL 46919
</td>
    <td>+1 45783922</td>
    <td>W-schoolSupport@gmail.com</td>
  </tr>
</table>
</center> 
    </div>
        
  </body>
</html>