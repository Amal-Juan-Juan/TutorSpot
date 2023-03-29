<?php

// Get form values
$stud_name = $_POST['stud_name'];
$stud_age = $_POST['stud_age'];
$stud_class = $_POST['stud_class'];
$stud_gender = $_POST['stud_gender'];

// Connect to MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ngo";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Insert values into MySQL database
$sql = "INSERT INTO students (name, age, class, gender) VALUES ('$stud_name', '$stud_age', '$stud_class', '$stud_gender')";

if (mysqli_query($conn, $sql)) {
  echo "Student added successfully";
  
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close MySQL connection
mysqli_close($conn);

?>
