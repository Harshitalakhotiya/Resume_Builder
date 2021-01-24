<!DOCTYPE HTML>
<html>  
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
body{
    background-image: url("https://tse2.mm.bing.net/th?id=OIP.ik0fifbjRqmJ4Uaxe3ojmwHaEo&pid=Api&P=0&w=284&h=178");
    background-size: cover;
    background-position: centre;
}
h2{
 color: solid black;
 font-weight: bold;
 text-align: center;

}
.login-box{
    width: 700px;
    float: none;
    margin:150px auto;
    background: rgba(211,211,211,0.5)
}
.login-box:hover{
}
button{
    border-radius: 10px;
    width: 50%;
    float: right;
    margin:8px auto;
    display: in-line block;
    
}
.login{
    padding: 30px;
}
.login-button{
    background-color: blue;
    width: 45%;
    float:left;
}
.signup-button{
    background-color: red;
    width: 45%;
    

}
h5{
    color: green;
    text-align: center;
}
.input{
    font-size: 20px;
}
.error {color: red;}
</style>
</head>
<?php
$nameErr=$mailErr=$phoneErr=$passwordErr="";
$no_of_errors=0;
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  if (empty($_POST["name"]))
  {
    $no_of_errors += 1;
    $nameErr = "Please enter Name";
  }
  else
  {
    $name = $_POST["name"];
    if (!preg_match("/^[a-zA-Z ]*$/",$name))
    { 
      $no_of_errors += 1;
      $nameErr = "*Only letters and white space allowed";
    }
  }
  if (empty($_POST['mail'])) {
    $mailErr = "Email is required";
  } else {
    $email = $_POST['mail'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
      $no_of_errors += 1;
      $mailErr = "*Invalid email format";
    }
  }



$phone =$_POST['number'];

if (validate_phone_number($phone) == true) {
    $phoneErr= " ";
 } else {
  $no_of_errors += 1;
   $phoneErr="*Invalid phone number";
 }

 $password= $_POST['password'];
 $uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);

if(!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
  $passwordErr="*Password is not strong enough";
}
 


 $servername = "localhost";
        
$dbname = "resumesite";

$conn = mysqli_connect($servername, 'root', '', $dbname);

if($no_of_errors==0){
        
    $sql = "INSERT INTO user_registration
    VALUES ('$name','$password','$email','$phone')";
    $s="SELECT uname from user_registration  where uname='$name'";
    $result=mysqli_query($conn,$s);
    $num=mysqli_num_rows($result);
    if($num==0)
    {
   if (mysqli_query($conn, $sql)) {
    echo '<script language="javascript">';
    echo 'alert("User Account created successfully")';
    echo '</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    }
    else{
      echo '<script language="javascript">';
    echo 'alert("User name is already taken")';
    echo '</script>';
    }
  }


    

    mysqli_close($conn);

  }


  



function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  function validate_phone_number($phone)
{
     
     $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
     
     $phone_to_check = str_replace("-", "", $filtered_phone_number);
     
     if (strlen($phone_to_check) < 10 || strlen($phone_to_check) > 10) {
        return false;
     } else {
       return true;
     }
}


?>




<body>
 

        
   <div class="container">
   <div class="login-box">
   <div class="row">
   <div class="col-md-12 login">
   <h2>REGISTER</h2>
   <br>
   <br>
   <form class="form-vertical" action="register.php" method="POST"> 
   
    <div class="form-group">
    <label class="input" >NAME</label>
   
        <input type="text" name="name" class="form-control" placeholder="Enter your name" required>  
        <span class="error"><?php echo $nameErr;?></span>
        
    </div>
    
    <div class="form-group">
    <label class="input" >EMAIL-ID</label>
    
    <input type="text" name="mail" class="form-control" placeholder="for eg harshita@gmail.com" required>   
    <span class="error"><?php echo $mailErr;?></span>
    </div>
    <div class="form-group">
    <label class="input" >MOBILE-NO</label>
    
    <input type="text" name="number" class="form-control" placeholder="Enter 10 digit mobile no" required>   
    <span class="error"><?php echo $phoneErr;?></span>
    </div>

    <div class="form-group">
    <label class="input" >PASSWORD</label>
    
    <input type="password" name="password" class="form-control" placeholder="Enter a strong password" required>   
    <span class="error"><?php echo $passwordErr;?></span>
    </div>

   
    
    <br>

    <div style="text-align: center">
    
    
    <p>
            <input type="submit" class="btn btn-primary signup-button" id="button" name="signup" />
        </p>

        <a href="login.php" class="btn btn-success" role="button">GO TO LOGIN</a>
    
   
       
    
   </form>
   </div>

   <br>

   
   </div>
   </div>
   </div>

</body>
</html>

