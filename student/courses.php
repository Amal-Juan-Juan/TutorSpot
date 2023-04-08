<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course</title>
    <link rel="stylesheet" href="course.css">
</head>
<body>
<ul>
      <li><a class="active" href="#home">Course</a></li>
      <li><a href="home.php">Home</a></li>
      <li style="float:right; "><a href="logout.php" class="logout">Logout</a></li>
    </ul>
    <div class="section">
        <h1>Select Course to Register</h1>
    
    <?php
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "TutorSpot";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }   

    ?>
    <form id="formin" method="post">
    <?php
    $username=$_SESSION['username'];
    $email=$_SESSION['email'];
    $sql = "select *from courses";  
    $result = mysqli_query($con, $sql); 
    $arr=[]; 
    $arr1=[];
    $arr2=[];
    $i=1;
  echo "<div class='div1'>";
  echo "<table>";
  echo "<tr id='header'>";
  echo "<td>S.No</td>";
  echo "<td> Course Name</td>";  
  echo "<td> Tutor Name</td>";
  echo "<td> Tutor Code</td>";
  echo "<td> Number of Hours</td>";
  echo "<td>Register Here</td>";
  echo "</tr>";
  echo "<tbody>";
   while( $row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<tr>";
    echo "<td>".$i."</td>";
    echo "<td>".$row['coursename']."</td>";
    echo "<td>".$row['tutorname']."</td>";
    echo "<td>".$row['tutorid']."</td>";
    echo "<td>".$row['duration']."</td>";
    $arr[]=$row['tutorname'];
    $arr1[]=$row['coursename'];
    $arr2[]=$row['tutorid'];
    echo "<td><input type='radio' name='radio' value='$i' class='radio'> </td>";
    $i=$i+1;
    echo "</tr>";
   }  
   echo "</tbody>";
 echo "</table>";
  echo "</div>";

?>
<br>

<div class="sub">
  <div class="btn">
	<input id="submit" type="submit" name="submit" value="Register">
  </div></div>
    </form>
    </div>
    <?php
    if(isset($_POST['submit'])){
        if(isset($_POST['radio'])){
            $value=$_POST['radio'];
          $tutorname= $arr[$value-1];
          $coursename=$arr1[$value-1];
          $tutorid=$arr2[$value-1];
          $query4="select * from coursereg where username='$username' and coursename='$coursename' and tutorname='$tutorname'";
        $result4=mysqli_query($con,$query4);
        $count4=mysqli_num_rows($result4);
        if($count4>0)
        {
          echo "<script>alert('You have already registered under this tutor for this course! Check Again')</script>";
        }
        else
        {
          $query3="insert into coursereg values('$coursename','$username','$tutorname','$tutorid','$email')";
          $result3=mysqli_query($con,$query3);
          if($result3)
          {
            echo "<script>alert('Course Registered Successfully.)</script>";
          }
          else{
            echo "<script>alert('Course Registered Failed! Try again')</script>";
          }
        }
        }
        else{
            echo "<script>alert('Select Any Tutor First!')</script>";
          }
    }
    ?>
</body>
</html>