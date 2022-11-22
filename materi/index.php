<?php
include("../inc/header.php");
if(!$_SESSION){
  header("location:../signin/");
}
?>
<div class="position-relative" style="z-index:1;">
  <div class="container">
    <div class="row pt-5 justify-content-between text-center">
      <div class="col-12">
        <h2 class="font-weight-bold mb-5 pb-3">Choose our tutors by subjects.</h2>
      </div>
      <div class="col-md-4 col-lg-3 pb-4">
        <a href="./?id=matematika">
          <div class="p-4 bg-tutor rounded">
            <i class="lni lni-calculator"></i>
            <h6 class="font-weight-bold mb-0 pt-3">Matematika</h6>
          </div>
        </a>
      </div>
      <div class="col-md-4 col-lg-3 pb-4">
        <div class="p-4 bg-tutor rounded"> <i class="lni lni-library"></i>
          <h6 class="font-weight-bold mb-0 pt-3">Fisika</h6>
        </div>
      </div>
      <div class="col-md-4 col-lg-3 pb-4">
        <div class="p-4 bg-tutor rounded"> <i class="lni lni-code"></i>
          <h6 class="font-weight-bold mb-0 pt-3">Kimia</h6>
        </div>
      </div>
      <div class="col-md-4 col-lg-3 pb-4">
        <div class="p-4 bg-tutor rounded"> <i class="lni lni-layers"></i>
          <h6 class="font-weight-bold mb-0 pt-3">Biologi</h6>
        </div>
      </div>
      <div class="col-md-4 col-lg-3 pb-4">
        <div class="p-4 bg-tutor rounded"> <i class="lni lni-music"></i>
          <h6 class="font-weight-bold mb-0 pt-3">Bahasa Indonesia</h6>
        </div>
      </div>
      <div class="col-md-4 col-lg-3 pb-4">
        <div class="p-4 bg-tutor rounded"> <i class="lni lni-package"></i>
          <h6 class="font-weight-bold mb-0 pt-3">Bahasa Inggris</h6>
        </div>
      </div>
      <div class="col-md-4 col-lg-3 pb-4">
        <div class="p-4 bg-tutor rounded"> <i class="lni lni-users"></i>
          <h6 class="font-weight-bold mb-0 pt-3">Geografi</h6>
        </div>
      </div>
      <div class="col-md-4 col-lg-3 pb-4">
        <div class="p-4 bg-tutor rounded"> <i class="lni lni-bulb"></i>
          <h6 class="font-weight-bold mb-0 pt-3">Sejarah</h6>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include("../inc/footer.php");
?>