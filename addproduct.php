<?php
    ob_start();
    session_start();
    ob_end_clean();
    $namaakun = $_SESSION["username"];
    if(isset($_SESSION["username"]) && $namaakun == "Andi"){
    }else{
        echo header("location:index.php");
    }
    $username = $_SESSION["username"];
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Tambah Produk</title>
</head>
<body>
    <div class="fullv">
    <div class="container">

        <div class="judul">
            <h2>Tambah Produk</h2>
        </div>
        
        <div class="form">
            <form action="addproc.php" method="post" enctype="multipart/form-data">
                <label for="nama">Nama Produk<span style="color: red">*</span></label><br>
                <input type="text" name="nama" class="input" placeholder="Masukkan Nama Produk" autofocus required><br>

                <label for="harga">Harga Produk<span style="color: red">*</span></label><br>
                <input type="number" name="harga" min="0" class="input" placeholder="Masukkan Harga Produk" required><br>

                <label for="file_gambar">Pilih File Gambar<span style="color: red">*</span></label><br>
                <input type="file" name="file_gambar" class="input" accept="image/png, image/gif, image/jpeg" required><br>

                <input type="submit" name="submit" class="submit" value="Tambahkan"><br><br>
            </form>
        
        </div>
    </div>
    </div>
</body>
</html>