<?php
    session_start();
    echo "You are now logged out";
    echo "<br>";
    session_destroy();

?>
    

    
    <html>
  <head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<body>
</body>
<a href="admin.php"><input type="submit" class="btn btn-success edit-button" id="button" value="GO TO LOGIN" ></a>
  </html>
  
  