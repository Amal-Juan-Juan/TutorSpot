<!DOCTYPE html>
<?php session_start();
include('include/config.php');
$email=$_SESSION['email'];
$sql="select completed from logint where email='$email'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
$value=$row[0];
if($value=="na"){
	header('Location: completeReg.php');
}
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tutor Home</title>
    <link rel="stylesheet" href="index.css" />
  </head>
  <body>
    
    <ul>
      <li><a class="active" href="#home">Home</a></li>
      <li><a href="createcourse.php">Courses</a></li>
      <li><a href="#about">Classes</a></li>
      <li><a href="#about">Chat</a></li>
      <li><a href="#about">Quiz</a></li>
      <li><a href="fileupload.php">Materials</a></li>
      <li><a href="details.php">Details</a></li>
      <li style="float:right; "><a href="../student/logout.php" class="logout">Logout</a></li>
    </ul>

    <div class="section w3-animate-fading" id="course">
      <div class="btcourse">
        <div class="course1">
          <p class="content">
            Welcome to the course creation process! As a tutor, you have the unique opportunity to design and develop a course 
            that reflects your expertise and passion. 
            Creating a course can be a rewarding experience that allows you to share your knowledge and skills with others.
            When creating your course, think about your audience and their learning objectives. 
            What do they need to know, and how can you present the material in a way that is engaging and informative? 
            As you develop your course content, be sure to organize it in a logical and accessible way. 
            Consider creating a syllabus that outlines the course objectives, reading materials, and assignments. 
            This will help your students stay on track and understand the expectations for the course.
            You'll also want to think about the technology and tools you'll need to deliver your course content. 
            This could include creating videos, using online resources, and setting up a virtual classroom. 
            Our team is here to support you and provide you with the resources you need to create a successful course.
          </p>
        </div>
        <div class="button">
          <a href="createcourse.php"><button class="button">Create Course</button></a>
        </div>
      </div>
    </div>
    <div class="section section w3-animate-fading" id="class">
      <div class="btclass">
        <div class="class1">
          <p class="content">
          Welcome to our "Start a Class" option for tutors! 
          This tool allows you to create and manage your own classes, and provide your students 
          with a personalized and engaging learning experience.
          With our "Start a Class" option, you can choose the subject matter, set the schedule, and tailor 
          the course material to meet the needs of your students.
          To get started, simply select the subject you'd like to teach, and follow the step-by-step instructions 
          to create your class.
          We're committed to providing you with the tools you need to be an effective tutor, and we're confident 
          that our "Start a Class" option will help you achieve your goals.
          </p>
        </div>
        <div class="button">
          <a href="#"><button class="button">Start Class</button></a>
        </div>
      </div>
    </div>
    <div class="section section w3-animate-fading" id="chat">
      <div class="btchat">
        <div class="chat1">
          <p class="content">
          Welcome to our tutor chatbot! 
          Our chatbot is designed to help you quickly and easily find the information 
          you need to enhance your tutoring skills and support your students.
          With our chatbot, you can ask questions about a variety of topics, including teaching 
          strategies, subject matter, and student engagement.
          Our goal is to provide you with fast and accurate answers, so you can focus on what 
          matters most - helping your students succeed.
          So, don't hesitate to ask our chatbot any questions you may have. 
          We're here to help!
          </p>
        </div>
        <div class="button">
          <a href="#"><button class="button">Chat</button></a>
        </div>
      </div>
    </div>
    <div class="section section w3-animate-fading" id="quiz">
      <div class="btquiz">
        <div class="quiz1">
          <p class="content">
          Welcome to our quiz maker for tutors! 
          With this tool, you can create custom quizzes to help your students test 
          their knowledge and reinforce their learning.
          Our quiz maker is user-friendly and intuitive, and it allows you to customize 
          your quizzes with a variety of question types and formats.
          To get started, simply select the subject and difficulty level you'd like to 
          create a quiz for, and follow the step-by-step instructions to add your questions 
          and answers.
          We're confident that you'll find our quiz maker to be a valuable tool for 
          enhancing your tutoring sessions and helping your students succeed.
          </p>
        </div>
        <div class="button">
          <a href="#"><button class="button">Start Quiz</button></a>
        </div>
      </div>
    </div>
    <div class="section section w3-animate-fading" id="materials">
      <div class="btmaterial">
        <div class="material1">
          <p class="content">
          Welcome to our material upload feature for tutors! 
          This tool allows you to easily upload and share teaching materials with your students.
          With our material upload feature, you can share a variety of materials, including lecture notes, 
          practice exercises, and reading assignments.
          To get started, simply select the class and topic you'd like to upload materials for, and follow 
          the instructions to add your files.
          We're committed to providing you with the tools you need to enhance your tutoring sessions, 
          and we're confident that our material upload feature will help you do just that.
          </p>
        </div>
        <div class="button">
          <a href="fileupload.php"><button class="button">Upload Materials</button></a>
        </div>
      </div>
    </div>
    <script>
      var myIndex = 0;
      carousel();

      function carousel() {
        var i;
        var x = document.getElementsByClassName("section");
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";  
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}    
        x[myIndex-1].style.display = "block";  
        setTimeout(carousel, 9000);    
      }
    </script>
  </body>
</html>
