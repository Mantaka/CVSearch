<?php 


if(!empty($_POST['submit'])){

$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$address =$_POST['address'];
$p_number = $_POST['p_number'];
$email = $_POST['email'];
$j_sector = $_POST['j_sector'];
$employer = $_POST['employer'];
$j_title = $_POST['j_title'];
$duration = $_POST['duration'];
$min_edu_level = $_POST['dropdown'];
$min_passes = $_POST['min_passes'];
$experiences = $_POST['experiences'];
$skills = $_POST['skills'];




require("fpdf/fpdf.php");
$pdf = new FPDF();
$pdf -> Addpage();
$pdf ->SetTitle("Your CV");
$pdf ->SetFont("Arial", "B", 16);
$pdf ->Cell(0,10,"Personal Information",1,1,'C');
$pdf ->Cell(50,10,"First Name: ",1,0,'L');
$pdf ->Cell(0,10," {$f_name}",1,1,'L');
$pdf ->Cell(50,10,"Last Name: ",1,0,'L');
$pdf ->Cell(0,10," {$l_name}",1,1,'L');
$pdf ->Cell(50,10,"Address: ",1,0,'L');
$pdf ->Cell(0,10," {$address}",1,1,'L');
$pdf ->Cell(50,10,"Phone Number: ",1,0,'L');
$pdf ->Cell(0,10," {$p_number}",1,1,'L');
$pdf ->Cell(50,10,"Email Address: ",1,0,'L');
$pdf ->Cell(0,10," {$email}",1,1,'L');
$pdf ->Ln(10);
$pdf ->SetFont("Arial", "B", 16);
$pdf ->Cell(0,10,"Work Experience",1,1,'C');
$pdf ->Cell(50,10,"Job Sector: ",1,0,'L');
$pdf ->Cell(0,10," {$j_sector}",1,1,'L');
$pdf ->Cell(50,10,"Employer: ",1,0,'L');
$pdf ->Cell(0,10," {$employer}",1,1,'L');
$pdf ->Cell(50,10,"Job Title: ",1,0,'L');
$pdf ->Cell(0,10," {$j_title}",1,1,'L');
$pdf ->Cell(50,10,"Duration: ",1,0,'L');
$pdf ->Cell(0,10," {$duration}",1,1,'L');
$pdf ->Ln(10);
$pdf ->SetFont("Arial", "B", 16);
$pdf ->Cell(0,10,"Education",1,1,'C');
$pdf ->Cell(80,10,"Minimun Education Level: ",1,0,'L');
$pdf ->Cell(0,10," {$min_edu_level}",1,1,'L');
$pdf ->Cell(80,10,"Minimun GCSE Passes: ",1,0,'L');
$pdf ->Cell(0,10," {$min_passes}",1,1,'L');
$pdf ->Ln(10);
$pdf ->SetFont("Arial", "B", 16);
$pdf ->Cell(0,10,"Experiences and Skills",1,1,'C');
$pdf ->Cell(50,10,"Experiences: ",1,0,'L');
$pdf ->Cell(0,10," {$experiences}",1,1,'L');
$pdf ->Cell(50,10,"Skills: ",1,0,'L');
$pdf ->Cell(0,10," {$skills}",1,1,'L');
$pdf -> output();



}