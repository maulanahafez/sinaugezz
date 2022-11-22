<?php
include("../config/connect.php");
session_start();
session_unset();
session_destroy();
?>
<script>
  alert("Anda Berhasil Sign Out");
  document.location = "/sinaugezz/";
</script>