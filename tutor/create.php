<?php
session_start();
$email=$_SESSION['email'];
  $host = "localhost";  
  $user = "root";  
  $password = '';  
  $db_name = "TutorSpot";  
// Get the meeting time from the form submission
$meeting_time = $_POST['timeField'];
$date=$_POST['dateField'];
$tname=$_POST['tutorNameField'];
$code=$_POST['courseCodeField'];
$topic=$_POST['topicNameField'];
// Validate the meeting time format (optional, depending on the input type used in the form)
if (!preg_match('/^\d{2}:\d{2}$/', $meeting_time)) {
    die("Invalid meeting time format. Please enter in 'HH:MM' format.");
}

// Convert the time value to a MySQL TIME value
$meeting_time_mysql = date('H:i:s', strtotime($meeting_time));

// Connect to MySQL database
   
$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}   
$query = "INSERT INTO meetings (temail,tname,code,topic,sstart,stime) VALUES ('$email','$tname','$code','$topic','$date','$meeting_time_mysql')";
$result=mysqli_query($con,$query);

if ($result === TRUE) {
    echo '<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
    
        $(document).ready(function() {
            swal({
                title: "Meeting created",
                text: "Success.Click OK",
                icon: "success",
                button: "Ok",
                timer: 5000
            }).then(function(){
                window.location="dash.php";
            });
        });
    </script>';
} else {
    echo '<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
    
        $(document).ready(function() {
            swal({
                title: "Some error",
                text: "Please try again later",
                icon: "warning",
                button: "Ok",
                timer: 5000
            }).then(function(){
                window.location="dash.php";
            });
        });
    </script>';
}

?>
