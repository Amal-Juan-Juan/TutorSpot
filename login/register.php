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
    $email = $_POST['email'];  
    $password = $_POST['password'];  
    $username = $_POST['name'];
      
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $password = stripcslashes($password); 
        $username = stripcslashes($username); 
        $email = mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password);  
        $username = mysqli_real_escape_string($con, $username);
      

        $user_check_query = "SELECT * FROM login WHERE email='$email' or username='$username'";
        $result = mysqli_query($con, $user_check_query);
        $user = mysqli_fetch_assoc($result);
        
        if ($user) { // if user exists
          if ($user['username'] === $username && $user['email'] === $email) {
            // echo '<script type="text/javascript">
            //         alert("User already exits. Please Sign-In");
            // window.location = "index.php";
            // </script>'; 
            echo '<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
    
        $(document).ready(function() {
            swal({
                title: "Login failed",
                text: "User with given email id already exists",
                icon: "warning",
                button: "Ok",
                timer: 5000
            }).then(function(){
                window.location="index.php";
            });
        });
    </script>';
          }     
          
        }

        else{
            $query = "INSERT INTO login (email, username, password) 
  			  VALUES('$email', '$username', '$password')";
  	    mysqli_query($con, $query);
  	    $_SESSION['username'] = $username;
        $_SESSION['email']=$email;
        $_SESSION['password']=$password;  

        // header("Location: ../student/home.php");
        echo '<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
    
        $(document).ready(function() {
            swal({
                title: "Registration success",
                text: "Registration success.Click OK to login",
                icon: "success",
                button: "Ok",
                timer: 5000
            }).then(function(){
                window.location="index.php";
            });
        });
    </script>';
        }

                    
        
        
?>