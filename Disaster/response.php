<?php
$con= mysqli_connect('localhost', 'root', '', 'disaster' );
$id = $_GET['id'];
$query= "UPDATE data SET status = 'Hospital Received'  WHERE Id = '$id'";
$result= mysqli_query($con, $query);
 ?>
