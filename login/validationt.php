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
      
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from logint where email = '$email' and password = '$password';";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        $user=mysqli_fetch_assoc($result);
           
       if($count == 1){
        $_SESSION['username']=$row['username'];
        $_SESSION['email']=$row['email'];
        $_SESSION['password']=$row['password'];  
        
        header("Location: ../tutor/tutorhome.php");
        // header("Location: ../tutor/dashboard.php");

       }
                    
        else{
            // echo '<script type="text/javascript">
            //         alert("Invalid Email or Password. User does not Exist");
            // window.location = "index.php";
            // </script>';   
            echo '<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script type="text/javascript">
            
                $(document).ready(function() {
                    swal({
                        title: "User does not exist ",
                        text: "Please register",
                        icon: "warning",
                        button: "Ok",
                        timer: 5000
                    }).then(function(){
                        window.location="tutorin.php";
                    });
                });
            </script>';
            
           
        }
        
?>