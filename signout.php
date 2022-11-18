<?php
session_start();
session_unset();
session_destroy();
?>
<script>
  alert("Berhasil Sign Out");
  document.location = "/sinaugezz";
</script>