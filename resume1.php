<!DOCTYPE HTML>
<html>  
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
body{
    background-image: url("https://tse1.mm.bing.net/th?id=OIP.PuCYSDOpkTIhXMhgE9NtfgAAAA&pid=Api&P=0&w=327&h=186");
    background-size: cover;
    background-position: centre;
}
div.relative {
  position: relative;
  
  top: 100px;
  
}
</style>
<?php

?>

<body>
<div class="relative">
<center>
<h1>
<?php
   session_start();
   if (!isset($_SESSION['user'])) {
    header('location:login.php');
    exit();
  }
  
 
   echo "Welcome " . $_SESSION['user']."<br>";

 ?>
  </h1>
  </center>
<br>
<br>
<br>

<center>
<h4 >Do you want to go to your Resume?</h4>
</center>
<center>
<a href="resume.php"><button type="button" class="btn btn-success">Resume</button></a>
</center>
<br>
<br>
<br>
<center>
<h4 >Want to Log Out?</h4>
</center>
<center>
<a href="logout.php"><button type="button" class="btn btn-danger">Log out</button></a>
</center>
}
</div>
</body>
</html>