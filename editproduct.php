<?php
require "connect.php";

ob_start();
session_start();
ob_end_clean();
if(isset($_SESSION["username"])){
}else{
    echo header("location:index.php");
}
$username = $_SESSION["username"];

if(isset($_GET['id'])){
    $query = mysqli_query($db, "SELECT * FROM product WHERE id_product=$_GET[id]");
    $result = mysqli_fetch_array($query);
    $nama = $result['nama_product'];
    $harga = $result['harga_product'];
    $gambar = $result['gambar_product'];
}

if(isset($_POST['submit'])){
    if($_FILES['file_gambar']['size'] == 0 ){
        $tanggal = date("Y-m-d H:i:s");
        $query = mysqli_query($db, "UPDATE product SET nama_product='$_POST[nama]', harga_product ='$_POST[harga]', waktu_up ='$tanggal' WHERE id_product='$_GET[id]'");
          if($query){
              echo "<script>
              alert('Berhasil Diubah');
              document.location.href = 'admin.php';
            </script>";
          } else {
              echo "<script>
              alert('Gagal Diubah');
              document.location.href = 'admin.php';
            </script>";
          }
    }else{
        $file_prod = $_FILES['file_gambar']['name'];
        $x = explode('.',$file_prod);
        $ekstensi = strtolower(end($x));
        $file_baru = "$nama.$ekstensi";
        $tmp = $_FILES['file_gambar']['tmp_name'];
        if(move_uploaded_file($tmp, 'assets/'.$file_baru)){
            $filename = $result['gambar_product']; 
            unlink("assets/".$filename); 
            date_default_timezone_set("Asia/Makassar");
            $tanggal = date("Y-m-d H:i:s");
            $query = mysqli_query($db, "UPDATE product SET nama_product='$_POST[nama]', harga_product ='$_POST[harga]', gambar_product ='$file_baru', waktu_up ='$tanggal' WHERE id_product='$_GET[id]'");
            if($query){
                echo "<script>
                alert('Berhasil Diubah');
                document.location.href = 'admin.php';
              </script>";
            } else {
                echo "<script>
                alert('Gagal Diubah');
                document.location.href = 'admin.php';
              </script>";
            }
        } else {
            echo error_log ("tambah data error");
            echo "<script>
            alert('Gagal Diubah');              </script>";
          }
    }
}

?>

    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Ubah Produk</title>
</head>
<body>
    <div class="fullv">
    <div class="container">

        <div class="judul">
            <h2>Ubah Produk</h2>
        </div>
        
        <div class="form">
            <form action="" method="post" enctype="multipart/form-data">
                <label for="nama">Nama Produk</label><br>
                <input type="text" name="nama" class="input" placeholder="Masukkan Nama Produk" value='<?=$nama ?>' required autofocus><br>

                <label for="harga">Harga Produk</label><br>
                <input type="number" min="0" name="harga" class="input" required placeholder="Masukkan Harga Produk" value='<?=$harga ?>'><br>

                <label for="file_gambar">Pilih File Gambar (optional)</label><br>
                <input type="file" name="file_gambar" class="input" accept="image/png, image/gif, image/jpeg"><br>

                <input type="submit" name="submit" class="submit" value="Tambahkan"><br><br>
            </form>
        
        </div>
    </div>
    </div>
</body>
</html>