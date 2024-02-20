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

$id="SELECT course FROM add_student WHERE username='$name' ";

$result=mysqli_query($data,$id);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $course = $row['course'];



// Replace 'bipc' or 'mpc' with the actual course value




}

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
         table {
            border-collapse: collapse;
            width: 80%;
            margin: 0 auto;
            border: 2px solid #333;
        }

        th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
  </head>
  <body>
    <?php 
    include("student_sidebar.php");
    
    ?>
    <div class="content">
   <center>
    <h1>Time Table</h1>
    </center>
<?php 
    if ($course == 'bipc') {
        
            // BIPC Timetable
            echo "<h2>BIPC Timetable</h2>";
            echo "<table border='5'>";
            echo "<tr><th>Period</th><th>Time Slot</th><th>Subject</th></tr>";
            echo "<tr><td>1st Period</td><td>9:00 AM - 9:45 AM</td><td>Biology</td></tr>";
            echo "<tr><td>2nd Period</td><td>10:50 AM - 11:30 AM</td><td>Chemistry</td></tr>";
            echo "<tr><td>2nd Period</td><td>11:30 AM - 11:50 AM</td><td>Interval</td></tr>";
            echo "<tr><td>3rd Period</td><td>11:50 AM - 12:30 PM</td><td>Sanksrit</td></tr>";
            echo "<tr><td>3rd Period</td><td>12:30 AM - 1:30 PM</td><td>Lunch Break</td></tr>";
            echo "<tr><td>4th Period</td><td>1:30 PM - 2:10 PM</td><td>English</td></tr>";
            echo "<tr><td>5th Period</td><td>2:15 PM - 3:00 PM</td><td>Physics</td></tr>";
            // Add more rows as needed
            // Add more rows as needed
            echo "</table>";
          } elseif ($course == 'mpc') {
            // MPC Timetable
            // echo "<h2>MPC Timetable</h2>";
            echo "<table border='1'>";
            echo "<tr><th>Period</th><th>Time Slot</th><th>Subject</th></tr>";
            
            echo "<tr><td>1st Period</td><td>9:00 AM - 9:45 AM</td><td>Mathematics</td></tr>";
            echo "<tr><td>2nd Period</td><td>10:50 AM - 11:30 AM</td><td>Physics</td></tr>";
            echo "<tr><td>2nd Period</td><td>11:30 AM - 11:50 AM</td><td>Interval</td></tr>";
            echo "<tr><td>3rd Period</td><td>11:50 AM - 12:30 PM</td><td>Sanksrit</td></tr>";
            echo "<tr><td>3rd Period</td><td>12:30 AM - 1:30 PM</td><td>Lunch Break</td></tr>";
            echo "<tr><td>4th Period</td><td>1:30 PM - 2:10 PM</td><td>English</td></tr>";
            echo "<tr><td>5th Period</td><td>2:15 PM - 3:00 PM</td><td>Chemistry</td></tr>";
            // Add more rows as needed
            echo "</table>";
          }
            elseif ($course == 'computers') {
                // Computers Timetable
                // echo "<h2>MPC Timetable</h2>";
                echo "<table border='1'>";
                echo "<tr><th>Period</th><th>Time Slot</th><th>Subject</th></tr>";
                
                echo "<tr><td>1st Period</td><td>9:00 AM - 9:45 AM</td><td>Mathematics</td></tr>";
                echo "<tr><td>2nd Period</td><td>10:50 AM - 11:30 AM</td><td>Physics</td></tr>";
                echo "<tr><td>2nd Period</td><td>11:30 AM - 11:50 AM</td><td>Interval</td></tr>";
                echo "<tr><td>3rd Period</td><td>11:50 AM - 12:30 PM</td><td>Computers</td></tr>";
                echo "<tr><td>3rd Period</td><td>12:30 AM - 1:30 PM</td><td>Lunch Break</td></tr>";
                echo "<tr><td>4th Period</td><td>1:30 PM - 2:10 PM</td><td>English</td></tr>";
                echo "<tr><td>5th Period</td><td>2:15 PM - 3:00 PM</td><td>Embeded Systems</td></tr>";
                // Add more rows as needed
                echo "</table>";
            }
            elseif ($course == 'editing') {
                // Editing Timetable
                // echo "<h2>MPC Timetable</h2>";
                echo "<table border='1'>";
                echo "<tr><th>Period</th><th>Time Slot</th><th>Subject</th></tr>";
                
                echo "<tr><td>1st Period</td><td>9:00 AM - 9:45 AM</td><td>Mathematics</td></tr>";
                echo "<tr><td>2nd Period</td><td>10:50 AM - 11:30 AM</td><td>Social</td></tr>";
                echo "<tr><td>2nd Period</td><td>11:30 AM - 11:50 AM</td><td>Interval</td></tr>";
                echo "<tr><td>3rd Period</td><td>11:50 AM - 12:30 PM</td><td>Paints</td></tr>";
                echo "<tr><td>3rd Period</td><td>12:30 AM - 1:30 PM</td><td>Lunch Break</td></tr>";
                echo "<tr><td>4th Period</td><td>1:30 PM - 2:10 PM</td><td>English</td></tr>";
                echo "<tr><td>5th Period</td><td>2:15 PM - 3:00 PM</td><td>Editing</td></tr>";
                // Add more rows as needed
                echo "</table>";
          } else {
            echo "Unknown course.";
          }
    
    ?>
        
    </div>
  </body>
</html>