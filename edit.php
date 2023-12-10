<?php
require "function.php";
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM `mahasiswa` WHERE id='$id'");
$mahasiswa = mysqli_fetch_assoc($result);
if (isset($_POST["edit"])) {
  $id = htmlspecialchars($_POST["id"]);
  $nim = htmlspecialchars($_POST["nim"]);
  $name = htmlspecialchars($_POST["name"]);
  $gender = htmlspecialchars($_POST["gender"]);
  $angkatan = htmlspecialchars($_POST["angkatan"]);
  $query = mysqli_query($conn, "UPDATE `mahasiswa` SET nim='$nim', name='$name', 
  gender='$gender', angkatan='$angkatan' WHERE id='$id'");
  if (mysqli_affected_rows($conn) > 0) {
    header("location:index.php");
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create</title>
</head>

<body>
  <h1>Edit Data</h1>
  <a href="index.php">kembali</a>
  <form action="" method="post">
    <input type="hidden" name="id" id="" value="<?= $mahasiswa['id'] ?>">
    <div>
      <label for="nim">NIM :</label>
      <div>
        <input type="text" name="nim" value="<?= $mahasiswa['nim'] ?>" id="nim" required>
      </div>
    </div>
    <div>
      <label for="name">name :</label>
      <div>
        <input type="text" name="name" value="<?= $mahasiswa['name'] ?>" id="name" required>
      </div>
    </div>
    <div>
      <label for="">Jenis Kelamin :</label>
      <div>
        <input type="radio" value="male" <?= $mahasiswa['gender'] == "male" ? "checked" : "" ?> name="gender" id="genderMale" required>
        <label for="genderMale">Laki-Laki</label>
      </div>
      <div>
        <input type="radio" value="female" <?= $mahasiswa['gender'] == "female" ? "checked" : "" ?> name="gender" id="genderFemale" required>
        <label for="genderFemale">Perempuan</label>
      </div>
    </div>
    <div>
      <select name="angkatan" id="angkatan" required>
        <option value="12" <?= $mahasiswa['angkatan'] == "12" ? "selected" : "" ?>>12</option>
        <option value="13" <?= $mahasiswa['angkatan'] == "13" ? "selected" : "" ?>>13</option>
        <option value="14" <?= $mahasiswa['angkatan'] == "14" ? "selected" : "" ?>>14</option>
      </select>
    </div>
    <button type="submit" name="edit">Simpan</button>
  </form>
</body>

</html>