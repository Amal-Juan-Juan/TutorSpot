<!DOCTYPE html>
<?php session_start();
include('include/config.php');
$email=$_SESSION['email'];
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
      <li><a href="#about">Chat</a></li>
      <li><a href="#about">Quiz</a></li>
      <li><a href="materials.php">Materials</a></li>
      <li style="float:right; "><a href="logout.php" class="logout">Logout</a></li>
    </ul>

    <div class="section" id="course">
      <div class="btcourse">
        <div class="course1">
          <p class="content">
          Welcome to the TutorSpot! We are thrilled to have you here and offer you access to our vast selection of online courses. With our user-friendly platform, you can easily search and register for courses that align with your interests, goals, and schedule.

Our online course system is designed to provide you with a flexible and convenient way to pursue your education, whether you're looking to enhance your skills, earn a certificate, or complete a degree program. You'll have access to a variety of courses across different disciplines, and our online platform enables you to study from anywhere, at any time.

The registration process is straightforward and easy to follow. Once you create an account, you can browse our course catalog, review course details, and select the courses that fit your schedule and academic goals. You'll also have access to your course materials, assignments, and other resources, all in one place.

Our platform is designed to provide you with a seamless and engaging learning experience. You'll have the opportunity to connect with your instructors and peers, participate in discussions, and receive feedback on your assignments. You can learn at your own pace and take advantage of the many resources available to you.

We're excited to have you as part of our online learning community, and we look forward to helping you achieve your educational aspirations. Let's get started on this journey together!
          </p>
        </div>
        <div class="button">
          <a href="courses.php"><button class="button1">Register Course</button></a>
        </div>
      </div>
      <div class="image1">
        <img src="../images/course.jpg" width="700" height="400" />
      </div>
    </div>
    <div class="section" id="class">
      <div class="image2">
        <img src="../images/class.jpg" height="400" width="680" />
      </div>
      <div class="btclass">
        <div class="class1">
          <p class="content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
            mollitia, molestiae quas vel sint commodi repudiandae consequuntur
            voluptatum laborum numquam blanditiis harum quisquam eius sed odit
            fugiat iusto fuga praesentium optio, eaque rerum! Provident
            similique accusantium nemo autem. Veritatis obcaecati tenetur iure
            eius earum ut molestias architecto voluptate aliquam nihil, eveniet
            aliquid culpa officia aut! Impedit sit sunt quaerat, odit, tenetur
            error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
            quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias
            eos sapiente officiis modi at sunt excepturi expedita sint? Sed
            quibusdam recusandae alias error harum maxime adipisci amet laborum.
            Perspiciatis minima nesciunt dolorem! Officiis iure rerum voluptates
            a cumque velit quibusdam sed amet tempora. Sit laborum ab, eius
            fugit doloribus tenetur fugiat, temporibus enim commodi iusto libero
            magni deleniti quod quam consequuntur! Commodi minima excepturi
            repudiandae velit hic maxime doloremque. Quaerat provident commodi
            consectetur veniam similique ad earum omnis ipsum saepe, voluptas,
            hic voluptates pariatur est explicabo fugiat, dolorum eligendi quam
            cupiditate excepturi mollitia maiores labore suscipit quas? Nulla,
            placeat. Voluptatem quaerat non architecto ab laudantium modi minima
            sunt esse temporibus sint culpa, recusandae aliquam numquam totam
            ratione voluptas quod exercitationem fuga. Possimus quis earum
            veniam quasi aliquam eligendi, placeat qui corporis!
          </p>
        </div>
        <div class="button">
          <a href="#"><button class="button2">Take Class</button></a>
        </div>
      </div>
    </div>
    <div class="section" id="chat">
      <div class="btchat">
        <div class="chat1">
          <p class="content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
            mollitia, molestiae quas vel sint commodi repudiandae consequuntur
            voluptatum laborum numquam blanditiis harum quisquam eius sed odit
            fugiat iusto fuga praesentium optio, eaque rerum! Provident
            similique accusantium nemo autem. Veritatis obcaecati tenetur iure
            eius earum ut molestias architecto voluptate aliquam nihil, eveniet
            aliquid culpa officia aut! Impedit sit sunt quaerat, odit, tenetur
            error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
            quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias
            eos sapiente officiis modi at sunt excepturi expedita sint? Sed
            quibusdam recusandae alias error harum maxime adipisci amet laborum.
            Perspiciatis minima nesciunt dolorem! Officiis iure rerum voluptates
            a cumque velit quibusdam sed amet tempora. Sit laborum ab, eius
            fugit doloribus tenetur fugiat, temporibus enim commodi iusto libero
            magni deleniti quod quam consequuntur! Commodi minima excepturi
            repudiandae velit hic maxime doloremque. Quaerat provident commodi
            consectetur veniam similique ad earum omnis ipsum saepe, voluptas,
            hic voluptates pariatur est explicabo fugiat, dolorum eligendi quam
            cupiditate excepturi mollitia maiores labore suscipit quas? Nulla,
            placeat. Voluptatem quaerat non architecto ab laudantium modi minima
            sunt esse temporibus sint culpa, recusandae aliquam numquam totam
            ratione voluptas quod exercitationem fuga. Possimus quis earum
            veniam quasi aliquam eligendi, placeat qui corporis!
          </p>
        </div>
        <div class="button">
          <a href="#"><button class="button1">Chat</button></a>
        </div>
      </div>
      <div class="image1">
        <img src="../images/chat.png" width="700" height="400" />
      </div>
    </div>
    <div class="section" id="quiz">
      <div class="image2">
        <img src="../images/quiz.jpg" height="400" width="680" />
      </div>
      <div class="btquiz">
        <div class="quiz1">
          <p class="content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
            mollitia, molestiae quas vel sint commodi repudiandae consequuntur
            voluptatum laborum numquam blanditiis harum quisquam eius sed odit
            fugiat iusto fuga praesentium optio, eaque rerum! Provident
            similique accusantium nemo autem. Veritatis obcaecati tenetur iure
            eius earum ut molestias architecto voluptate aliquam nihil, eveniet
            aliquid culpa officia aut! Impedit sit sunt quaerat, odit, tenetur
            error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
            quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias
            eos sapiente officiis modi at sunt excepturi expedita sint? Sed
            quibusdam recusandae alias error harum maxime adipisci amet laborum.
            Perspiciatis minima nesciunt dolorem! Officiis iure rerum voluptates
            a cumque velit quibusdam sed amet tempora. Sit laborum ab, eius
            fugit doloribus tenetur fugiat, temporibus enim commodi iusto libero
            magni deleniti quod quam consequuntur! Commodi minima excepturi
            repudiandae velit hic maxime doloremque. Quaerat provident commodi
            consectetur veniam similique ad earum omnis ipsum saepe, voluptas,
            hic voluptates pariatur est explicabo fugiat, dolorum eligendi quam
            cupiditate excepturi mollitia maiores labore suscipit quas? Nulla,
            placeat. Voluptatem quaerat non architecto ab laudantium modi minima
            sunt esse temporibus sint culpa, recusandae aliquam numquam totam
            ratione voluptas quod exercitationem fuga. Possimus quis earum
            veniam quasi aliquam eligendi, placeat qui corporis!
          </p>
        </div>
        <div class="button">
          <a href="#"><button class="button2">Take Quiz</button></a>
        </div>
      </div>
    </div>
    <div class="section" id="materials">
      <div class="btmaterial">
        <div class="material1">
          <p class="content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
            mollitia, molestiae quas vel sint commodi repudiandae consequuntur
            voluptatum laborum numquam blanditiis harum quisquam eius sed odit
            fugiat iusto fuga praesentium optio, eaque rerum! Provident
            similique accusantium nemo autem. Veritatis obcaecati tenetur iure
            eius earum ut molestias architecto voluptate aliquam nihil, eveniet
            aliquid culpa officia aut! Impedit sit sunt quaerat, odit, tenetur
            error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
            quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias
            eos sapiente officiis modi at sunt excepturi expedita sint? Sed
            quibusdam recusandae alias error harum maxime adipisci amet laborum.
            Perspiciatis minima nesciunt dolorem! Officiis iure rerum voluptates
            a cumque velit quibusdam sed amet tempora. Sit laborum ab, eius
            fugit doloribus tenetur fugiat, temporibus enim commodi iusto libero
            magni deleniti quod quam consequuntur! Commodi minima excepturi
            repudiandae velit hic maxime doloremque. Quaerat provident commodi
            consectetur veniam similique ad earum omnis ipsum saepe, voluptas,
            hic voluptates pariatur est explicabo fugiat, dolorum eligendi quam
            cupiditate excepturi mollitia maiores labore suscipit quas? Nulla,
            placeat. Voluptatem quaerat non architecto ab laudantium modi minima
            sunt esse temporibus sint culpa, recusandae aliquam numquam totam
            ratione voluptas quod exercitationem fuga. Possimus quis earum
            veniam quasi aliquam eligendi, placeat qui corporis!
          </p>
        </div>
        <div class="button">
          <a href="materials.php"><button class="button1">Download Materials</button></a>
        </div>
      </div>
      <div class="image1">
        <img src="../images/book.jpg" width="700" height="400" />
      </div>
    </div>
  </body>
</html>
