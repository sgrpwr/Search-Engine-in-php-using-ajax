<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/first.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
<!-- Start login modal window -->
<div aria-hidden="false" role="dialog" tabindex="-1" id="login-form" class="modal leread-modal fade in">
    <div class="modal-dialog">
      <!-- Start login section -->
      <div id="login-content" class="modal-content">
        <div class="modal-header">
          <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title"><i class="fa fa-unlock-alt"></i>Login</h4>
        </div>
      <div class="modal-body">
       <form action="index.php" method="post">
            <div class="form-group">
              <input type="text" placeholder="User name" class="form-control" name="ic" required>
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control" name="pass" required>
            </div>
             <div class="loginbox">
              <label><input type="checkbox"><span>Remember me</span></label>
              <button class="btn signin-btn" type="submit" name="login">SIGN IN</button>
            </div>                    
        </form>
      </div>
      </div>
    </div>
  </div>
  <!-- End login modal window -->
<div class="jumbotron">
  <div class="container text-center">
            <h1>The student's search engine</h1>
        <div class="container">
              <h2>Welcome to DRDO</h2>
              <img src="img/logo.png" alt="logo" style="width:200px;height:200px;" cx="50" cy="50" r="40"><br><br>
              <a href="slogin.php"><button href="#" class="btn btn-info btn-lg active btn-lg active custom">Student</button></a>
              <a class="login modal-form" data-target="#login-form" data-toggle="modal" href="#">
              <button href="#" class="btn btn-info btn-lg active custom">Admin</button></a>
        </div>   
            <div class="row">
                <div class="col-md-7">
                     <div class="top-bg"></div>
                </div>
            </div>
  </div> 
</div>   
</body>
</html>



<?php

mysql_connect("localhost","root","");
mysql_select_db("drdo");

if(isset($_POST['login'])){

$ic=$_POST['ic'];
$pass=$_POST['pass'];


if($ic==''){
    echo "<script>alert('Please enter your ic!')</script>";exit();}

if($pass==''){
    echo "<script>alert('Please enter your Password!')</script>";exit();}  

                  //For Checking Identity Card exists or not

$check_roll = "select * from admin where ic='$ic' AND password='$pass'";
$run = mysql_query($check_roll);                                     
if(mysql_num_rows($run)>0){

$_SESSION['ic']=$ic;
setcookie('id',$ic);

echo "<script>window.open('adminsearch.php','_self')</script>";}

else{
echo "<script>alert('IC or Password Incorrect!')</script>";}

}

?>