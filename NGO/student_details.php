<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Register</title>
        <link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
	</head>
	<body>
    <style>
 table {
              border-collapse: collapse;
              width: 80%;
              padding: 8px;
              border: 1px solid white;
              margin-top: 20px;
              margin-left: auto;
              margin-right: auto;
            }

            th, td {
              text-align: left;
              padding: 8px;
            }

            th {
              background-color: #403e3e;
              color: #fff;
            }

            tr {
              background-color:#6b6868;
              color:#ffff;
            }
</style>
        <div class="header">
            <h1>TutorSpot</h1>
            <nav>
                <ul>
                    <li><a href="dashboard.html">Dashboard</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Profile</a></li>
                </ul>
            </nav>
        </div>
        <h1 style="color: #4FFFCA; text-align: center;">Student Details</h1>

	</body>
</html>

<?php

// Connect to MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tutorspot";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Query database for students
$sql = "SELECT * FROM ngo_students";
$result = mysqli_query($conn, $sql);

// Display table of students
if (mysqli_num_rows($result) > 0) {
  echo "<table>";
  echo "<tr><th>Name</th><th>Age</th><th>Class</th><th>Gender</th><th>Location</th></tr>";
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>".$row['name']."</td><td>".$row['age']."</td><td>".$row['class']."</td><td>".$row['gender']."</td><td>".$row['location']."</td></tr>";
  }
  echo "</table>";
} else {
  echo "No students found.";
}

// Close MySQL connection
mysqli_close($conn);

?>