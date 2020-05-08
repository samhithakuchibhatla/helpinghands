<?php
// Create connection

 $conn = mysqli_connect('localhost', 'jobporta_testing', 'Testing123','jobporta_test');

// Check connection
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
 $sql = "SELECT count(id) as 'sum' FROM donationtable";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
    
    $row = mysqli_fetch_assoc($result) ;
    
        echo $row['sum'];
        
    
}
else {
    echo "0 results";
}
?>