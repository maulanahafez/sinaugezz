<?php
session_start();
include("../inc/header.php");
include("../config/connect.php");
?>
<?php
if(isset($_POST['kirim'])){
  $_SESSION['nama'] = $_POST['nama'];
  $_SESSION['username'] = $_POST['username'];
  $_SESSION['password'] = $_POST['password'];
  $sql = "insert into user (username, password, nama_user) values('{$_SESSION['username']}','{$_SESSION['password']}','{$_SESSION['nama']}')";
  $query = mysqli_query($conn, $sql);
  header("Location:/sinaugezz/");
  // echo "{$_SESSION['nama']}";
  // echo "{$_SESSION['username']}";
  // echo "{$_SESSION['password']}";
}
?>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://cdn.pixabay.com/photo/2013/07/12/12/03/book-145170_1280.png" alt="gambarcuy" class="img-fluid">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form method="POST" name="signup" action="">
          <p class="mb-3 mt-3 me-3 text-center">Lorem, ipsum dolor.</p>

          <!-- Name input -->
          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example4">Nama</label>
            <input type="text" id="form3Example5" class="form-control form-control-lg" placeholder="Enter password" name="nama" />
          </div>
            
            <!-- Username input -->
            <div class="form-outline mb-3">
              <label class="form-label" for="form3Example3">Username</label>
              <input type="text" id="form3Example3" class="form-control form-control-lg" placeholder="Enter a username" name="username" />
            </div>
            
          <!-- Password input -->
          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example4">Password</label>
            <input type="password" id="form3Example4" class="form-control form-control-lg" placeholder="Enter password" name="password" />
          </div>
          <div class="d-flex justify-content-between align-items-center">

            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3"> Remember me </label>
            </div>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" name="kirim" class="btn btn-success btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem">Sign Up</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="./" class="link-danger">Sign In</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>