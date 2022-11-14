<?php
require "connect.php";

  ob_start();
  session_start();
  ob_end_clean();
  $namaakun = $_SESSION["username"];
  if(isset($_SESSION["username"]) && $namaakun == "Andi"){
  }else{
      echo header("location:index.php");
  }
  $username = $_SESSION["username"];

date_default_timezone_set("Asia/Makassar");

if(isset($_POST['submit'])){
  $nama = $_POST['nama'];
  $harga = $_POST['harga'];

  // files
  $file_spd = $_FILES['file_gambar']['name'];
  $x = explode('.',$file_spd);
  $ekstensi = strtolower(end($x));
  $file_baru = "$nama.$ekstensi";
  $tmp = $_FILES['file_gambar']['tmp_name'];
  
  if(move_uploaded_file($tmp, 'assets/'.$file_baru)){
    $tanggal = date("Y-m-d H:i:s");
    $query = mysqli_query($db,"INSERT INTO product (nama_product,harga_product,gambar_product,waktu_up) VALUES('$nama', '$harga','$file_baru','$tanggal')");
    if($query){
    echo "<script>
      alert('Berhasil Ditambah');
      document.location.href = 'admin.php';
    </script>";
    } 
    else {
    echo error_log ("tambah data error");
    }
  }
  else{
    echo "Gagal Upload File";
  }

}
?> 