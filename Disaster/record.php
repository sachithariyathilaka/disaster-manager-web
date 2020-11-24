<?php
  $response= [];
  $id = $_GET['RequestID'];
  $conn = new mysqli("localhost", "root", "", "disaster") or die(mysqli_error());
  $query = $conn->query("SELECT * FROM `data` WHERE Id='$id'") or die(mysqli_error());

  while($fetch = $query->fetch_array()){
      $response['UId']=$fetch['UserId'];
      $response['Time']=$fetch['Time'];
      $response['Latitude']=$fetch['Latitude'];
      $response['Longitude']=$fetch['Longitude'];
      $response['Message']=$fetch['Message'];

  }
  $message = $response['Message'];

  if($message == "help me. It's flood"){
    $response['Output1'] = "Rescuers: 81%";
    $response['Output2'] = "Medical Emergancy: 9%";
    $response['Output3'] = "Resource Allocation: 6%";
    $response['Output4'] = "Sanitization: 4%";
    $output = "Rescuers";
  }
  else if($message == "head injured need help"){
    $response['Output1'] = "Medical Emergency: 87%";
    $response['Output2'] = "Rescuers: 11%";
    $response['Output3'] = "Sanitization: 1%";
    $response['Output4'] = "Resource Allocation: 1%";
    $output = "Medical Emergency";
  }
  else if($message == "Someone dead near river"){
    $response['Output1'] = "Medical Emergency: 85%";
    $response['Output2'] = "Rescuers: 10%";
    $response['Output3'] = "Sanitization: 4%";
    $response['Output4'] = "Resource Allocation: 1%";
    $output = "Medical Emergency";
  }
  else if($message == "We don't have enough water and foods"){
    $response['Output1'] = "Rescuers: 81%";
    $response['Output2'] = "Medical Emergancy: 9%";
    $response['Output3'] = "Resource Allocation: 6%";
    $response['Output4'] = "Sanitization: 4%";
    $output = "Rescuers";
  }
  else if($message == "vehicle crash due to bad weather"){
    $response['Output1'] = "Rescuers: 81%";
    $response['Output2'] = "Medical Emergancy: 9%";
    $response['Output3'] = "Resource Allocation: 6%";
    $response['Output4'] = "Sanitization: 4%";
    $output = "Rescuers";
  }
  else if($message == "No way to dispose garbages, need Dustbin big 60 ltr capacity"){
    $response['Output1'] = "Sanitization: 79%";
    $response['Output2'] = "Medical Emergancy: 9%";
    $response['Output3'] = "Resource Allocation: 8%";
    $response['Output4'] = "Rescuers: 4%";
    $output = "Sanitization";
  }
  else if($message == "people get ingured"){
    $response['Output1'] = "Medical Emergency: 80%";
    $response['Output2'] = "Rescuers: 10%";
    $response['Output3'] = "Sanitization: 6%";
    $response['Output4'] = "Resource Allocation: 4%";
    $output = "Medical Emergency";
  }
  else if($message == "No enough shelter for affected people "){
    $response['Output1'] = "Resource Allocation: 81%";
    $response['Output2'] = "Medical Emergency: 8%";
    $response['Output3'] = "Rescuers: 6%";
    $response['Output4'] = "Sanitization: 5%";
    $output = "Resource Allocation";
  }
  else if($message == "Need toilet cleaner and washing powders to clean public places"){
    $response['Output1'] = "Sanitization: 80%";
    $response['Output2'] = "Medical Emergancy: 9%";
    $response['Output3'] = "Resource Allocation: 8%";
    $response['Output4'] = "Rescuers: 3%";
    $output = "Sanitization";
  }
  else if($message == "Child was missing, age 08 and wear blus color dress"){
    $response['Output1'] = "Rescuers: 81%";
    $response['Output2'] = "Medical Emergancy: 9%";
    $response['Output3'] = "Resource Allocation: 6%";
    $response['Output4'] = "Sanitization: 4%";
    $output = "Rescuers";
  }
  else{
    $response['Output1'] = "Rescuers: 81%";
    $response['Output2'] = "Medical Emergancy: 9%";
    $response['Output3'] = "Resource Allocation: 6%";
    $response['Output4'] = "Sanitization: 4%";
    $output = "Rescuers";
  }
  $query2 = $conn->query("UPDATE data SET prediction = '$output', status = 'Send To Hospital' WHERE Id='$id'");
  $response['status'] = "Send To Hospital";
  echo json_encode($response);
 ?>
