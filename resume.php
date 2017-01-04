<?php
session_start();                         //session 
if(!$_SESSION['roll']){                    //session
header("location: slogin.php");           //session
}

mysql_connect("localhost","root","");
mysql_select_db("drdo");

$roll=$_SESSION['roll'];
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

require('fpdf.php');
$pdf=new FPDF('P', 'mm', 'A4');
$pdf->AddPage();

$pdf->SetFont('Arial','B',18);
$pdf->cell(40,10,$name);
$pdf->SetXY(10, 44);


$pdf->Line(10, 30, 210-10, 30); // 20mm from each edge
//$pdf->Line(50, 45, 210-50, 45); // 50mm from each edge
$txt = "Name                    :  ".$name.""; //access the variable
$pdf->Cell(40,10,$txt);
$pdf->SetXY(10, 44);

$txt = "Roll number         :  ".$roll.""; //access the variable
$pdf->Cell(40,25,$txt);
$pdf->SetXY(10, 44);

$txt = "Gender                 :  ".$gender.""; //access the variable
$pdf->Cell(40,40,$txt);
$pdf->SetXY(10, 44);

$txt = "Mobile number    :  ".$mob.""; //access the variable
$pdf->Cell(40,55,$txt);
$pdf->SetXY(10, 44);

$txt = "Email                    :  ".$email.""; //access the variable
$pdf->Cell(40,70,$txt);
$pdf->SetXY(10, 44);

$txt = "City                       :  ".$city.""; //access the variable
$pdf->Cell(40,85,$txt);
$pdf->SetXY(10, 44);

$txt = "Date of Birth        :  ".$dob.""; //access the variable
$pdf->Cell(40,100,$txt);
$pdf->SetXY(10, 44);

$txt = "Address               :  ".$add.""; //access the variable
$pdf->Cell(40,115,$txt);
$pdf->SetXY(10, 44);


$txt = "College                 :  ".$college.""; //access the variable
$pdf->Cell(40,130,$txt);
$pdf->SetXY(10, 44);

$txt = "Degree                  :  ".$degree.""; //access the variable
$pdf->Cell(40,145,$txt);
$pdf->SetXY(10, 44);

$txt = "Stream                  :  ".$stream.""; //access the variable
$pdf->Cell(40,160,$txt);
$pdf->SetXY(10, 44);

$txt = "Session                 :  ".$syear." - ".$eyear."    "; //access the variable
$pdf->Cell(40,175,$txt);
$pdf->SetXY(10, 44);

$txt = "Work profile          :  ".$profile.""; //access the variable
$pdf->Cell(40,190,$txt);
$pdf->SetXY(10, 44);

$txt = "Organization         :  ".$org.""; //access the variable
$pdf->Cell(40,205,$txt);
$pdf->SetXY(10, 44);

$txt = "Session                 :  ".$syear." - ".$eyear."    "; //access the variable
$pdf->Cell(40,220,$txt);
$pdf->SetXY(10, 44);

$txt = "Training location           :  ".$location.""; //access the variable
$pdf->Cell(40,235,$txt);
$pdf->SetXY(10, 44);

$txt = "Online Work link        :  ".$link.""; //access the variable
$pdf->Cell(40,250,$txt);
$pdf->SetXY(10, 44);

$txt = "Brief about project         :  ".$brief.""; //access the variable
$pdf->Cell(40,270,$txt);
$pdf->SetXY(10, 44);

$txt = "Training period                 :  ".$sdate." - ".$edate."  "; //access the variable
$pdf->Cell(40,285,$txt);
$pdf->SetXY(10, 44);




//$pdf->MemImage($image, 50, 30);

/*$pdf->Cell(10,5,'No',1,0,'C',0);
$pdf->Cell(50,5,'Name',1,0,'C',0);
$pdf->Cell(90,5,'Hobby',1,1,'C',0);
$pdf->Cell(10,5,'',1,0,'C',0);
$pdf->Cell(50,5,'',1,0,'C',0);
$pdf->Cell(30,5,'Hobby A',1,0,'C',0);
$pdf->Cell(30,5,'Hobby B',1,0,'C',0);
$pdf->Cell(30,5,'Hobby B',1,1,'C',0);
*/

/*class PDF extends FPDF
     {

     function Header()
    {
       $this->Image('img/logo.png',5,5,200);
       $this->Ln(20);
       }

     //Page footer
     function Footer()
   {
       $this->SetFont('Arial','I',8);
       $this->Image('img/logo.png',5,275,200);
       $this->SetXY(5, 284);
       $this->Cell(0,5,'This is a system generated ',0,2,'C');
       $this->Cell(0,5,'Page '.$this->PageNo().'/{nb}',0,0,'C');

       }
        }
         //Instanciation of inherited class

       $pdf=new PDF();
       $pdf->AliasNbPages();
       $pdf->AddPage();
       $pdf->SetFont('Times','B',15);
       $pdf->SetXY(5,42);
       $pdf->Cell(190,10,'Challan', 0,0,'C');
       $pdf->SetXY(5,52);
       $pdf->SetFont('Times','B',12);
       $pdf->Cell(150,18,'Name :-', 1,0,'L');
*/
       /* $image_name = $_FILES['image']['name'];
        $image_type = $_FILES['image']['type'];
        $image_size = $_FILES['image']['size'];
        $image_tmp_name = $_FILES['image']['tmp_name'];

        move_uploaded_file($image_tmp_name,"photos/$image_name");*/
$pdf->Output();
?>
