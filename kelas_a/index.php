<?php
require "function.php";
$query = mysqli_query($conn, "SELECT * FROM `mahasiswa`");
$mahasiswa = [];
while ($row = mysqli_fetch_array($query)) {
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
  <a href="create.php?id=1">Tambah Data</a>
  <table border="1">
    <thead>
      <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Angkatan</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($mahasiswa as $index => $data) : ?>
        <tr>
          <td> <?= $index + 1 ?> </td>
          <td> <?= $data["nim"] ?> </td>
          <td> <?= $data["name"] ?></td>
          <td> <?= $data["angkatan"] ?> </td>
          <td>
            <a href="detail.php?id=<?= $data['id'] ?>">Detail</a>
            <a href="">Edit</a>
            <a href="">Hapus</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>

</html>