<?php
require "function.php";
if (isset($_POST["simpan"])) {
  $nim = htmlspecialchars($_POST['nim']);
  $name = htmlspecialchars($_POST['name']);
  $gender = htmlspecialchars($_POST['gender']);
  $angkatan = htmlspecialchars($_POST['angkatan']);

  $query = mysqli_query($conn, "INSERT INTO `mahasiswa` VALUES (
  '', 
  '$nim', 
  '$name', 
  '$gender', 
  '$angkatan'
  )");
  if (mysqli_affected_rows($conn) > 0) {
    header("location: index.php");
    exit;
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data</title>
</head>

<body>
  <h1>Tambah Data</h1>
  <form action="" method="post">
    <div>
      <label for="nim">NIM :</label>
      <div>
        <input type="text" name="nim" id="nim" required>
      </div>
    </div>
    <div>
      <label for="name">Nama :</label>
      <div>
        <input type="text" name="name" id="name" required>
      </div>
    </div>
    <div>
      <label for="">Jenis Kelamin</label>
      <div>
        <input type="radio" value="male" name="gender" id="genderMale" required>
        <label for="genderMale">Laki-laki</label>
      </div>
      <div>
        <input type="radio" value="female" name="gender" id="genderFemale" required>
        <label for="genderFemale">Perempuan</label>
      </div>
    </div>
    <div>
      <label for="angkatan">Angkatan :</label>
      <select name="angkatan" id="" required>
        <option value="14">14</option>
        <option value="13">13</option>
      </select>
    </div>
    <button type="submit" name="simpan">Simpan</button>
  </form>
</body>

</html>