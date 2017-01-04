<?php 
session_start();                         //session 
if(!$_SESSION['roll']){                    //session
header("location: slogin.php");           //session
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="wizard_css/form.css">
  <script src="js/slogin.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="wizard_js/form.js"></script>

</head>

<body>   
<div class="container">
    <div class="row">
      <section>
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-home"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

            <form id="form" action="form.php" method="POST" enctype="multipart/form-data">
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <div class="step1">
                          
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Address</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Address" name="address" required>
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Current City</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="City" name="city" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Mobile Number</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Mobile number" name="mob" required>
                            </div>

                            <div class="col-md-6" >
                            <label for="exampleInputEmail1">Photo</label>
                               <input name="img" type="file" class="form-control"/>
                            </div>

                            
                            <div class="col-md-6">
                            <label for="exampleInputEmail1">Date of Birth</label>
                                    <div class="row">
                                        
                                 <div class="col-md-6">
                                 <input type="date" class="form-control" id="exampleInputDOB1" placeholder="Date of Birth" name="dob"  required>
                                 </div>


                                    </div>
                                </div>

                              <div class="col-md-6">
                            <label for="exampleInputEmail1">Gender</label>
                                <div class="row">
                                    <div class="col-md-8 col-xs-9">
                                                              
                                  <input type="radio" name="gender" value="Female" >Female
                                  <input type="radio" name="gender" value="Male">Male
                                <br><br>
                                </div>
                                </div>

                            </div>

   
                        </div>
                        </div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                        </ul>
                    </div>

                    <div class="tab-pane" role="tabpanel" id="step2">
                        <div class="step2">
                            <div class="step_21">
                                <div class="row">
                                
                                <div class="row mar_ned">
                                <div class="col-md-4 col-xs-3">
                                    <p align="right"><stong>College</stong></p>
                                </div>
                                <div class="col-md-8 col-xs-9">
                                    <input type="text" name="college" id="specialization" placeholder="College" class="dropselectsec" autocomplete="off">
                                </div>
                            </div>
                             
                            <div class="row mar_ned">
                                <div class="col-md-4 col-xs-3">
                                    <p align="right"><stong>Degree</stong></p>
                                </div>
                                <div class="col-md-8 col-xs-9">
                                    <select name="degree" id="highest_qualification" class="dropselectsec">
                                        <option value=""> Degree</option>
                                        <option value="Ph.D">Ph.D</option>
                                        <option value="Masters Degree">Masters Degree</option>
                                        <option value="PG Diploma">PG Diploma</option>
                                        <option value="Bachelors Degree">Bachelors Degree</option>
                                        <option value="Diploma">Diploma</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mar_ned">
                                <div class="col-md-4 col-xs-3">
                                    <p align="right"><stong>Stream</stong></p>
                                </div>
                                <div class="col-md-8 col-xs-9">
                                    <input type="text" name="stream" id="specialization" placeholder="Stream" class="dropselectsec" autocomplete="off">
                                </div>
                            </div>
                          

                               <div class="row mar_ned">
                                <div class="col-md-4 col-xs-3">
                                    <p align="right"><stong>Start Year</stong></p>
                                </div>
                                <div class="col-md-8 col-xs-9">
                                    <select name="syear" id="year_of_passedout" class="birthdrop">
                                        <option value="">Year</option>
                                        <option value="2006">2006</option>
                                        <option value="2007">2007</option>
                                        <option value="2008">2008</option>
                                        <option value="2009">2009</option>
                                        <option value="2010">2010</option>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mar_ned">
                                <div class="col-md-4 col-xs-3">
                                    <p align="right"><stong>End Year</stong></p>
                                </div>
                                <div class="col-md-8 col-xs-9">
                                    <div class="row">
                                        <div class="col-md-6 col-xs-6 wdth">
                                            <select name="eyear" id="visa_status" class="dropselectsec1">
                                                <option value="">Year</option>
                                        <option value="2015">2016</option>
                                        <option value="2015">2017</option>
                                        <option value="2015">2018</option>
                                        <option value="2015">2019</option>
                                        <option value="2015">2020</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 col-xs-6 wdth">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mar_ned">
                                <div class="col-md-4 col-xs-3">
                                    <p align="right"><stong>Marks(%)</stong></p>
                                </div>
                                <div class="col-md-8 col-xs-9">
                                    <input type="text" name="marks" id="specialization" placeholder="Percentage of marks" class="dropselectsec" autocomplete="off">
                                </div>
                            </div>
                                </div>
                            </div>
                            
                        </div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                        </ul>
                    </div>




            <div class="tab-pane" role="tabpanel" id="step3">
                <div class="step33">
                    <h5><strong>Profile</strong></h5>
                    <hr>
                    <div class="step1">
                          <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Profile</label>
                                <input type="text" class="form-control"  id="exampleInputEmail1" placeholder="Profile" name="profile">
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Organization</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Organization" name="org">
                            </div>
                        </div>

                        
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Location</label>
                                <select type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="location">
                                    <option value="">Location</option>
                                        <option value="Delhi">Delhi</option>
                                        <option value="Chandigar">Chandighar</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">link</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="link" name="link">
                            </div>
                        </div>

                         <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Write</label>
                                <textarea type="number" class="form-control" id="textarea"  name="brief">
                                </textarea>
                            </div>

                            <div class="col-md-3">
                                <label for="exampleInputEmail1">Start</label>
                                <div class="row">
                                        
                                     <div class="col-md-8">
                                      <input type="date" class="form-control" id="exampleInputDOB1" placeholder="start" name="sdate" >
                                     </div>
                                </div>
                            </div>
          
                              <div class="col-md-3">
                                    <label for="exampleInputEmail1">End</label>
                                  <div class="row">
                                        
                                     <div class="col-md-8">
                                      <input type="date" class="form-control" id="exampleInputDOB1" placeholder="End" name="edate" >
                                     </div>
                                 </div>
                              </div>
                       </div>

                          <div class="row">
                            <div class="col-md-3">                               
                                <div id="dynamicInput">languages known
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="link" name="myInputs[]">
                                
                                </div>
                                <input type="button" value="More?" onClick="addInput('dynamicInput');" class="form-control" id="exampleInputEmail1" placeholder="language" name="add">
                            </div>
                          </div>

                                   
                   </div>
                       </div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="button" class="btn btn-default next-step">Skip</button></li>
                            <li><button type="submit" class="btn btn-primary btn-info-full next-step" name="part1">Save and continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="complete">
                        <div class="step44">
                            <h5>Completed</h5>                        
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </section>
   </div>
</div>
<div class="container">
<h4><a href="pdfresume.php">Resume</a></h4>
<a href="#"><h4 align='right'>User:<?php echo $roll=$_SESSION['roll']; ?><br></a><a href='logout.php'>Logout</h4></a></div>
</body>
</html>


<?php

//$gender = "";
mysql_connect("localhost","root","");
mysql_select_db("drdo");
if(isset($_POST['part1'])){


$address=$_POST['address'];
$city=$_POST['city'];
$mob=$_POST['mob'];
//$img=$_POST['img'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
//$newroll=$_SESSION['roll'];
$college=$_POST['college'];
$degree=$_POST['degree'];
$stream=$_POST['stream'];
$syear=$_POST['syear'];
$eyear=$_POST['eyear'];
$marks=$_POST['marks'];
$profile=$_POST['profile'];
$org=$_POST['org'];
$location=$_POST['location'];
$link=$_POST['link'];
$brief=$_POST['brief'];
$sdate=$_POST['sdate'];
$edate=$_POST['edate'];
for($i=0; $i< count($_POST['myInputs']); $i=$i+1 ){

$lang.=$_POST['myInputs'][$i].",";

}


        $image_name = $_FILES['img']['name'];
        $image_type = $_FILES['img']['type'];
        $image_size = $_FILES['img']['size'];
        $image_tmp_name = $_FILES['img']['tmp_name'];

if($image_name!=""){
    move_uploaded_file($image_tmp_name,"photos/$image_name");}
        


/*
if($name==''){
    echo "<script>alert('Please enter your Name')</script>";exit();}
if($roll==''){
    echo "<script>alert('Please enter your Roll no.')</script>";exit();}
if($email==''){
    echo "<script>alert('Please enter your email')</script>";exit();}
if($city==''){
    echo "<script>alert('Please enter your city')</script>";exit();}
if($mob==''){
    echo "<script>alert('Please enter your mobil')</script>";exit();}
if($img==''){
    echo "<script>alert('Please enter your img')</script>";exit();}

*/

//$id=(int)$_COOKIE['id'];
//var_dump($id);

/*$query="insert into part1 (gender,address,city,mob,dob,college,degree,stream,syear,eyear,marks,profile,org,location,link,brief,sdate,edate,lang) values            
('$gender','$address','$city','$mob','$dob','$college','$degree','$stream','$syear','$eyear','$marks','$profile','$org','$location','$link','$brief','$sdate','$edate','$lang')";                          //For Storing the Data into Database
*/
$query="UPDATE part1 SET address='$address',city ='$city',mob='$mob',dob='$dob',college='$college',degree='$degree',stream='$stream',syear='$syear',eyear='$eyear',marks='$marks',profile='$profile',org='$org',location='$location',link='$link',brief='$brief',sdate='$sdate',edate='$edate',lang='$lang'  WHERE roll = '$roll' ";

if(mysql_query($query)){
 echo "<script>alert('You have done!')</script>";
 echo "<script>window.open('resume.php','_self')</script>";
}
}


?>