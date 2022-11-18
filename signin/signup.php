<?php
include("../inc/header.php");
?>
<section class="">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="../img/signin-img.png" class="img-fluid" alt="Sign In Image" />
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form>
          <div class="mb-3">
            <h3 class="text-center mx-3 mb-0">Create a New Account</h3>
          </div>

          <div class="form-outline mb-4">
            <label class="form-label mb-0" for="form3Example3">Name</label>
            <input type="email" id="form3Example3" class="form-control form-control-lg" placeholder="Enter your name" />
          </div>

          <div class="form-outline mb-4">
            <label class="form-label mb-0" for="form3Example3">Username</label>
            <input type="email" id="form3Example3" class="form-control form-control-lg" placeholder="Enter a valid username" />
          </div>

          <div class="form-outline mb-3">
            <label class="form-label mb-0" for="form3Example4">Password</label>
            <input type="password" id="form3Example4" class="form-control form-control-lg" placeholder="Enter password" />
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="button" class="btn btn-success btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem">Sign Up</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="./" class="link-danger btn--signup">Sign In</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<?php
// include("../inc/footer.php");
?>