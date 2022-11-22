<?php
include("../../config/connect.php");
$err = 0;
if (isset($_POST['add'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $nama_user = $_POST['nama_user'];
  $sql1 = "select * from user";
  $q1 = mysqli_query($conn, $sql1);
  while ($row = mysqli_fetch_array($q1)) {
    if ($row['username'] == $username) {
      $err = 1;
      ?>
      <script>
        alert("Username sudah ada");
        document.location = "./";
      </script>
      <?php
    }
  }
  if ($err != 1) {
    $sql2 = "insert into user(username, password, nama_user) values ('$username','$password','$nama_user')";
    $q2 = mysqli_query($conn, $sql2);
    if ($q2) {
      ?>
      <script>
        alert("Data berhasil ditambahkan");
        document.location = "./";
      </script>
      <?php
    }
  }
}
