<?php

  
 
 $con = mysqli_connect('localhost', 'jobporta_testing', 'Testing123','jobporta_test');

if (isset($_POST['joinnow'])) {
		// receive all input values from the form
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
	    $pno = $_POST['phone'];
		$city= $_POST['city'];
		$email = $_POST['email'];
		$pincode = $_POST['pin'];
	
// Check for errors

		  $sql =  mysqli_query($con,"INSERT INTO volunteerform (`Firstname`, `Lastname`,  `Phoneno`,  `City`, `Email`, `Pincode`) 
	 VALUES ('".$fname."', '".$lname."', '".$pno."', '".$city."',  '".$email."',  '".$pincode."');");
		  
 echo "<script>alert('Registration successful');</script>";
		 require("PHPMailer_5.2.0/class.phpmailer.php");
  
$mail = new PHPMailer();
$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "localhost";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "helpinghands123@jobportal.website";  // SMTP username
$mail->Password = "helpinghands123"; // SMTP password
$mail->From = "helpinghands123@jobportal.website";
$mail->FromName = "Helping Hands Organization";
$mail->AddAddress($_POST["email"]);
//$mail->AddAddress("ellen@example.com");                  // name is optional
//$mail->AddReplyTo("info@example.com", "Information");
//$attachment = 'content.pdf';
//$mail->AddAttachment($attachment , 'content.pdf');

$mail->AddCC("samhithakuchibhatla@gmail.com");

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
//$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "Confirmation of registration";
$mail->Body    = "<style type='text/css'>
<!--
.style1 {color: #990000}
.style3 {font-size: 12px}
-->
</style>
<p><strong>Hello ".$_POST["fname"].",<br>   </strong></p>
<p><strong>Thank You for registering with Helping Hands, we will be reaching out to you regarding the upcoming events in near future.

In the meanwhile, please check out our website for any other queries and start following for regular updates on Facebook, Instagram, LinkedIn & Twitter.<br>

Change Today ... Change Tomorrow<br>
Thanking you,<br>
Team Helping Hands<br>

 </strong></p>



<p>&nbsp;</p>";
//$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if($mail->Send())
{
   
	 //header("location: http://techinternship.in");
	 echo ("<script LANGUAGE='JavaScript'>
    window.alert('You have registered as our voluteer!!  Check your email ');
    window.location.href='index.html';
    </script>");
}



 
else
{
   echo ("<script LANGUAGE='JavaScript'>
    window.alert('Enter valid mail id ');
    window.location.href='index.html';
    </script>"); 
}


			    
    
		header('location: index.html');


		}
?>