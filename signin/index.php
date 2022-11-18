<?php
include("../inc/header.php");
include("../config/connect.php");
session_start();
if (isset($_POST['kirim'])) {
  // $nama = 
  $_SESSION['username'] = $_POST['username'];
  // $password = 
  $_SESSION['password'] = $_POST['password'];
  $sql = "SELECT * from user";
  $query = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_array($query)) {
    if ($row['username'] == $_SESSION['username'] && $row['password'] == $_SESSION['password']) {
      if ($_SESSION['username'] == 'admin') {
        header("Location:../dashboard/");
      } else {
        header("Location:/sinaugezz/");
      }
    } else {
?>
      <script>
        alert('anda belum terdaftar');
      </script>
<?php
    }
  }
}
?>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://cdn.pixabay.com/photo/2013/07/12/12/03/book-145170_1280.png" alt="gambar sign in" class="img-fluid">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="" method="post" name="signin">
          <p class="mb-3 mt-5 me-3 text-center">Lorem, ipsum dolor.</p>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">username</label>
            <input type="text" id="nama" class="form-control form-control-lg" placeholder="Enter username" name="username" required />
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example4">Password</label>
            <input type="password" id="password" class="form-control form-control-lg" placeholder="Enter password" name="password" required />
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3"> Remember me </label>
            </div>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" name="kirim" class="btn btn-success btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem">Sign In</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="./signup.php" class="link-danger">Sign Up</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>