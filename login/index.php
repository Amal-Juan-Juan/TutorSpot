<!DOCTYPE html>
<?php session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TutorSpot</title>
    <link rel="stylesheet" href="./style1.css">
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <table>
                <tr>
                    <td><img src="../images/icons8-telemedicine-50.png" alt="Logo"></td>
                    <td>TutorSpot</td>
                </tr>
            </table>
        </div>
            <ul class="links">
                <li><a href="index.html">HOME</a></li>
                <li><a href="index.html">GET COURSES</a></li>
                <li><a href="index.html">POST CONTENT</a></li>
                <li><a href="../video_conf/index.html" target="_blank">MEETING ROOM</a></li>
<<<<<<< HEAD
                <li><a href="../NGO/register.html" target="_blank">NGO</a></li>
=======
                <li><a href="../NGO/register.html">NGO</a></li>
                <li><a href="../Quiz/index.php" target="_blank">Quiz for Student</a></li>
                <li><a href="../Quiz/adminpanel/admin/index.php" target="_blank">Quiz by Tutor</a></li>
>>>>>>> 55fe710a220203015449090e3cc8612c56bd2db9
                <li><a href="index.html">ABOUT US</a></li>

            </ul>
    </div>
    <div class="container">
        <div class="left">
            <div class="info">
            <p id="fline">Grow your <span id="word">Skills</span> to</p>

            <p id="sline">Advance your career</p>
            </div>

            <div class="reg" id="reg">
                <div class="form-container sign-up-container">
                    <form action="register.php" name="register" method="post">
                        <h1>Create Account</h1>
                        <input type="email" placeholder="Email" required name="email"/>
                        <input type="text" placeholder="Username" required name="name"/>
                        <input type="password" placeholder="Password" name="password" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 3}$"/>
                        <button>Sign Up</button>
                    </form>
                </div>
                <div class="form-container sign-in-container">
                    <form action="validation.php" name="login" method="post">
                        <h1>Sign in</h1>
                        <input type="email" placeholder="Email" required name="email"/>
                        <input type="password" placeholder="Password" name="password" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 3}$"/>
                        <a href="../login/tutorin.php" id="tt">Sign in as Tutor</a>
                        <a href="../login/index.php" id="fp">Forgot your password?</a>
                        <button>Sign In</button>
                    </form>
                </div>
                <div class="overlay-container">
                    <div class="overlay">
                        <div class="overlay-panel overlay-left">
                            <h1>Welcome Back!</h1>
                            <p>To keep connected with us please login with your personal info</p>
                            <button class="ghost" id="signIn">Sign In</button>
                        </div>
                        <div class="overlay-panel overlay-right">
                            <h1>Hello, Friend!</h1>
                            <p>Enter your personal details and start journey with us</p>
                            <button class="ghost" id="signUp">Sign Up</button>
                        </div>
                    </div>
                </div>
            <!-- newly added ends -->
            </div>
        </div>
        <div class="right">
            <!-- <h2>Picture here</h2> -->
            <button id="coursebtn">Start A Course</button>
            <img id="wbimg" src="../images/webcam.png" alt="">
        </div>
    </div>
    
</div>
</body>
<script src="script.js"></script>
</html>
