<?php
$link = mysqli_connect("localhost","root","","travel");
if($link) {
	// echo "coonected succesfuuly";
}

$name = $_POST['name'];										
$id = $_POST['id'];											
$seat = $_POST['seat'];												
$to_d = $_POST['to_d'];													
$from_d = $_POST['from_d'];																														
$rent = $_POST['rent'];
$date = $_POST['date'];	
	$query = "INSERT INTO data VALUES ('$name', '$id', '$seat', '$to_d', '$from_d', '$rent', '$date' )";

$run = mysqli_query($link,$query);

if($run)
    {
        echo '<script>alert("Ticket Booked Sucessesfully");</script>';
        echo '<meta http-equiv="refresh" content="0; url=../pages/print.html">';
    }
 ?>