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
      	<label style="font-size: 30px; color:#17252a;">Name</label>
        <input style="border: 4px solid #17252a;margin-bottom:20px;" type="text" name="studentname" id="inp1" class="inputf" size="90px" required/><br />
        <label style="font-size: 30px; color:#17252a;" class="inputl" >Reg_No</label>
        <input style="border: 4px solid #17252a;margin-bottom:20px;" type="text" name="studentregno" class="inputf" size="90px" placeholder="11XXX0000" required/><br />
        <label style="font-size: 30px; color:#17252a;" class="inputl">Course Code </label>
        <input style="border: 4px solid #17252a;margin-bottom:20px;" type="text" name="coursecode" class="inputf" size="90px" placeholder="XXX0000" required/><br />
        <label style="font-size: 30px; color:#17252a;" class="inputl">Course Name </label>
        <input style="border: 4px solid #17252a;margin-bottom:20px;" type="text" name="coursename" class="inputf" size="90px" required /><br />
        <label style="font-size: 30px; color:#17252a;" class="inputl">Chapter Name </label>
        <input style="border: 4px solid #17252a;margin-bottom:20px;" type="text" class="inputf" size="90px" required/><br />
        <label style="font-size: 30px; color:#17252a;" class="inputl">Concept </label>
        <input style="border: 4px solid #17252a;margin-bottom:20px;" type="text" class="inputf" size="90px" required/><br />
        <label style="font-size: 30px; color:#17252a;" class="inputl">Material </label>
        <input style="border: 4px solid #17252a;margin-bottom:20px;" type="file" class="inputf" name="pdf_file" accept="application/pdf" ><br>
				<input style="font-size: 1.5em" id="subm" type="submit" name="submit" value="Upload">
      </form>
    </div>
<?php
$con=mysqli_connect('localhost','root','','softproj');
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