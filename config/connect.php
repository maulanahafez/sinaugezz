<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
$conn = mysqli_connect("localhost", "root", "", "sinaugezz_db");

if($conn){
  echo ("Koneksi Berhasil");
}else{
  echo ("Gagal");
}
?>