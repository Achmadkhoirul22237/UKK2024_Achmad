<?php
 session_start();
 if(!isset($_SESSION['userid'])){
    header("location:login.php");
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
</head>
<body>
  <h1>Halaman Home</h1> 
  <p>Selamat datang <b><?=$_SESSION['namalengkap']?></body></p> 

  <u>
      <li><a href="album.php">Album</a></li>
      <li><a href="logout.php">Logout</a></li>
  </u>
</body>
</html>