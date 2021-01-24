<html>  
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>

.resume-box{
    width: 1000px;
    float: none;
    margin:150px auto;
   background-image:url("https://tse2.mm.bing.net/th?id=OIP.ik0fifbjRqmJ4Uaxe3ojmwHaEo&pid=Api&P=0&w=284&h=178");
   opacity: 1.0;
}
.box{
    left: 20px;
    top: 20 px;
}
.edit-button{
    width: 10%;
    
}
.delete-button{
    
    width: 10%;

}
</style>
<?php
session_start();
?>
<body>
<div class="resume-box">
<div class="box">
<h3>
<center>
<?php
 if (!isset($_SESSION['user'])) {
    header('location:login.php');
    exit();
  }
$name= $_SESSION['user'];
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"resumesite");
error_reporting(0);
$s = "SELECT * FROM resume WHERE name = '$name'";

$result=mysqli_query($conn,$s);
        
$num=mysqli_num_rows($result);

$data=mysqli_fetch_assoc($result);




if($num!=0)
{
    echo "<br><br><br>";
echo "Name: " . $_SESSION['user']."<br><br>";

echo "Contact details:";
echo "<br>";
echo "Mobile-no: ".$data['contactno']."<br>";
echo "Email-Id: ".$data['email']."<br><br>";

echo "Educational qualification: "."<br>";

$qual=explode(',', $data['qualifications']);//what will do here
foreach($qual as $out) {

    echo $out."<br>";
  
}


echo "<br>";


echo "Skills: "."<br>";

    $skill=explode(',', $data['skils']);//what will do here
    foreach($skill as $out) {
       echo $out."<br>";
    }
 
    echo "<br>";


echo "Projects: ","<br>";
$proj=explode(',', $data['projects']);
    foreach($proj as $out) {
       echo $out."<br>";
    }
    echo "<br>";

echo "Work Experience: "."<br>";

$work=explode(',', $data['workexp']);
    foreach($work as $out) {
       echo $out."<br>";
    }
    echo "<br>";

echo "Social Work: "."<br>";

    $soc=explode(',', $data['socialwork']);
        foreach($soc as $out) {
           echo $out."<br>";
        }
        echo "<br>";
        ?>
         <center>
<a  href="delete.php" class="btn btn-danger delete-button" role="button">DELETE</a>

<a  href="edit.php" class="btn btn-success edit-button" role="button">EDIT</a>
 
    

      
<a href="resume1.php"><input type="submit" class="btn btn-primary edit-button" id="button" value="GO BACK" ></a>
    </center>
    <?php
    }

        else
      {
          echo "<br>";
        echo "No resume to display";
         echo "<br><br>";
         ?>
<center>
<a href="resume1.php"><input type="submit" class="btn btn-primary edit-button" id="button" value="GO BACK" ></a>
</center>
<?php

          }
        ?>
       
    
    <br>
    
    
    



</h3>

</div>
</div>
</body>
</html>