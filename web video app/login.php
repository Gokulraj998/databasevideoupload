<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM data_users WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: index.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered and Please Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
  
    <div class="login-form">
    <form class="" action="" method="post" autocomplete="off">

  
    <h1>Login</h1>

  
    <div class="content">

    <div class="input-field">
      <label for="usernameemail">Username or Email : </label>
      <input type="text" name="usernameemail" id = "usernameemail" required value=""> 
    </div>

    <div class="input-field">
        <label for="password">Password : </label>
      <input type="password" name="password" id = "password" required value=""> 
    </div>
    </div>
    <div class="action">
      <button><a href="registration.php">Registration</a></button>
      <button type="submit" name="submit">login</button>
    </div>
    </form>
   </div>
    <br>
    <!-- <a href="registration.php">Registration</a> -->
  </body>
</html>