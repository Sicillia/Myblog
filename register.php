<!DOCTYPE html>
<html>
<body>
  <br>
  <center>
    <?php 
  session_start();
  if (isset($_SESSION['login'])) {
    header("location:admin.php");
    exit;
  }
 ?>
  <!DOCTYPE html>
<html>
<head>
  <center>
  <title>Registration</title>

<body>
 <div>
  Please Fill the Blank Space <br><br>
  <p><span class="error" >* required field</span></p>
  <form method="POST" action="actionregister.php">
 </head>
<?php
// define variables and set to empty values
$usernameErr = $passwordErr = $emailErr = $genderErr = $usiaErr = "";
$username = $password = $email = $gender = $usia = "";

date_default_timezone_set('Asia/Jakarta');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $nameErr = "username is required";
  } else {
    $username = test_input($_POST["username"]);
    // check if username only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["password"])) {
    $passwordErr = "password is required";
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

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["usia"])) {
    $usiaErr = "Age is required";
  } else {
    $usia = test_input($_POST["usia"]);
    if (!preg_match("/^[0-9 ]*$/",$usia)) {
      $usiaErr = "Only Numbers allowed"; 
    }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div style="padding-left: 500px">


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<table width="50%" align="left" cellspacing="1" cellpadding="5">
  <tr>
   <td><font color=black>Username</td>
   <td>:<input type="text" name="username" value="<?php echo $username;?>">
  <span class="error">* <?php echo $usernameErr;?></span></td>
  </tr>
  <tr>
   <td><font color=black>Password</td>
   <td>:<input type="password" name="password">
   <span class="error">* <?php echo $passwordErr;?> </span>
  </tr>
  <tr>
   <td><font color=black>E-mail</td>
   <td>:<input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span></td>
  </tr>
  <tr>
   <td><font color=black>Gender</td>
   <td>:
  <input type="radio" name="gender" value="Laki - Laki">male
  <input type="radio" name="gender" value="Perempuan">female
  <span class="error">* <?php echo $genderErr;?></span>
   </td>
  </tr>
  <tr>
   <td><font color=black>Usia</td>
   <td>:<input type="text" name="usia" value="<?php echo $usia;?>">
  <span class="error">* <?php echo $usiaErr;?></span>
   </td>
  </tr>
  <tr><td><img src="captcha.php"/></td><td>:<input type="text" placeholder="masukan kode captcha" name="kode"/><span class="error">*</span></td>
  </tr>
  <tr>
   <td colspan="2"><input type="submit" name="submit" value="Submit">
    <input type="reset" name="reset" value="reset">
   </td>
  </tr>
</font>
</table>
</tr>
</form>
</div>
</body>
</center>
</html>
 
  

