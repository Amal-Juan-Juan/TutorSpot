<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Materials</title>
    <link rel="stylesheet" href="material.css">
</head>
<body>
<ul>
      <li><a class="active" href="#">Materials</a></li>
      <li><a href="tutorhome.php">Home</a></li>
      <li style="float:right; "><a href="../student/logout.php" class="logout">Logout</a></li>
    </ul>
    <div class="section">
        <h1>Upload Material</h1>
    </div>
<div id="formdiv1" class="formdiv" style="margin-top:10px;"><br />
		
      <form id="formin" method="post" enctype="multipart/form-data">
      	<label>Tutor Name</label>
        <input type="text" name="tutorname" id="inp1" class="inputf" size="90px" required/><br />
        <label class="inputl" >Tutor ID</label>
        <input type="text" name="tutorid" class="inputf" size="90px" required/><br />
        <label class="inputl">Course Name</label>
        <input type="text" name="coursename" class="inputf" size="90px" required/><br />
        <label class="inputl">Material </label>
        <input type="file" class="inputf" name="pdf_file" accept="application/pdf" ><br>
				<input style="font-size: 1.5em" id="subm" type="submit" name="submit" value="Upload">
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
if(isset($_POST['submit']))
{
  $coursecode=$_POST['coursecode'];
  $coursename=$_POST['coursename'];
  $studentregno=$_POST['studentregno'];
  $studentname=$_POST['studentname'];
  $file_name=$_FILES['pdf_file']['name'];
  $file_tmp=$_FILES['pdf_file']['tmp_name'];
  $query="select * from material where fname='$file_name';";
  $result1=mysqli_query($con,$query);
  $count=mysqli_num_rows($result1);
  if($count>0)
  {
    echo '<div id="cont2">
<p>
Error!Filename is already present
</p>
		</div>';
  }
  else {
    move_uploaded_file($file_tmp,"materialsfolder/".$file_name);
    $insert="insert into material(coursecode,coursename,sregno,sname,fname) values('$coursecode','$coursename','$studentregno','$studentname','$file_name');";
    $result=mysqli_query($con,$insert);
			echo '<div id="cont1">
				<p>
				File Uploaded Successfully
				</p>
			</div>';
  }
}
?>
</body>
</html>