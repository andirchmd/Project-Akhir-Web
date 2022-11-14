<?php
require "connect.php";
ob_start();
session_start();
ob_end_clean();
$namaakun = $_SESSION["username"];
if(isset($_SESSION["username"]) && $namaakun == "Andi"){
$id = $_GET["id"];
$query = mysqli_query($db, "SELECT * FROM product WHERE id_product=$id");
$hasil = mysqli_fetch_array($query);
$filename = $hasil['gambar_product']; 
unlink("assets/".$filename); 

$result = mysqli_query($db, "DELETE FROM product WHERE id_product = $id");

if($result){
  echo "<script>
  alert('Berhasil Dihapus');
  document.location.href = 'admin.php';
</script>";
} else{
  echo "<script>
  alert('Data Gagal Dihapus');
  document.location.href = 'admin.php';
</script>";
}
}else{
    echo header("location:index.php");
}
