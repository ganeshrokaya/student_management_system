<?php 
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'schoolproject';

$data = mysqli_connect($host, $user, $password, $db);

if (isset($_POST['mark_attendance'])) {
    $current_date = date("Y-m-d");
    $student_id = $_POST["studid"];
    $present="present";

    $check_query = "SELECT * FROM attendance WHERE student_id = $student_id AND attendance_date = '$current_date'";
    $check_result = mysqli_query($data, $check_query);

    if ($check_result->num_rows > 0) {
        echo "Attendance already marked for this student on $current_date.";
    } else {
        // Mark attendance
        $sql = "INSERT INTO attendance (student_id, attendance_date,status) VALUES ($student_id, '$current_date','$present')";
        $result = mysqli_query($data, $sql);

        if ($result) {
            header('location: mark_attendance.php');
        } else {
            echo "Error marking attendance: " . mysqli_error($data);
        }
    }
}

// Close the database connection
mysqli_close($data);
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
       <h1>Mark Attendance</h1><br><br>
       <div class="div_deg"><form action="#" method="POST"><div>
<label for="">Student id</label>
<input type="text" name="studid">
 
    </div>   

       <br>
       
       <div><form action=""><div>
<input type="submit" name="mark_attendance" value="Mark Attendance" class="btn btn-primary">

       </div>
    </form>
    </div>
       </center>

    </div>
  </body>
</html>