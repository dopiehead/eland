<?php 
$conn = mysqli_connect("localhost", "estore_elands","estore_elands123","estore_elands");
if(!$conn){
     die("Could not connect to database " . $conn->error());
}
?>