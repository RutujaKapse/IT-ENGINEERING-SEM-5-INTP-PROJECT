<?php
$username = 'root';
$password = '';
$db = 'register';

// Create connection
$conn = mysqli_connect('localhost:3307', $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " .$conn->connect_error);
}

$firstname = $_POST["fname"];
$lastname = $_POST["lname"];
$email = $_POST["email"];
$password1 = $_POST["password"];
$password2 = $_POST["cpassword"];

$insert = "INSERT INTO admin (firstName, lastName, emailId, password, Confirmpassword) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($insert);
$stmt -> bind_param("sssss", $firstname, $lastname, $email, $password1, $password2);
$stmt -> execute();
$stmt -> close();


$select = "SELECT * FROM admin ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $select);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "Hello, " . $row["firstName"]. " " . $row["lastName"]. ". You have successfully registered!!". "<br>";
  }
} else {
  echo "0 results";
}

// mysqli_close($conn);
?>
<html>
<body>

<h3><a href="adminlogin.php">Go to the Login page</a></h3>

</body>
</html>