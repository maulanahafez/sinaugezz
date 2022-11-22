<?php
// include("../config/connect.php");
if (!isset($_SESSION)) {
  session_start();
}
$err = 0;
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
  <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
  <title>SinauGezz</title>
  <link rel="stylesheet" href="/sinaugezz/style.css">
</head>


<body>
  <div class="page-wrape">
    <div class="position-relative">
      <!-- <div class="hero-shape"></div> -->
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container py-2">
          <a class="navbar-brand font-weight-bold" href="/sinaugezz/">
            SinauGezz
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <?php
              if ($_SESSION) {
                if ($_SESSION['username'] == "admin") {
                  ?>
                  <li class="nav-item">
                    <a class="nav-link" href="/sinaugezz/dashboard/">
                      Dasboard
                    </a>
                  </li>
                  <?php
                }
                ?>
                <li class="nav-item">
                  <a class="nav-link" href="/sinaugezz/">
                    Home
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/sinaugezz/materi">
                    Bank Materi
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/sinaugezz/soal">
                    Bank Soal
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/sinaugezz/feedback">
                    Feedback
                  </a>
                </li>
              <?php
              }
              ?>
            </ul>
            <?php
            if (!$_SESSION) {
            ?>
              <span class="fw-bold">
                Sign in to access website
              </span>
            <?php
            }
            ?>
            <?php if (!$_SESSION) {
            ?>
              <div class="ml-lg-5"><a class="btn btn-success" href="/sinaugezz/signin">Sign In</a> </div>
            <?php
            } else {
            ?>
              <div class="ml-lg-5"><a class="btn btn-success" href="/sinaugezz/signin/signout.php">Sign Out</a> </div>
            <?php
            }
            ?>
          </div>
        </div>
      </nav>