<?php

    session_start();
       

   


    $name= $_SESSION['user'];
       
        
    $conn = mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"resumesite");

        
      
    $s = " DELETE FROM resume WHERE name = '$name'  ";
      
    $result=mysqli_query($conn,$s);

        

    
       if($result)
       {
           echo "data deleted successfully";  
       
            
           

  
        }
           
           
           else{

            
            echo "ERROR: Could not able to execute $s. " . mysqli_error($conn);
        }
           
        
        
    
  ?>
  <!DOCTYPE html>
    <html>
    <head>
        <title></title>
    </head>
    <body>
        <button ><a href="resume.php">Go back</a></button>
    </body>
    </html>
