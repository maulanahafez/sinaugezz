<?php
session_start();
echo "{$_SESSION['username']}";
?>
<br>
<?php
echo "{$_SESSION['password']}";
?>
<button>
  <a href="/sinaugezz/">Ke Halaman Utama</a>
</button>