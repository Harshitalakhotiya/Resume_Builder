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
    float:right;

}
h5{
    color: green;
    text-align: center;
}
.input{
    font-size: 20px;
}

</style>
</head>

<body>
 

        
   <div class="container">
   <div class="login-box">
   <div class="row">
   <div class="col-md-12 login">
   <h2>LOGIN PAGE</h2>
   <br>
   <br>
   <form class="form-vertical" action="process.php" method="POST"> 
   
    <div class="form-group">
    <label class="input" >NAME</label>
   
        <input type="text" name="user" class="form-control" placeholder="Enter your name" required>    
        
    </div>
    
    <div class="form-group">
    <label class="input" >PASSWORD</label>
    
    <input type="password" name="password" class="form-control" placeholder="Enter Password" required>   
    
    </div>
    
    <br>
    
    <a href="admin.php" class="btn btn-primary signup-button" role="button">ADMIN LOGIN</a>
 
    

      
            <input name="login" type="submit" class="btn btn-primary login-button" id="button" value="LOGIN" >

            <br>
            <br>
            <br>
            <center>

            <a href="register.php" class="btn btn-success" role="button">REGISTER HERE</a>
    

    </center>
    
  
   </form>
   </div>

   <br>

   
   </div>
   </div>
   </div>

</body>
</html>

