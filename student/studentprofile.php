<?php
session_start();
$host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "TutorSpot";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
    $email = $_SESSION['email'];  
    $password = $_SESSION['password'];
    $username = $_SESSION['username'];
    $sql = "select *from login where email = '$email' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>
<ul>
      <li><a class="active" href="#home">Profile</a></li>
      <li><a href="home.php">Home</a></li>
      <li style="float:right; "><a href="logout.php" class="logout">Logout</a></li>
    </ul>
    <div class="section">
        <h1 class="profile-heading">Profile Details</h1>
        <table class="profile">
            <tr>
                <td>UserName :  <?php echo $row['username']?> </td>
                <!-- <td></td> -->
            </tr>
            <tr>
                <td>Password :  <?php echo $row['password']?></td>
                <!-- <td></td> -->
            </tr>
                <td>E-Mail :  <?php echo $row['email']?></td>
                <!-- <td></td> -->
            </tr>
            <?php
                $sql = "select *from studentdetails where email = '$email'";  
                $result = mysqli_query($con, $sql);  
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
            ?>
            </tr>
                <td>Name :  <?php echo $row['name']?></td>
                <!-- <td></td> -->
            </tr>
            </tr>
                <td>Age :  <?php echo $row['age']?></td>
                <!-- <td></td> -->
            </tr>
            </tr>
                <td>Gender :  <?php echo $row['gender']?></td>
                <!-- <td></td> -->
            </tr>
            </tr>
                <td>Phone :  <?php echo $row['phone']?></td>
                <!-- <td></td> -->
            </tr>
            </tr>
                <td>Year Of Study :  <?php echo $row['yearOfStudy']?></td>
                <!-- <td></td> -->
            </tr>
            </tr>
                <td>Location :  <?php echo $row['location']?></td>
                <!-- <td></td> -->
            </tr>
            </tr>
                <td>University :  <?php echo $row['university']?></td>
                <!-- <td></td> -->
            </tr>
            <!-- <tr>
                <td>NGO:</td>
                 <td></td> 
            </tr> -->
        </table>
</div>
<div class="section">
        <h1>Courses Registered</h1>
        <?php
        $sql = "select * from coursereg where email = '$email' and username = '$username'";  
        $result = mysqli_query($con, $sql);  
        $i=1;
        echo "<div class='div1'>";
        echo "<table class='t1'>";
        echo "<tr id='header'>";
        echo "<td>S.No</td>";
        echo "<td> Course Name</td>";  
        echo "<td> Tutor Name</td>";
        echo "<td> Tutor Code</td>";
        echo "</tr>";
        echo "<tbody>";
         while( $row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
          echo "<tr>";
          echo "<td>".$i++."</td>";
          echo "<td>".$row['coursename']."</td>";
          echo "<td>".$row['tutorname']."</td>";
          echo "<td>".$row['tutorid']."</td>";
      echo "</tr>";
         }
         echo "</tbody>";
 echo "</table>";
  echo "</div>";
        ?>
    </div>
</body>
</html>