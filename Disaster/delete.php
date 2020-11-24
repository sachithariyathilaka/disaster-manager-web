<?php
$con= mysqli_connect('localhost', 'root', '', 'disaster' );
$id = $_GET['id'];
$query= "DELETE FROM data WHERE Id = '$id'";
$result= mysqli_query($con, $query);
 ?>
