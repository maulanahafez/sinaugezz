<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
<?php
include("../inc/header.php");
if (!$_SESSION) {
  header("location:../signin/");
}
?>
<div class="position-relative" style="z-index:1;">
  <div class="container">
    <div class="row justify-content-between text-center">
      <div class="col-12 text-start mt-3 mb-3">
        <h3 class="font-weight-bold">Pilih Mata Pelajaran</h3>
      </div>
      <div class="col-md-4 col-lg-3 pb-4">
        <a href="./?id=matematika" class="text-decoration-none">
          <div class="p-4 bg-tutor rounded">
            <i class="fa-solid fa-calculator"></i>
            <h6 class="font-weight-bold mb-0 pt-3">Matematika</h6>
          </div>
        </a>
      </div>
      <div class="col-md-4 col-lg-3 pb-4">
        <a href="./?id=fisika" class="text-decoration-none">
          <div class="p-4 bg-tutor rounded">
            <i class="fa-regular fa-lightbulb"></i>
            <h6 class="font-weight-bold mb-0 pt-3">Fisika</h6>
          </div>
        </a>
      </div>
      <div class="col-md-4 col-lg-3 pb-4">
        <a href="./?id=kimia" class="text-decoration-none">
          <div class="p-4 bg-tutor rounded">
            <i class="fa-solid fa-flask-vial"></i>
            <h6 class="font-weight-bold mb-0 pt-3">Kimia</h6>
          </div>
        </a>
      </div>
      <div class="col-md-4 col-lg-3 pb-4">
        <a href="./?id=biologi" class="text-decoration-none">
          <div class="p-4 bg-tutor rounded">
            <i class="fa-solid fa-dna"></i>
            <h6 class="font-weight-bold mb-0 pt-3">Biologi</h6>
          </div>
        </a>
      </div>
    </div>
    <?php
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
    ?>
      <div class="container m-auto">
        <div class="mt-4">
          <div class="text-center">
            <div class="text-primary">
              <h4>Materi <?= ucfirst($id) ?></h4>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="card col-4 m-3">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>
            <div class="card col-4 m-3">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>
            <div class="card col-4 m-3">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php
    }
    ?>

  </div>
</div>
<?php
include("../inc/footer.php");
?>