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
    <title>New Meeting form</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
      /* Custom styles for the form */
      .form-container {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f8f9fa;
        border-radius: 5px;
        margin-top: 50px;
      }
      .form-container h2 {
        text-align: center;
      }

      body {
        background-color: rgb(23, 30, 30);
      }
    </style>
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <div class="container">
      <div class="form-container">
        <h2>Create a new meeting</h2>
        <form action="create.php" method="post">
          <div class="form-group">
            <label for="tutorNameField">Tutor Name</label>
            <input
              type="text"
              class="form-control"
              id="tutorNameField"
              name="tutorNameField"
              placeholder="Enter tutor name"
            />
          </div>

          <div class="form-group">
            <label for="courseCodeField">Course Code</label>
            <input
              type="text"
              class="form-control"
              id="courseCodeField"
              name="courseCodeField"
              placeholder="Enter course code"
            />
          </div>
          <div class="form-group">
            <label for="topicNameField">Topic Name</label>
            <input
              type="text"
              class="form-control"
              id="topicNameField"
              name="topicNameField"
              placeholder="Enter topic name"
            />
          </div>

          <div class="form-group">
            <label for="dateField">Date</label>
            <input
              type="date"
              class="form-control"
              id="dateField"
              name="dateField"
              placeholder="Enter date"
            />
          </div>
          <div class="form-group">
            <label for="timeField">Time</label>
            <input
              type="time"
              class="form-control"
              id="timeField"
              name="timeField"
              placeholder="Enter time"
            />
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>

    <!-- Bootstrap JS scripts -->
  </body>
</html>
