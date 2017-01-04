<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- All the files that are required -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/slogin.css">
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
<script src="js/slogin.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
</head>
<body>
<!-- Where all the magic happens -->
<!-- LOGIN FORM -->
<div class="jumbotron">
<div class="text-center" style="padding: 0px 0">
  <div class="logo" >Login</div>
  <!-- Main Form -->
  <div class="login-form-1" action="slogin.php">
    <form id="login-form" class="text-left" action="slogin.php" method="POST">
      <div class="login-form-main-message"></div>
      <div class="main-login-form">
        <div class="login-group">
          <div class="form-group">
            <label for="lg_username" class="sr-only">Roll Number</label>
            <input type="text" class="form-control" id="lg_username" name="roll" placeholder="Roll Number" required>
          </div>
          <div class="form-group">
            <label for="lg_password" class="sr-only">Password</label>
            <input type="password" class="form-control" id="lg_password" name="pass" placeholder="Password" required>
          </div>
          <div class="form-group login-group-checkbox">
            <input type="checkbox" id="lg_remember" name="lg_remember">
            <label for="lg_remember">remember</label>
          </div>
        </div>
        <button type="submit" class="login-button" name="login"><i class="fa fa-chevron-right"></i></button>
      </div>
      <div class="etc-login-form">
        <p>new user? <a href="#">create new account</a></p>
      </div>
    </form>
  </div>
  <!-- end:Main Form -->
</div>


<!-- REGISTRATION FORM -->
<div class="text-center" style="padding:0px 0">
  <div class="logo"><b>Register</b></div>
  <!-- Main Form -->
  <div class="login-form-1">
    <form id="register-form" class="text-left" action="slogin.php" method="POST" onsubmit="return validation()">
      <div class="login-form-main-message"></div>
      <div class="main-login-form">
        <div class="login-group">
          <div class="form-group">
          <div class="form-group">
            <label for="reg_fullname" class="sr-only">Full Name</label>
            <input type="text" class="form-control" id="reg_fullname" name="name" placeholder="Full name" required>
          </div>
            <label for="reg_username" class="sr-only">Roll Number</label>
            <input type="text" class="form-control" id="reg_username" name="rroll" placeholder="Roll Number" required>
          </div>

           <div class="form-group">
            <label for="reg_email" class="sr-only">Email</label>
            <input type="text" class="form-control" id="reg_email" name="email" placeholder="Email" required>
          </div>
          
          <div class="form-group">
            <label for="reg_password" class="sr-only">Password</label>
            <input type="password" class="form-control" id="reg_password" name="password" placeholder="Password" required>
          </div>
          <div class="form-group">
            <label for="reg_password_confirm" class="sr-only">Password Confirm</label>
            <input type="password" class="form-control" id="reg_password_confirm" name="cpassword" placeholder="Confirm password" required>
          </div>
          
          <div class="form-group login-group-checkbox">
            <input type="checkbox" class="" id="reg_agree" name="reg_agree">
            <label for="reg_agree">I agree with <a href="#">terms</a></label>
          </div>
        </div>
        <button type="submit" class="login-button" name="register"><i class="fa fa-chevron-right"></i></button>
      </div>
      <div class="etc-login-form">
        <p>already have an account? <a href="#">login here</a></p>
        <p><b><a href="index.php">Home</b></a></p>
      </div>
    </form>
  
  <!-- end:Main Form -->
</div>
</div>
</body>
</html>


<?php

mysql_connect("localhost","root","");
mysql_select_db("drdo");

if(isset($_POST['register'])){

$name=$_POST['name'];
$roll_no=$_POST['rroll'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];


/*if($name==''){
    echo "<script>alert('Please enter your Name!')</script>";exit();}

if($roll_no==''){
    echo "<script>alert('Please enter Roll number!')</script>";exit();}

if($email==''){
    echo "<script>alert('Please enter your email!')</script>";exit();}
  
if($password==''){
    echo "<script>alert('Please enter your  Password!')</script>";exit();}  

if($cpassword==''){
    echo "<script>alert('Please enter your confirm Password!')</script>";exit();}
*/
  


  
$check_roll = "select * from part1 where roll='$roll_no' OR email='$email'";                  //For Checking Identity Card exists or not

$run = mysql_query($check_roll);                                     
if(mysql_num_rows($run)>0){
echo "<script>alert('Identity Card : $roll_no or email : $email already exists!')</script>";exit();}



$query="insert into part1 (name,roll,email,pass,cpass) values            
('$name','$roll_no','$email','$password','$cpassword')";                          //For Storing the Data into Database

if(mysql_query($query)){
 echo "<script>alert('You have done!')</script>";}
}



if(isset($_POST['login'])){

$roll=$_POST['roll'];
$pass=$_POST['pass'];


if($roll==''){
    echo "<script>alert('Please enter your Roll Number!')</script>";exit();}

if($pass==''){
    echo "<script>alert('Please enter your Password!')</script>";exit();}  

                  //For Checking Identity Card exists or not

$check_roll = "select * from part1 where roll='$roll' AND pass='$pass'";
$run = mysql_query($check_roll);                                     
if(mysql_num_rows($run)>0){

$_SESSION['roll']=$roll;
setcookie('id',$roll);

echo "<script>window.open('form.php','_self')</script>";}

else{
echo "<script>alert('IC or Password Incorrect!')</script>";}

}

?>
