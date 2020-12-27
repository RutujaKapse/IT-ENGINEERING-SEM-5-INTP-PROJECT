<?php
$mysqli = new mysqli("localhost:3307", "root", "", "register");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT id,emailId FROM registration ORDER BY id DESC LIMIT 1";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("is",$_GET['id'],$_GET['emailId']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id, $emailId);
$stmt->fetch();
$stmt->close();

echo "Provided email id is: ". $emailId
?>