<?php
include("./inc/header.php");
if (!isset($_SESSION)) {
  session_start();
}
?>
<div class="banner-bg position-relative" style="background-image: url('./img/hero-img.png'); ">
  <div class="container pb-5 pt-md-4">
    <div class="row py-5 justify-content-between align-items-center">
      <div class="col-lg-6 col-md-7 py-5">
        <?php
        if ($_SESSION) {
        ?>
          <h1 class="font-weight-bold display-4 mb-4">
            Welcome Back, <?= $_SESSION['name']; ?>
          </h1>
          <h1 class="font-weight-bold display-6 mb-4">
          Hoping the studying goes easily for you.
          </h1>
        <?php
        } else {
        ?>
          <h1 class="font-weight-bold display-4 mb-4">
            Our tutors offers face-to-face and online tuition.
          </h1>
          <p class="lead mb-3">
            Our focus - modular training programs from leading practice lectors.
          </p>
        <?php
        }
        ?>
        <?php
        if ($_SESSION) {
        ?>
          <!-- <p><?php //$_SESSION['username'] ?></p> -->
          <!-- <p><?php //$_SESSION['password'] ?></p> -->
        <?php
        } else {
        ?>
          <a href="/sinaugezz/signin" class="btn btn-success">Sign in &rarr; </a>
        <?php
        }
        ?>
      </div>
    </div>
  </div>
</div>
</div>
<?php
include("./inc/footer.php");
?>