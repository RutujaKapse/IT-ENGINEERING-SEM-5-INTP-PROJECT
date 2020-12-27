<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <title>Admin Login Page</title>
    <link type="text/css" rel="stylesheet" href="assets/css/login.css" media="all">
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&display=swap" rel="stylesheet">
    <style type="text/css">
      .box input[type="email"]:focus,.box input[type="password"]:focus{
       width: 270px;
       border-color: #2ecc71;
      }
      .box input[type="submit"]:hover{
       background: #2ecc71;
      }
      /*.box input[type="checkbox"],.box label{
       margin:0px 5px 0px 20px;
      }*/
      ::placeholder {
      color: black;
      }
      .forgot{
      margin:0px 5px 0px 23px;
      }
      body{
      margin: 0;
      padding: 0;
      font-family: sans-serif;
      background-image: url("assets/img/bgimg2.jpg");
      background-size: cover;
            
            }
    </style>  
  </head>
  <body>

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

   if(isset($_POST['email'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE emailId='".$email."' AND password='".$password."' LIMIT 1";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)==1){
        echo "<h1>"."You have successfully Logged in!!"."</h1>";
        echo '<h3><a href="adminhome.php" style="color:red;">'."Go to the Home page!!!"."</a></h3>";
        exit();
    }
    else{
        echo "<h1>"."You have entered Incorrect Details!!"."</h1>";
        echo '<h3><a href="adminlogin.php" style="color:red;">'."Go to the Login page!!!"."</a></h3>";
        exit();
    }
   }

  ?>

  <!--script src="login.js"></script-->
    <form class="box" method='POST' id="form" action="#">
      <img src="assets/img/logo1.png" style="width:200px;height:200px;margin:0px 50px 0px 55px;">
      <h1 style="color: black;text-align: center;font-family: 'Bad Script', cursive;font-size:22px">ADMIN LOGIN</h1>
      <input type="email" name="email" id="email" placeholder="Email ID" required autocomplete="on">
      <!--span id="text"></span-->
      <input type="password" name="password" placeholder="Password" required>
      <label for="rememberme"><input id="rememberme" name="rememberme" value="remember" type="checkbox" />Remember me</label>
      <a href="forgot.php" class="forgot">Forgot Password?</a>
      <input type="submit" name="Login" value="Login">
      <h3><a href="adminregister.php">Register?</a></h3>
    </form>  
   
  </body>
</html>