<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM data_users WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO data_users VALUES('','$name','$username','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link rel="stylesheet" href="registration.css">
  </head>
  <body>
    <h2>Registration</h2>
    <div class=”wrapper”>
  <div class=”registration_form”>

  <div class=”title”>
    Registration Form
  </div>

    <form class="" action="" method="post" autocomplete="off">
    <div class="container">

    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    

    <div class=”input_wrap”>
      <label for="name">Name : </label>
      <input type="text" name="name" id = "name" required value=""> <br>
    </div>

    <div class=”input_wrap”>
      <label for="username">Username : </label>
      <input type="text" name="username" id = "username" required value=""> <br>
     </div>

     <div class=”input_wrap”>
      <label for="email">Email : </label>
      <input type="email" name="email" id = "email" required value=""> <br>
     </div>

     <div class=”input_wrap”>
      <label for="password">Password : </label>
      <input type="password" name="password" id = "password" required value=""> <br>
     </div>

     <div class=”input_wrap”>
      <label for="confirmpassword">Confirm Password : </label>
      <input type="password" name="confirmpassword" id = "confirmpassword" required value=""> <br>
     </div>
     
  
      <button type="submit" name="submit" class="registerbtn">Register</button>
      
      <div class="container signin">
      <p>Already have an account? <a href="login.php">Login</a>.</p>
     </div>
     
     </div>
    </form>
    </div>
    </div>
    <br>

  </body>
</html>