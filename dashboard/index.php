<?php
include("./inc/header.php");
session_start();
if (!$_SESSION) {
  header("location:../signin/");
}elseif($_SESSION['username']!="admin"){
  header("location:../");
}
?>
<div class="col py-3">
  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti qui, illum libero ullam veniam ipsum sit deleniti laborum ipsam beatae temporibus recusandae fugiat facere, odit maxime in ex rem enim reprehenderit quam unde vero error pariatur. Maxime ratione ullam optio!
</div>
<?php
include("./inc/footer.php");
?>