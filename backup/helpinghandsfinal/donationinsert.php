<?php
//include 'donationdb.php';
$con = mysqli_connect('localhost', 'root','','donatedb');

if (isset($_POST['donate'])) {
		// receive all input values from the form
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
	    $pno = $_POST['phone'];
		$email = $_POST['email'];
		$Amount = $_POST['Amount'];
		$contribution = $_POST['optradio1'];
		$payment = $_POST['optradio3'];
		$cause = $_POST['optradio2'];
	
// Check for errors

		  $sql =  mysqli_query($con,"INSERT INTO donate(`Firstname`, `Lastname`, `Phoneno`, `Amount`, `Email`, `Contribution`, `Cause`, `Paymentmode`) 
	 VALUES ('".$fname."', '".$lname."', '".$pno."',  '".$Amount."',  '".$email."',  '".$contribution."', '".$cause."', '".$payment."');");
		  

	if (mysqli_query($con,$sql) === TRUE)
	{		
    echo "<script>alert('donation successful');
    </script>";
    
   
    }
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

			header('location: index.html');



			    
			

		}
?>