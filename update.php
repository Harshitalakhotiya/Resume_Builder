<?php
session_start();
 if($_SERVER['REQUEST_METHOD'] === "POST"){

    $name = $_POST['name'];
    
    $email = $_POST['email'];
    $mobile = $_POST['con'];
    $education = $_POST['qual'];
    $skills = $_POST['skill'];
    $project = $_POST['proj'];
    $workexp = $_POST['work'];
    $socialwork = $_POST['soc'];

    $conn = mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"resumesite");
    


    $s="UPDATE resume SET email='$email',contactno='$mobile',qualifications='$education',skils='$skills',projects='$project',workexp='$workexp',socialwork='$socialwork' WHERE name='$name'";
    
    $result=mysqli_query($conn,$s);

    if($result)
    {
        echo "Data updated";
    }
    else
    {
        echo "ERROR: Could not able to execute $s. " . mysqli_error($conn);
    }
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
