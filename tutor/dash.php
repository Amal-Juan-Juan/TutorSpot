<?php 
session_start();
$email=$_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Meeting room</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <style>
      /* Custom styles for the form */
      body {
        background-color: rgb(23, 30, 30);
      }
    </style>
  </head>
  <body>
    <div class="container mt-5">
    <?php
        // Check if the "Back" button is clicked
        if (isset($_POST['back'])) {
            header("Location: tutorhome.php"); // Replace with the URL of your "Meeting Planner" page
            exit();
        }
        ?>
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h4 class="text-center">Meeting Planner</h4>
            </div>
            <div class="card-body">
              <div class="text-center mb-4">
                <img
                  src="logo.jpeg"
                  alt="Meeting Planner Logo"
                  class="img-fluid"
                />
              </div>
              <div class="text-center mb-4">
                <p>Welcome to Meeting Planner! Please select an option:</p>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <a href="viewMeetings.php" class="btn btn-primary btn-block"
                    >View Meeting</a
                  >
                </div>
                <div class="col-md-6">
                  <a href="createMeeting.php" class="btn btn-success btn-block"
                    >Create New Meeting</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <form method="post">
                            <div class="text-center mt-4">
                                <button type="submit" name="back" class="btn btn-secondary">Close</button>
                            </div>
    </div>
  </body>
</html>
