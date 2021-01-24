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
.delete{
  float: left;
}
.log{
  float: right;
}
</style>


<body>
<?php
session_start();
if (!isset($_SESSION['auser'])) {
  echo '<script language="javascript">';
echo 'alert("message successfully sent")';
echo '</script>';

header('location:admin.php');
 

  exit();
}

$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"resumesite");
error_reporting(0);
$s = "SELECT * FROM resume";

$result=mysqli_query($conn,$s);
?>


<center>
<h1>RESUMES</h1>
</center>

<table align="center" border="1px" style="width:1500px; line-height:30px;">
    <tr>
    
    <th>NAME</th>
    <th>CONTACT-NO</th>
    <th>EMAIL_ID</th>
    <th>EDUCATIONAL QUALIFICATION</th>
    <th>SKILLS</th>
    <th>PROJECTS</th>
    <th>WORK EXPERIENCE</th>
    <th>SOCIAL WORK</th>
    </tr>
    <?php
    while($rows=mysqli_fetch_assoc($result))
    {
      ?>
      <tr>
      <td><?php echo $rows['name']; ?></td>
      <td><?php echo $rows['contactno']; ?></td>
      <td><?php echo $rows['email']; ?></td>
      <td><?php echo $rows['qualifications']; ?></td>
      <td><?php echo $rows['skils']; ?></td>
      <td><?php echo $rows['projects']; ?></td>
      <td><?php echo $rows['workexp']; ?></td>
      <td><?php echo $rows['socialwork']; ?></td>
      <tr>
      <?php
    }
    ?>

</table>
<br>
<br>
<div class="log">
<a href="adlogout.php"><button type="button" class="btn btn-danger">Log out</button></a>
</div>
<br>
<br>
<?php
   $sql = "SELECT * FROM resume";

   $res=mysqli_query($conn,$sql);
?>
<form action="addelete.php" method="POST">
<div class="delete">
<div class="dropdown">
  <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">DELETE RESUMES
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
        
<?php
while($r=mysqli_fetch_assoc($res))
{
     session_start();
     $_SESSION['name']=$r['name'];
    ?>

  <li><?php
  echo $r['name'] ?></li>
  <input type="submit" name="submit">
  <?php
}
?>
</ul>
</div>
</div>
</form>

</body>
</html>







