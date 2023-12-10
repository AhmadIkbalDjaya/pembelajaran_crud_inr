<?php
$conn = mysqli_connect("localhost", "root", "", "crud");

function tambah($data){
  global $conn;
  $nim = htmlspecialchars($data["nim"]);
  $name = htmlspecialchars($data["name"]);
  $gender = htmlspecialchars($data["gender"]);
  $angkatan = htmlspecialchars($data["angkatan"]);
  $query = mysqli_query($conn, "INSERT INTO `mahasiswa` VALUES (
    '', 
    '$nim',
    '$name',
    '$gender',
    '$angkatan'
  )");
  if (mysqli_affected_rows($conn) > 0) {
    header("location: index.php");
  }else{
    die("error");
  }
}
