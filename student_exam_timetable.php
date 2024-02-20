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
    <h1> Exam Time Table</h1>
    </center>
<?php 
    if ($course == 'bipc') {
        
            // BIPC Timetable
            echo "<h2>BIPC Timetable</h2>";
            echo "<table border='5'>";
            echo "<tr><th>Date</th><th>Subject</th><th>Subject code</th></tr>";
            echo "<tr><td>22/10/2023</td><td>Biology</td><td>U2BIM34</td></tr>";
            echo "<tr><td>24/10/2023</td><td>Physics</td><td>U2BIM45</td></tr>";
            echo "<tr><td>26/10/2023</td><td>Chemistry</td><td>U2BIM23</td></tr>";
            
            // Add more rows as needed
            // Add more rows as needed
            echo "</table>";
          } elseif ($course == 'mpc') {
            // MPC Timetable
            // echo "<h2>MPC Timetable</h2>";
            echo "<table border='1'>";
            echo "<tr><th>Date</th><th>Subject</th><th>Subject code</th></tr>";
            echo "<tr><td>22/10/2023</td><td>Mathematics</td><td>U2MPC34</td></tr>";
            echo "<tr><td>24/10/2023</td><td>Physics</td><td>U2MPC45</td></tr>";
            echo "<tr><td>26/10/2023</td><td>Chemistry</td><td>U2MPC23</td></tr>";
            // Add more rows as needed
            echo "</table>";
          }
            elseif ($course == 'computers') {
                // Computers Timetable
                // echo "<h2>MPC Timetable</h2>";
                echo "<table border='1'>";
                echo "<tr><th>Date</th><th>Subject</th><th>Subject code</th></tr>";
            echo "<tr><td>22/10/2023</td><td>Java</td><td>U2CSEM34</td></tr>";
            echo "<tr><td>24/10/2023</td><td>Networks</td><td>U2CSE45</td></tr>";
            echo "<tr><td>26/10/2023</td><td>Embeded Systems</td><td>U2CSE23</td></tr>";
                // Add more rows as needed
                echo "</table>";
            }
            elseif ($course == 'editing') {
                // Editing Timetable
                // echo "<h2>MPC Timetable</h2>";
                echo "<table border='1'>";
                echo "<tr><th>Date</th><th>Subject</th><th>Subject code</th></tr>";
            echo "<tr><td>22/10/2023</td><td>Paints</td><td>U2EDI34</td></tr>";
            echo "<tr><td>24/10/2023</td><td>Editing</td><td>U2EDI45</td></tr>";
            echo "<tr><td>26/10/2023</td><td>Social</td><td>U2EDI23</td></tr>";
                // Add more rows as needed
                echo "</table>";
          } else {
            echo "Unknown course.";
          }
    
    ?>
        
    </div>
  </body>
</html>