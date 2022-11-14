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
    <title>Admin</title>
    <link rel="stylesheet" href="css/landing.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
</head>

<body>
<header>
        <div class="container">
            <h1><a href="index.php"><img src="https://www.polygonbikes.com/wp-content/themes/polygon2021/assets/images/logo-white.png" alt="" srcset=""></a></h1>
            <ul class="navbar">
                <li><a href="admin.php"><i class="fa fa-fw fa-bicycle"></i> Product</a></li>
                <li><a href="historyUser.php"><i class="fa fa-fw fa-history"></i> Riwayat Login</a></li>
                <li><a href="historyProduct.php"><i class="fa fa-fw fa-list"></i> Riwayat Pembelian</a></li>
                <li><a href="#"><i class="fa fa-fw fa-user"></i>Admin</a></li>
                <li><a href="logout.php"><i class="fa fa-fw fa-sign-out"></i> Logout</a></li>
            </ul>
        </div>
    </header>
    <form action="" method="post" class="form">
        <input type="text" class="cari" name="keyword" placeholder="Pencarian" autofocus autocomplete="off">
        <button type="submit" class="logo-cari" name="cari"><i class="fa-solid fa-magnifying-glass"></i></button>
        <a href="index.php" class="pencet"><button name="cari">Refresh</button></a>
    </form>
    <div class="list-table center" style="overflow-x: auto;">
        <table>
            <thead>
                <tr>
                    <th colspan="5" class="thead">
                        <h3 class="center">Daftar Produk</h3>
                    </th>
                    <th style="width: 20px;" colspan="2">
                        <a href="addproduct.php" class="tambah">Tambah</a>
                    </th>
                </tr>
                <tr>
                    <th>No</th>
                    <th nowrap>Nama Produk</th>
                    <th>Harga Produk</th>
                    <th>Gambar Produk</th>
                    <th>Tanggal</th>
                    <th colspan="2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require "connect.php";
                $result = mysqli_query($db,"SELECT * FROM product");
                if (isset($_POST["cari"])) {
                    $result = mysqli_query($db, "SELECT * FROM product WHERE 
                                        nama_product LIKE '%".$_POST['keyword']."%' OR
                                        gambar_product LIKE '%".$_POST['keyword']."%' OR
                                        waktu_up LIKE '%".$_POST['keyword']."%'
                                        ");
                    
                }
                $i = 1;
                while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td style="text-align: center;"><?= $i ?></td>
                    <td nowrap><?=$row['nama_product']?></td>
                    <td style="text-align: center;">Rp. <?=number_format($row['harga_product'],0,",",".")?>,-</td>
                    <td style="text-align: center;"><img src="<?="assets/".$row['gambar_product'] ?>" width="180px" ></td>
                    <td style="text-align: center;"><?=$row['waktu_up']?></td>
                    <td class="edit">
                        <a href="editproduct.php?id=<?php echo $row['id_product'] ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                            </svg>
                        </a>
                    </td>
                    <td class="hapus">
                        <a href="delete.php?id=<?php echo $row['id_product'] ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                            </svg>
                        </a>
                    </td>
                </tr>
                <?php
                 $i++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>