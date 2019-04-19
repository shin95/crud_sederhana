<?php
  // buat koneksi dengan database mysql
  $host = "bdgweb1.database.windows.net";
  $user = "admin123";
  $pass = "B4andung_95";
  $name = "DbWeb";
  $link = mysqli_connect($host,$user,$pass,$name);
  //periksa koneksi, tampilkan pesan kesalahan jika gagal
  if(!$link){
    die ("Koneksi dengan database gagal: ".mysql_connect_errno().
    " - ".mysql_connect_error());
  }
?>
