<?php

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

// Check if a file was uploaded
if(isset($_FILES['csv_file'])){

  // Get the file extension
  $extension = pathinfo($_FILES['csv_file']['name'], PATHINFO_EXTENSION);

  // Check if the file is a CSV file
  if($extension == 'csv'){

    // Open the file for reading
    $file_handle = fopen($_FILES['csv_file']['tmp_name'], 'r');

    // Loop through each line of the file
    while(!feof($file_handle)){

      // Get the line and split it into an array
      $line = fgetcsv($file_handle);

      // Insert values into MySQL database
      $sql = "INSERT INTO students (name, age, class, gender) VALUES ('$line[0]', '$line[1]', '$line[2]', '$line[3]')";

      if (mysqli_query($conn, $sql)) {
        echo "Student added successfully<br>";
        header("Location: stud_add_conf.html"); 
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

    }

    // Close the file
    fclose($file_handle);

  } else {
    echo "Error: File is not a CSV file";
  }

} else {
  echo "Error: No file was uploaded";
}

// Close MySQL connection
mysqli_close($conn);

?>
