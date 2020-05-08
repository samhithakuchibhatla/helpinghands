<?php
$con = mysqli_connect('localhost', 'root', '','feedbackdb');

if (isset($_POST['feedbackbutton'])) {
		// receive all input values from the form
		$feedback = $_POST['feedback'];
	
	
// Check for errors

		  $sql =  mysqli_query($con,"INSERT INTO feedback(`feedback`) 
	 VALUES ('$feedback');");
		  

	if (mysqli_query($con,$sql) === TRUE)
	{		
    echo "<script>alert('feedback successful');
    </script>";
    
   
    }
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

			header('location: index.html');



			    
			

		}
?>