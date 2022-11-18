<?php
include("../config/connect.php");
session_start();
?>
<p>
  <a href="../">
    <button>
      Ke Landing Page
    </button>
  </a>
</p>
<p><?= $_SESSION['username'] ?></p>
<p><?= $_SESSION['password'] ?></p>