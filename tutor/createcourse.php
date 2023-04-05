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
    <link rel="stylesheet" href="course1.css">
</head>
<body>
<ul>
      <li><a class="active" href="#">Materials</a></li>
      <li><a href="tutorhome.php">Home</a></li>
      <li style="float:right; "><a href="../student/logout.php" class="logout">Logout</a></li>
</ul>
<div class="whole">
   

    
    <form id="register-form"class="card-form" action="" method="post">
            <input type="hidden" name="id">
          <div class="row">
              
                  <div class="input">
                      
                      <input type="text" onkeypress="myfun()" class="input-field" reqiured="" placeholder="Course Name" name="coursename" id="coursename">
                  </div>
                  <div class="input">
                  
                      <input type="text"  onkeypress="myfun()"  class="input-field" placeholder="Tutor Name"  name="tutorname" id="tutorname">
                  </div>
                  <div class="input">
                      
                      <input type="text" onkeypress="myfun()"  class="input-field" placeholder="Duration" reqiured="" name="duration" id="duration">
                  </div>
                  <div class="input">
                      
                      <input type="text" onkeypress="myfun()"  class="input-field" placeholder="Tutor ID" reqiured="" name="tutorid" id="tutorid">
                  </div>
              
              <div>
                <p  id="file_name"></p>
              </div>
              
              
              <div class="action" >
                
                
                <button type="submit" class="action-button" name="btn-course">Create Course</button>
                
                
              </div>

          </div>
         
        </form>
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
if(isset($_POST['btn-course']))
{
  $coursename=$_POST['coursename'];
  $tutorname=$_POST['tutorname'];
  $duration=$_POST['duration'];
  $tutorid=$_POST['tutorid'];
  
  $query="insert into courses values('$coursename','$tutorname','$duration','$tutorid');";
  $result1=mysqli_query($con,$query);
  if($result1)
  {
	echo '<script type="text/javascript">
                    alert("Course Added Successfully");
            
            </script>'; 
  }
}

?>
</body>
</html>
