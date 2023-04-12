<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="details.css">
</head>
<body>
<ul>
      <li><a class="active" href="#">Details</a></li>
      <li><a href="tutorhome.php">Home</a></li>
      <li style="float:right; "><a href="../student/logout.php" class="logout">Logout</a></li>
</ul>

<div class="section">
        <h1>View Course Details</h1>
    </div>
<div id="formdiv1" class="formdiv" style="margin-top:10px;"><br />
		
      <form id="formin" method="post" enctype="multipart/form-data">
      <label class="inputl">Course Name</label>
        <input type="text" name="coursename" class="inputf" size="90px" required/><br />
        <label class="inputl" >Tutor ID</label>
        <input type="text" name="tutorid" class="inputf" size="90px" required/><br />
        
        
				<input style="font-size: 1.5em" id="subm" type="submit" name="submit" value="View">
      </form>
    </div>
</body>
</html>