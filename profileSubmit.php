<?php
$name=$_POST['name'];
$email=$_POST['email'];
$class=$_POST['class'];


if( ! filter_var($email, FILTER_VALIDATE_EMAIL)) die('Invalid email');
  session_start();
  $_SESSION['name'] = $name;
  $_SESSION['email'] = $email;
  $_SESSION['class'] = $class;
  header("Location: profile.php");
?>