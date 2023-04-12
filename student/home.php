<!DOCTYPE html>
<?php session_start();
include('include/config.php');
$email=$_SESSION['email'];
$uname=$_SESSION['username'];
$sql="select completed from login where email='$email'";
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
    <title>Student Home</title>
    <link rel="stylesheet" href="index.css" />
  </head>
  <body>
    
    <ul>
      <li><a class="active" href="#home">Home</a></li>
      <li><a href="studentprofile.php">Profile</a></li>
      <li><a href="courses.php">Courses</a></li>
      <li><a href="#about">Classes</a></li>
      <!-- <li><a href="#about">Chat</a></li> -->
      <li><a href="#about">Quiz</a></li>
      <li><a href="materials.php">Materials</a></li>
      <li style="float:right; "><a href="logout.php" class="logout">Logout</a></li>
    </ul>

    <div class="section w3-animate-fading" id="course">
      <div class="btcourse">
        <div class="course1">
          <p class="content">
          Welcome to the TutorSpot! We are thrilled to have you here and offer you access to our vast selection of online courses. 
          With our user-friendly platform, you can easily search and register for courses that align with your interests, goals, and schedule.
          Our online course system is designed to provide you with a flexible and convenient way to pursue your 
          education, whether you're looking to enhance your skills, earn a certificate, or complete a degree program. 
          You'll have access to a variety of courses across different disciplines, and our online platform enables 
          you to study from anywhere, at any time.
          The registration process is straightforward and easy to follow. 
          Once you create an account, you can browse our course catalog, review course details, and select the courses that fit your schedule and academic goals. 
          You'll also have access to your course materials, assignments, and other resources, all in one place.
          Our platform is designed to provide you with a seamless and engaging learning experience. 
          You'll have the opportunity to connect with your instructors and peers, participate in discussions, and receive feedback on your assignments. 
          You can learn at your own pace and take advantage of the many resources available to you.
          We're excited to have you as part of our online learning community, and we look forward to helping you achieve your educational aspirations. 
          Let's get started on this journey together!
          </p>
        </div>
        <div class="button">
          <a href="courses.php"><button class="button">Register Course</button></a>
        </div>
      </div>
    </div>
    <div class="section w3-animate-fading" id="class">
      <div class="btclass">
        <div class="class1">
          <p class="content">
            Through our portal, you'll have access to a wide range of classes, each taught by experienced and knowledgeable tutors. You'll be able to select classes that fit your interests and needs, and learn at your own pace.
            Our classes are designed to be interactive and engaging, with a focus on hands-on learning and real-world applications. You'll have access to a variety of resources, including video lectures, practice exercises, and one-on-one tutoring sessions.
            Our tutors are here to support you every step of the way. They'll work with you to identify your strengths and weaknesses, and help you develop the skills and knowledge you need to succeed.
            To get the most out of your classes, we recommend that you set goals, stay organized, and be proactive in your learning. Take advantage of the resources available to you, and don't hesitate to reach out to your tutor if you need help.
            We're here to help you achieve your full potential and succeed in your academic pursuits. So, are you ready to take the first step on your learning journey? Let's get started!
          </p>
        </div>
        <div class="button">
          <a href="#"><button class="button">Take Class</button></a>
        </div>
      </div>
    </div>
    <!-- <div class="section w3-animate-fading" id="chat">
      <div class="btchat">
        <div class="chat1">
          <p class="content">
            Hi there! I'm your tutor chatbot, 
            ready to help you with your academic goals. 
            Whether you need help with homework or have questions about a specific subject, 
            I'm here to guide you. Let's work together to achieve your full potential!
          </p>
        </div>
        <div class="button">
          <a href="#"><button class="button">Chat</button></a>
        </div>
      </div> -->

    </div>
    <div class="section w3-animate-fading" id="quiz">
      <div class="btquiz">
        <div class="quiz1">
          <p class="content">
            Welcome to our quiz! Get ready to test your knowledge on a variety of topics. 
            Each question will have multiple choice options for you to choose from. 
            Be sure to read each question carefully before selecting your answer. 
            Remember, there's no penalty for guessing, so if you're not sure about an answer, take your best guess. 
            At the end of the quiz, we'll tally up your score and let you know how you did. 
            So, without further ado, let's jump right in and see how well you do! 
            And don't forget to have fun while testing your knowledge.
          </p>
        </div>
        <div class="button">
          <a href="#"><button class="button">Take Quiz</button></a>
        </div>
      </div>
    </div>
    <div class="section w3-animate-fading" id="materials">
      <div class="btmaterial">
        <div class="material1">
          <p class="content">
            Welcome to your material access portal! Here, you'll be able to access all the resources you need to succeed in your classes. From lecture notes and textbooks to practice quizzes and exams, everything you need is just a few clicks away.
            We've designed our material access portal to be user-friendly and intuitive, so you can find what you need quickly and easily. If you have any questions or need help navigating the portal, don't hesitate to reach out to our support team.
            We're constantly updating and adding new materials to the portal, so be sure to check back often for the latest resources. Whether you're studying for a big exam or just need a quick reference, we've got you covered.
            So, log in and start exploring! We're confident that you'll find everything you need to excel in your classes and achieve your academic goals.
          </p>
        </div>
        <div class="button">
          <a href="materials.php"><button class="button">Download Materials</button></a>
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
