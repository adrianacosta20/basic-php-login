<?php
    session_start();
    if( ! count($_SESSION)) header("Location: login.php");
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $class = $_SESSION['class']
?>

<h1>Profile</h1>
<p>Your information:</p>

<ul>
    <li>Name: <?=$name?></li>
    <li>Email: <?=$email?></li>
    <li>Class: <?=$class?></li>
</ul>

<form action="profilesubmit.php" method="post">
<input type="text" name="name" placeholder="Type your name"  /><br />
<input type="email"  name="email" placeholder="Type your email"  /><br />
<input type="text"  name="class" placeholder="Type your class name"  /><br />
<input type="submit"  value = "update" />
</form>

<a href="home.php">Home</a><br/>
<a href="logoutSubmit.php">Logout</a>
