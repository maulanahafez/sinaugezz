<?php
include("../../config/connect.php");
$id = $_GET['id'];
$sql = "delete from user where username='$id'";
$query = mysqli_query($conn, $sql);
if ($query) {
?>
  <script>
    alert("Data berhasil dihapus");
    document.location = "./";
  </script>
<?php
}
?>