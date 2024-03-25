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
    <title>Halaman Album</title>
</head>
<body>
  <h1>Halaman Album</h1> 
  <p>Selamat datang <b><?=$_SESSION['namalengkap']?></body></p> 

  <u>
      <li><a href="album.php">Album</a></li>
      <li><a href="logout.php">Logout</a></li>
  </u>

  <form action="tambah_album.php" method="post">
      <table>
          <tr>
              <td>Nama Album</td>
              <td><input type="text" name="namaalbum"></td>
          </tr>
          <tr>
              <td>Deskripsi</td>
              <td><input type="text" name="deskripsi"></td>
          </tr>
          <tr>
              <td></td>
              <td><input type="submit" value="Tambah"></td>
      </table>
  </form>
</body>
</html>