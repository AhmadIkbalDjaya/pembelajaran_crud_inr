<?php
session_start();
if (!isset($_SESSION["login"])){
  header("location: login.php");
}
require "function.php";
$query = "SELECT * FROM `mahasiswa`";
if (isset($_POST["cari"])) {
  $keyword = $_POST["keyword"];
  $query = "SELECT * FROM `mahasiswa` WHERE name LIKE '%$keyword%' OR nim LIKE '%$keyword%'";
}
$result = mysqli_query($conn, $query);
$mahasiswa = [];
while ($row = mysqli_fetch_array($result)) {
  $mahasiswa[] = $row;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD</title>
</head>

<body>
  <a href="create.php?name=ikrar">Tambah Data</a>
  <form action="" method="post">
    <input type="text" name="keyword" id="">
    <button type="submit" name="cari">Cari</button>
  </form>
  <table border="1">
    <thead>
      <tr>
        <th>No</th>
        <th>NIM</th>
        <th>name</th>
        <th>Angkatan</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($mahasiswa as $index => $data) : ?>
        <tr>
          <td><?= $index + 1 ?></td>
          <td><?= $data['nim'] ?></td>
          <td><?= $data['name'] ?></td>
          <td><?= $data['angkatan'] ?></td>
          <td>
            <a href="detail.php?id=<?= $data['id'] ?>">Detail</a>
            <a href="edit.php?id=<?= $data['id'] ?>">Edit</a>
            <a href="delete.php?id=<?= $data['id'] ?>">Hapus</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <a href="logout.php">logout</a>
</body>

</html>