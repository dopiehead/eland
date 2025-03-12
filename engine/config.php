<?php 
$conn = mysqli_connect("localhost", "root","","e_lands");
if(!$conn){
     die("Could not connect to database " . $conn->error());
}
?>