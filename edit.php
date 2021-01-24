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
.resume-box{
    width: 700px;
    float: none;
    margin:150px auto;
    background: rgba(211,211,211,0.5)
}
</style>

<?php
session_start();
$user=$_SESSION['user'];
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"resumesite");
error_reporting(0);
$s = "SELECT * FROM resume WHERE name = '$user'";

$result=mysqli_query($conn,$s);
        
$num=mysqli_num_rows($result);

$data=mysqli_fetch_assoc($result);


?>
<body>
<div class="resume-box">
<form class="form-vertical" action="update.php" method="POST"> 
   
   <div class="form-group">
   <label class="input" >NAME</label>
  
       <input type="text" name="name" class="form-control" value="<?php echo $user; ?>" required>    
       
   </div>

   <div class="form-group">
   <label class="input" >EMAIL-ID</label>
  
       <input type="text" name="email" class="form-control" value="<?php echo $data['email']; ?>" required>    
       
   </div>

   <div class="form-group">
   <label class="input" >MOBILE-NO</label>
  
       <input type="text" name="con" class="form-control" value="<?php echo $data['contactno']; ?>" required>    
       
   </div>

   <div class="form-group">
   <label class="input" >EDUCATION QUALIFICATIONS</label>
       
       <textarea type="textarea" name="qual" id="inputlg" class="form-control"  required><?php echo $data['qualifications'];?></textarea>   
       
   </div>

   <div class="form-group">
   <label class="input" >SKILLS</label>
       
       <textarea type="textarea" name="skill" id="inputlg" class="form-control"  required><?php echo $data['skils'];?></textarea>   
       
   </div>

   <div class="form-group">
   <label class="input" >PROJECTS</label>
       
       <textarea type="textarea" name="proj" id="inputlg" class="form-control"  required><?php echo $data['projects'];?></textarea>   
       
   </div>

   <div class="form-group">
   <label class="input" >WORK EXPERIENCE</label>
       
       <textarea type="textarea" name="work" id="inputlg" class="form-control"  required><?php echo $data['workexp'];?></textarea>   
       
   </div>

   <div class="form-group">
   <label class="input" >SOCIAL WORK</label>
       
       <textarea type="textarea" name="soc" id="inputlg" class="form-control"  required><?php echo $data['socialwork'];?></textarea>   
       
   </div>
   <center>
   <input type="submit" class="btn btn-primary login-button" id="button" value="SUBMIT" >
   </center>
   </form>
    
   </div>
   
</body>