<?php

mysql_connect("localhost","root","");
mysql_select_db("drdo");


if (isset($_GET['id'])) {
    # code...
    $roll=$_GET['id'];
}else{
    echo "No data received";
}

//echo $roll=$_SESSION['roll'];

$q= "select * from part1 where roll='$roll'";
$t= mysql_query($q);

while($row=mysql_fetch_array($t)){
$name = $row[1];
$roll = $row[2];
$email = $row[3];
$city = $row[4];
$mob = $row[5];
//$image = $row[6];
$dob = $row[6];
$add = $row[7];
$college = $row[8];
$degree = $row[9];
$stream = $row[10];
$syear = $row[11];
$eyear = $row[12];
$marks = $row[13];
$profile = $row[14];
$org = $row[15];
$location = $row[16];
$link = $row[17];
$brief = $row[18];
$sdate = $row[19];
$edate = $row[20];
$lang = $row[21];
$gender = $row[22];
$pass = $row[23];
$cpass = $row[24];
}

?>



<!DOCTYPE html>
<html>
<head>
    <title>Student's resume</title>
    <h3><a href="pdf-admin.php">Get PDF!</a></h3>            
    <style>
        *
        {
            margin:0;
            padding:0;
            font-family:Arial;
            font-size:10pt;
            color:#000;
        }
        body
        {
            width:100%;
            font-family:Arial;
            font-size:10pt;
            margin:0;
            padding:0;
        }
         
        p
        {
            margin:0;
            padding:0;
        }
         
        #wrapper
        {
            width:180mm;
            margin:0 15mm;
        }
         
        .page
        {
            height:297mm;
            width:210mm;
            page-break-after:always;
        }
 
        table
        {
            border-left: 1px solid #ccc;
            border-top: 1px solid #ccc;
             
            border-spacing:0;
            border-collapse: collapse; 
             
        }
         
        table td 
        {
            border-right: 1px solid #ccc;
            border-bottom: 1px solid #ccc;
            padding: 2mm;
        }
         
        table.heading
        {
            height:50mm;
        }
         
        h1.heading
        {
            font-size:14pt;
            color:#000;
            font-weight:normal;
        }
         
        h2.heading
        {
            font-size:9pt;
            color:#000;
            font-weight:normal;
        }
         
        hr
        {
            color:#ccc;
            background:#ccc;
        }
         
        #invoice_body
        {
            height: 28mm;
        }
         
        #invoice_body , #invoice_total
        {   
            width:100%;
        }
        #invoice_body table , #invoice_total table
        {
            width:100%;
            border-left: 1px solid #ccc;
            border-top: 1px solid #ccc;
     
            border-spacing:0;
            border-collapse: collapse; 
             
            margin-top:5mm;
        }
         
        #invoice_body table td , #invoice_total table td
        {
            text-align:center;
            font-size:9pt;
            border-right: 1px solid #ccc;
            border-bottom: 1px solid #ccc;
            padding:2mm 0;
        }
         
        #invoice_body table td.mono  , #invoice_total table td.mono
        {
            font-family:monospace;
            text-align:right;
            padding-right:3mm;
            font-size:10pt;
        }
         
        #footer
        {   
            width:180mm;
            margin:0 15mm;
            padding-bottom:3mm;
        }
        #footer table
        {
            width:100%;
            border-left: 1px solid #ccc;
            border-top: 1px solid #ccc;
             
            background:#eee;
             
            border-spacing:0;
            border-collapse: collapse; 
        }
        #footer table td
        {
            width:25%;
            text-align:center;
            font-size:9pt;
            border-right: 1px solid #ccc;
            border-bottom: 1px solid #ccc;
        }
    </style>
</head>
<body>
<div id="wrapper">
     
    <p style="text-align:center; font-weight:bold; padding-top:5mm; font-size:25px"><?php echo $name; ?></p>
    <br />
    <table class="heading" style="width:100%;">
        <tr>
            <td style="width:80mm;">

                <h1 class="heading"><?php echo $college; ?></h1>
                <h2 class="heading">
                    <?php echo $add; ?><br>
                    <?php echo $city; ?><br>
                    Gender : <?php echo $gender; ?><br />
                    Website : <?php echo $link; ?><br />
                    E-mail : <?php echo $email; ?><br />
                    <?php echo $mob; ?>
                </h2>
            </td>
            <td rowspan="2" valign="top" align="right" style="padding:3mm;">
                <table>
               <center>  <img src="photos/a.png" alt="HTML5 Icon" style="width:128px;height:128px;"></center>

                </table>
            </td>
        </tr>
        <tr>
            <td>
                <b>Academic details</b><br />
                College Name :<?php echo $college; ?><br />
                Degree : <?php echo $degree; ?><br />
                Stream : <?php echo $stream; ?><br />
                Session : <?php echo "".$syear." - ".$eyear."    "; ?><br />
            </td>
        </tr>
    </table>

         
    <div id="content">
         
        <div id="invoice_body">
            <table >
            <tr style="background:#eee;">
                <td style="width:8%;"><b>Internship details</b></td>
                
            </tr>
            </table>
             
            <table >
            <tr>
                <td style="width:8%;">1</td>
                <td style="text-align:left; padding-left:10px;"><?php echo $org; ?></td>
                <td class="mono" style="width:26%;"><?php echo "".$sdate." - ".$edate."    "; ?></td>
                <td style="width:15%;" class="mono"><?php echo $profile; ?></td>
                <td style="width:15%;" class="mono"><?php echo $lang; ?></td>
            </tr>         
            
        </table>

        </div>
        <div id="invoice_total">
              <table>
            <tr style="background:#eee;">
                <td style="width:8%;"><b>About Project</b></td>
                
            </tr>
            </table>
        </div>
        <br />
        <hr />
        <br />
         
        <table style="width:100%; height:35mm;">
            <tr>
                <td style="width:65%;" valign="top">
                    <?php echo $brief; ?>
                </td>
                <td>
                <div id="box">
                   <center> <?php echo $link; ?></center>
                </div>
                </td>
            </tr>
        </table>
    </div>
     
    <br />
     
    </div>
     
    <htmlpagefooter name="footer">
        <div id="footer"> 
        </div>
    </htmlpagefooter>
    <sethtmlpagefooter name="footer" value="on" />
     
</body>
</html>

