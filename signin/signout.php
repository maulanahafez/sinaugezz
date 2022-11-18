<?php
include("../config/connect.php");
session_start();
session_unset();
session_destroy();
?>
<script>
  alert("anda logout");
  document.location = "../";
</script>