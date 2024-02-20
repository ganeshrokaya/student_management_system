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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMS</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </head>
  <body>
    <nav>
        <label class="logo">W-School</label>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="">Admission</a></li>
            <li><a href="login.php" class="btn btn-success">Login</a></li>
        </ul>
    
    </nav>
    <div class="section1">
        <label class="img_text" for="">We teach students With care</label>
        <img class="main_img" src="images/first.jpeg" alt="classroom image">
    </div>
    <div class="container">
        <div class="row">
        <div class="col-md-4">
            <img class="welcome_img" src="images/second.jpg" alt="university image">
        </div>
        <div class="col-md-8">
            <H1>Welcome to W-school</H1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, accusamus hic possimus ducimus dolorum suscipit necessitatibus accusantium mollitia labore, voluptates libero? Ducimus illum earum vel. Corporis culpa sit repellat laudantium!</p>
        </div>
        </div>

        <center>
            <h1 class="adm">Admission Form</h1>
        </center>

        <div align="center" class="admission_form">
            <form action="data_check.php" method=POST>
                <div class="adm_int">
                    <label class="label_text">Name</label>
                    <input class="input_deg" type="text" name="name">
                </div>
                <div class="adm_int">
                    <label class="label_text">Email</label>
                    <input class="input_deg" type="text" name="email">
                </div>
                <div class="adm_int">
                    <label class="label_text">Phone</label>
                    <input class="input_deg" type="text" name="phone">
                </div>
                <div class="adm_int">
                    <label class="label_text">message</label>
                    <textarea class="input_txt" name="message"></textarea>
                </div>
                <div class="adm_int">
                    
                    <input class="btn btn-primary" id="submit" type="submit" value="apply" name="apply">
                </div>
            </form>
        </div>
        
    </div>
    <!-- <footer>
        <h3 class="footer_txt">ALL @copyright reserved by Varun kumar CR</h3>
    </footer> -->
  </body>
</html>