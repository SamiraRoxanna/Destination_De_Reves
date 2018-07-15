<?php
$conn= new mysqli ("localhost", "root","", "travel_destination");
if($conn ->connect_error)
{
die("Could not connect with server". $conn->connect_error);
}
?>