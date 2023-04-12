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
            .mentor-details {
            text-align: center;
            margin-top: 20px;
            color: white; /* set text color to blue */

            }

            .status{
            text-align: center;
            margin-top: 20px;
            color: white; 
            }

        </style>
        <div class="header">
            <h1>TutorSpot</h1>
            <nav>
                <ul>
                    <li><a href="dashboard.html">Dashboard</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
            

        </div>
        <?php
            // Connect to MySQL database
            $conn = mysqli_connect("localhost", "root", "", "tutorspot");

// Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

// Get email from query string parameter
            $org_email = 'hope@gmail.com';

// SQL query to fetch data for the given email
            $sql = "SELECT name,email,phone FROM mentors WHERE org_email = '$org_email'";
            $sql1 = "SELECT status FROM ngo_registration WHERE email = '$org_email'";

// Execute query
            $result = mysqli_query($conn, $sql);
            $result1 = mysqli_query($conn, $sql1);
// Check if any rows were returned
if (mysqli_num_rows($result1) > 0 ) {
    // Output data
                      while($row = mysqli_fetch_assoc($result1)) {
                        echo '<div class="status"><p>Your application status is: ' . $row["status"] . '</p></div>';
             
              
  
              }
          } else {
              echo "No results found.";
  }
            if (mysqli_num_rows($result) > 0 ) {
  // Output data
                    while($row = mysqli_fetch_assoc($result)) {
                
                        echo '<div class="mentor-details">';
                        echo '<p>Your mentor details are:</p>';
                        echo '<p>Name: ' . $row["name"] . '</p>';
                        echo '<p>Email: ' . $row["email"] . '</p>';
                        echo '<p>Contact: ' . $row["phone"] . '</p>';
                        echo '</div>';
                    


            }
        } else {
            echo "No results found.";
}

// Close database connection
        mysqli_close($conn);
?>
	</body>
</html>