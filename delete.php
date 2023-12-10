<?php
require "function.php";
$id = $_GET['id'];
$query = mysqli_query($conn, "DELETE FROM `mahasiswa` WHERE id='$id'");
if (mysqli_affected_rows($conn) > 0) {
  header("location: index.php");
}
