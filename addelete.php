<?php
session_start();
$name=$_SESSION['name'];



       
        
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"resumesite");

    
  
$s = " DELETE FROM resume WHERE name = '$name'  ";
  
$result=mysqli_query($conn,$s);

    


   if($result)
   {
       echo "data of ".$name." deleted successfully";  
   
        
       


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
    <button ><a href="adminpage.php">Go back</a></button>
</body>
</html>

