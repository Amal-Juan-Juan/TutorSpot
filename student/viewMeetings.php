<?php 
session_start();
$email=$_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Meeting Planner</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
    <?php
        // Check if the "Back" button is clicked
        if (isset($_POST['back'])) {
            header("Location: dash.php"); // Replace with the URL of your "Meeting Planner" page
            exit();
        }
        ?>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Meeting Planner - View Meeting</h4>
                    </div>
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <img src="logo.jpeg" alt="Meeting Planner Logo" class="img-fluid">
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Tutor Name</th>
                                        <th>Course Code</th>
                                        <th>Topic Name</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Link</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    <?php
                                    // Replace with your MySQL database connection details
                                    $conn = mysqli_connect("localhost", "root", "", "TutorSpot");
                                    
                                    // Check connection
                                    if (!$conn) {
                                        die("Connection failed: " . mysqli_connect_error());
                                    }
                                    
                                    $currTime=date('H:i:s');
                                    // echo $currTime;

                                    $currDate=date('Y-m-d');
                                    // echo $currDate;

            $sql="select * from meetings where sstart>'$currDate' or (sstart='$currDate' and  stime > '$currTime')";
                                    // Fetch data from the MySQL database
                                    // $sql = "SELECT * FROM meetings";
                                    $result = mysqli_query($conn, $sql);
                                    
                                    // Loop through the fetched data and display in the table
                                    if (mysqli_num_rows($result) > 0) {
                                        while($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr>";
                                            echo "<td>" . $row['tname'] . "</td>";
                                            echo "<td>" . $row['code'] . "</td>";
                                            echo "<td>" . $row['topic'] . "</td>";
                                            echo "<td>" . $row['sstart'] . "</td>";
                                            echo "<td>" . $row['stime'] . "</td>";
                                            echo "<td><a href='indexstu.html' target='_blank'>Open Link</a></td>";
                                            echo "</tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='5' class='text-center'>No meetings found.</td></tr>";
                                    }
                                    
                                    // Close database connection
                                    mysqli_close($conn);
                                    ?>
                                </tbody>
                            </table>
                            <form method="post">
                            <div class="text-center mt-4">
                                <button type="submit" name="back" class="btn btn-secondary">Close</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
