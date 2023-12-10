<?php
require "function.php";
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM `mahasiswa` WHERE id='$id'");
$mahasiswa = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail</title>
</head>

<body>
  <h3>Detail Mahasiswa</h3>
  <table>
    <tr>
      <td>nim</td>
      <td><?= $mahasiswa['nim']?></td>
    </tr>
    <tr>
      <td>name</td>
      <td><?= $mahasiswa['name']?></td>
    </tr>
    <tr>
      <td>gender</td>
      <td><?= $mahasiswa['gender']?></td>
    </tr>
    <tr>
      <td>angkatan</td>
      <td><?= $mahasiswa['angkatan']?></td>
    </tr>
  </table>
</body>

</html>