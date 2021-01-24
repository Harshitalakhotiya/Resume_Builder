*
<?php

    session_start();
       

   
    if($_SERVER['REQUEST_METHOD'] === "POST"){

        $username = $_POST['user'];
        
        $_SESSION['user']=$username;
       
        $password = $_POST['password'];
        
        $conn = mysqli_connect("localhost","root","");
        mysqli_select_db($conn,"resumesite");

        
      
        $s = "SELECT * FROM user_registration WHERE uname = '$username' AND password = '$password'";

        $result=mysqli_query($conn,$s);
        
        $num=mysqli_num_rows($result);

        if($num==1)
        {   
            
            $_SESSION['login']=1;
            header('location:resume1.php');
        }
        else{
            
            $_SESSION['login']=0;
            echo "Incorrect Username or Password";
        }
    }
  ?>
