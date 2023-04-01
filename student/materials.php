<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materials</title>
    <link rel="stylesheet" href="material.css">
</head>
<body>
<ul>
      <li><a class="active" href="#">Materials</a></li>
      <li><a href="home.php">Home</a></li>
      <li style="float:right; "><a href="logout.php" class="logout">Logout</a></li>
    </ul>
    <div class="section">
        <h1>Select Material to Download</h1>
    </div>

    <?php
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "TutorSpot";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }   
        $sql = "select * from materials";  
        $result = mysqli_query($con, $sql);  
        $i=1;
  echo "<div class='div1'>";
  echo "<table>";
  echo "<tr id='header'>";
  echo "<td>S.No</td>";
  echo "<td> Course Name</td>";
  
  echo "<td> Tutor Name</td>";
  echo "<td> Tutor ID</td>";
  echo "<td> Uploaded File</td>";
  echo "</tr>";
  
while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>".$i++."</td>";
    echo "<td>".$row['coursename']."</td>";
    echo "<td>".$row['tutorname']."</td>";
    echo "<td>".$row['tutorid']."</td>";
    
    $temp=$row['filename'];
    $path='../material/'.$temp;
    echo "<td><a download='$path' href='$path'>$temp</a></td>";
    echo "</tr>";
} 

  echo "</table>";
  echo "</div>";


    ?>
</body>
</html>