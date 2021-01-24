
<?php

    session_start();
       

   
    if($_SERVER['REQUEST_METHOD'] === "POST"){

        $username = $_POST['auser'];
        $_SESSION['auser']=$_POST['auser'];
        
        
       
        $password = $_POST['pass'];
        
        $conn = mysqli_connect("localhost","root","");
        mysqli_select_db($conn,"resumesite");

        
      
        $s = "SELECT * FROM admin WHERE aname = '$username' AND pass = '$password'";

        $result=mysqli_query($conn,$s);
        
        $num=mysqli_num_rows($result);

        if($num==1)
        {   
            
          
            header('location:adminpage.php');
        }
        else{
            
            echo "Incorrect Username or Password";
        }
    }
  ?>
