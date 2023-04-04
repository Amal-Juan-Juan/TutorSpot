<?php
// Establish database connection
$host = "localhost";
$username = "root";
$password = "";
$dbname = "tutorspot";

$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Assign form input values to variables
  $ngo_name = mysqli_real_escape_string($conn, $_POST["ngo_name"]);
  $cord = mysqli_real_escape_string($conn, $_POST["cord"]);
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
  $no_stud = mysqli_real_escape_string($conn, $_POST["no_stud"]);
  $age = mysqli_real_escape_string($conn, $_POST["age"]);
  $application = mysqli_real_escape_string($conn, $_POST["application"]);

  // SQL query to insert data into table
  $sql = "INSERT INTO ngo_registration (ngo_name, cord, email, phone, no_stud, age, application)
  VALUES ('$ngo_name', '$cord', '$email', '$phone', '$no_stud', '$age', '$application')";

  if (mysqli_query($conn, $sql)) {
    echo "Registration successful";
	header("Location: ../NGO/app_conf.html"); 

  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

// Close database connection
mysqli_close($conn);
?>
