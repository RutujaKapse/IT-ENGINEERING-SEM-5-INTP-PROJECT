<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <title>Admin Register Page</title>
    <link type="text/css" rel="stylesheet" href="assets/css/register.css" media="all">
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&display=swap" rel="stylesheet">
    <style type="text/css">
      .box input[type="text"]:focus,.box input[type="password"]:focus,.box input[type="email"]:focus{
       width: 160px;
       border-color: #2ecc71;
      }
      .box input[type="submit"]:hover{
       background: #2ecc71;
      }
      .box input[type="checkbox"],.box label{
       margin:0px 5px 0px 20px;
      }
      ::placeholder {
      color: black;
      }
      .error {
      color: #FF0000;
      text-align: center;
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
    // define variables and set to empty values
    $fnameErr = $lnameErr = $emailErr = $passwordErr = $cpasswordErr = "";
    $fname = $lname = $email = $password = $cpassword = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["fname"])) {
        $fnameErr = "First Name is required";
      } else {
        $fname = test_input($_POST["fname"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
          $fnameErr = "Only letters and white space allowed";
        }
      }

      if (empty($_POST["lname"])) {
        $lnameErr = "Last Name is required";
      } else {
        $lname = test_input($_POST["lname"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
          $lnameErr = "Only letters and white space allowed";
        }
      }

      if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format";
        }
      }

      //Validates password.
      if(!empty($_POST["password"]) && $_POST["password"] != "" ){

        if (strlen($_POST["password"]) <= '8') {
            $passwordErr .= "Your Password Must Contain At Least 8 Digits !"."<br>";
        }
        elseif(!preg_match("#[0-9]+#",$_POST["password"])) {
            $passwordErr .= "Your Password Must Contain At Least 1 Number !"."<br>";
        }
        elseif(!preg_match("#[A-Z]+#",$_POST["password"])) {
            $passwordErr .= "Your Password Must Contain At Least 1 Capital Letter !"."<br>";
        }
        elseif(!preg_match("#[a-z]+#",$_POST["password"])) {
            $passwordErr .= "Your Password Must Contain At Least 1 Lowercase Letter !"."<br>";
        }
        elseif(!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $_POST["password"])) {
            $passwordErr .= "Your Password Must Contain At Least 1 Special Character !"."<br>";
        }
      }
      else{
        $passwordErr .= "Please Enter your password"."<br>";
      }

      //Validates confirm password.
      if(!empty($_POST["cpassword"]) && $_POST["cpassword"] != "" ){

        if($_POST["cpassword"] != $_POST["password"]) {
            $cpasswordErr .= "Passwords must be same !"."<br>";
        }
      }
      else{
        $cpasswordErr .= "Please Confirm your password"."<br>";
      }

    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    ?>


    <form class="box" method='POST' onsubmit="return validation()" action="adminregister1.php">

      <img src="assets/img/logo1.png" style="width:100px;height:100px;margin:0px 50px 0px 125px;">
      <h1 style="color: black;text-align: center;font-family: 'Bad Script', cursive;font-size:22px;">REGISTER</h1>

      <input type="text" name="fname" placeholder="Firstname" value="<?php echo $fname;?>" maxlength="20" autocomplete="off" required>
      <span class="error">* <?php echo $fnameErr;?></span><br>

      <input type="text" name="lname" placeholder="Lastname" value="<?php echo $lname;?>" maxlength="20" autocomplete="off" required>
      <span class="error">* <?php echo $lnameErr;?></span><br>

      <input type="text" name="email" placeholder="Email ID" name="email" value="<?php echo $email;?>" maxlength="60" autocomplete="off" required>
      <span class="error">* <?php echo $emailErr;?></span><br>

      <input type="password" name="password" id="pass1" placeholder="Password" required>
      <span class="error">* <?php echo $passwordErr;?></span><br>

      <input type="password" name="cpassword" id="pass2" placeholder=" Confirm Password" required>
      <span class="error">* <?php echo $cpasswordErr;?></span><br>

      <input type="checkbox" name="check" id="check" ><span>I agree to the terms and conditions</span>

      <input type="submit" name="register" value="Register">
      <!-- <h3><a href="index.php">Go back</a><h/3> -->
    </form>


    <script>
        function validation() {
            var pass1 = document.getElementById('pass1').value;
            var pass2 = document.getElementById('pass2').value;
            var mailformat = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/
            
             if (pass1 == "") {
                alert("Please type a password! Must be atleast 8 characters long.")
                return false;
            }
            if (pass1.length < 8) {
                alert("Password must be atleast 8 characters long!")
                return false;
            }

            if (pass2 == "") {
                alert("Confirm Password! Must be same as your Password.")
                return false;
            }
            if (pass2 != pass1) {
                alert("Confirm Password! Passwords not matching.")
                return false;
            }

        }
    </script>


  </body>
</html>