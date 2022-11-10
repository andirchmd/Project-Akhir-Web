<?php
  $host = "localhost"; 
  $user = "root";
  $pass = "";
  $nama_db = "polygon"; //nama database
  $db = mysqli_connect($host,$user,$pass,$nama_db); //pastikan urutan nya seperti ini, jangan tertukar

  if(!$db){ //jika tidak terkoneksi maka akan tampil error
    die ("Koneksi dengan database gagal: ".mysql_connect_error());
  }
?>