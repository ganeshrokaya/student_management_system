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

$id="SELECT userid FROM add_student WHERE username='$name' ";

$result=mysqli_query($data,$id);


if ($result) {
    $row = $result->fetch_assoc();


    $userId = $row['userid'];

    // Query to count the days a student was present
    $attendanceQuery = "SELECT COUNT(*) as present_days FROM attendance WHERE student_id = $userId AND status = 'present'";
    $attendanceResult = $data->query($attendanceQuery);

    if ($attendanceResult) {
        $attendanceRow = $attendanceResult->fetch_assoc();
        $presentDays = $attendanceRow['present_days'];
        $attandance_percentage=($presentDays/150)*100;
        $present_percentage=round($attandance_percentage,2);
        $absent_percentage=100-$present_percentage;

        // echo "Student with username '$name' and user ID $userId was present for $presentDays days.";
    }}


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
    <style>

        .content{
            background-color: skyblue;
            border: 2px solid white;
            padding-left: 5px;
            width: 70%;
        }
    </style>

</head>
  <body>
    <?php 
    include("student_sidebar.php");
    
    ?>
    <div class="content">
        <h3>Name :<?php echo "$name"; ?></h3>
        <h3>USer Id :<?php echo "$userId"; ?></h3>
        <h3>Present :<?php echo "$presentDays"; ?> Days</h3>
        <center><h2>Present Percentage :<?php echo "$present_percentage"; ?></h2></center>
        <center><h2>Absent Percentage :<?php echo "$absent_percentage"; ?></h2></center>
    </div>
  </body>
</html>