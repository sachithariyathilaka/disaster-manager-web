<?php
 $response= [];
 $conn = new mysqli("localhost", "root", "", "disaster") or die(mysqli_error());
 $sql = "SELECT *  FROM `data` WHERE prediction = 'Rescuers'";
 $result=mysqli_query($conn,$sql);
 $response['Rescuers']=mysqli_num_rows($result);

 $sql2 = "SELECT *  FROM `data` WHERE prediction = 'Medical Emergency'";
 $result2=mysqli_query($conn,$sql2);
 $response['Medical']=mysqli_num_rows($result2);

 $sql3 = "SELECT *  FROM `data` WHERE prediction = 'Sanitization'";
 $result3=mysqli_query($conn,$sql3);
 $response['Sanitization']=mysqli_num_rows($result3);

 $sql4 = "SELECT *  FROM `data` WHERE prediction = 'Resource Allocation'";
 $result4=mysqli_query($conn,$sql4);
 $response['Resource']=mysqli_num_rows($result4);

 echo json_encode($response);
 ?>
