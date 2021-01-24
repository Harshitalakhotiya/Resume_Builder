<?php
$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['mail'];
$number=$_POST['number'];

        $servername = "localhost";
        
        $dbname = "resumesite";

        $conn = mysqli_connect($servername, 'root', '', $dbname);

        if(isset($_POST['isAdmin'])){
			$isAdmin = 1;
		}
		else{
			$isAdmin = 0;
		}

        if($isAdmin)
        {
            
        $sql = "INSERT INTO admin
        VALUES ('$name','$password','$email','$number')";
       if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        


        }
        
        else
        {
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "INSERT INTO user_registration
        VALUES ('$name','$password','$email','$number')";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        }

        mysqli_close($conn);
    
    ?> 
    <!DOCTYPE html>
    <html>
    <head>
        <title></title>
    </head>
    <body>
        <button ><a href="login.php">Go back</a></button>
    </body>
    </html>

