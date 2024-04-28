<?php
  session_start();
  header('Content-Type: application/json');
  $con= mysqli_connect('localhost', 'root', '', 'disaster' );
  $query= "select * from data ";
  $result= mysqli_query($con, $query);

    if(mysqli_num_rows($result)>0)
    {
      while($row=mysqli_fetch_array($result))
      {
        $data[] = array("UId"=>$row['UserId'], "Latitude"=>$row['Latitude'], "Longitude"=>$row['Longitude'], "Time"=>$row['Time'], "Message"=>$row['Message'], "Id"=>$row['Id']);
      }
    }
      echo json_encode($data);
 ?>
