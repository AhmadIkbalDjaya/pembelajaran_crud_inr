<!-- <div style="width: 100vw; height: 100vh; position:fixed; top:0; left:0; background: black; color:white;">Hello</div> -->
<?php
session_start();
if (!isset($_SESSION["login"])){
  header("location: login.php");
}
require "function.php";
if (isset($_POST["simpan"])) {
  tambah($_POST);
}
// DRY
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create</title>
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
      <label for="name">name :</label>
      <div>
        <input type="text" name="name" id="name" required>
      </div>
    </div>
    <div>
      <label for="">Jenis Kelamin :</label>
      <div>
        <input type="radio" value="male" name="gender" id="genderMale" required>
        <label for="genderMale">Laki-Laki</label>
      </div>
      <div>
        <input type="radio" value="female" name="gender" id="genderFemale" required>
        <label for="genderFemale">Perempuan</label>
      </div>
    </div>
    <div>
      <select name="angkatan" id="angkatan" required>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
      </select>
    </div>
    <button type="submit" name="simpan">Simpan</button>
  </form>
</body>

</html>