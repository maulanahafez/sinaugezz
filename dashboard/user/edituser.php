<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
<?php
include("../../config/connect.php");
include("../inc/header.php");
$id = $_GET['id'];
$sql1 = "select * from user where username = '$id'";
$q1 = mysqli_query($conn, $sql1);
while ($row = mysqli_fetch_array($q1)) {
  $username = $row['username'];
  $password = $row['password'];
  $nama_user = $row['nama_user'];
}
if (isset($_POST['add'])) {
  $password = $_POST['password'];
  $nama_user = $_POST['nama_user'];
  $sql2 = "update user set password='$password', nama_user='$nama_user' where username='$id'";
  $q2 = mysqli_query($conn, $sql2);
  if ($q2) {
  ?>
    <script>
      alert("Data berhasil diperbarui");
      document.location = "./";
    </script>
  <?php

  }
}
?>
<div class="col py-3">
  <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
    <form action="" method="post" name="edituser" style="width: 40%;" class="card">
      <div class="card-body">
        <h3>Edit user </h3>
        <div class="mb-3">
          <label class="form-label">Name</label>
          <input type="text" name="nama_user" class="form-control form-control-sm" value="<?= $nama_user ?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Username</label>
          <input type="text" name="username" class="form-control form-control-sm" value="<?= $username ?>" disabled>
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" name="password" class="form-control form-control-sm" value="<?= $password ?>">
        </div>
        <div class="modal-footer">
          <a href="./" class="btn btn-sm btn-secondary">Back</a>
          <button type="reset" class="btn btn-sm btn-danger ms-2">Reset</button>
          <button type="submit" name="add" class="btn btn-sm btn-primary ms-2">Edit User</button>
        </div>
      </div>
    </form>
  </div>
</div>
<?php
include("../inc/footer.php");
?>