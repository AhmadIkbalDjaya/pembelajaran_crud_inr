<?php
require "function.php";
$id = $_GET["id"];
$query = mysqli_query($conn, "SELECT * FROM `mahasiswa` WHERE id='$id'");
$mahasiswa = mysqli_fetch_array($query);

?>
<!-- <div style="display: fix; top: 0; left: 0; width:100vw; height: 100vh; background: black"></div> -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>detail</title>
</head>

<body>
  <h1>Detail Mahasiswa</h1>
  <table>
    <tr>
      <td>Nim</td>
      <td> <?= $mahasiswa["nim"] ?> </td>
    </tr>
    <tr>
      <td>Nama</td>
      <td><?= $mahasiswa["name"] ?></td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td><?= $mahasiswa["gender"] ?></td>
    </tr>
    <tr>
      <td>Angkatan</td>
      <td><?= $mahasiswa["angkatan"] ?></td>
    </tr>
  </table>
</body>

</html>