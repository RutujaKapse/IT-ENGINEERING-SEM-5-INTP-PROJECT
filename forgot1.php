<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "register";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['password'])){

    $pass1 = $_POST['password'];
    $pass2 = $_POST['cpassword'];


    $sql = "UPDATE registration SET password='$pass1',Confirmpassword='$pass2' ORDER BY id DESC LIMIT 1";
    $result=mysqli_query($conn, $sql);
}
if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}


$conn->close();
?>