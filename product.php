<?php
    ob_start();
    session_start();
    ob_end_clean();
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>polygonbikes.com</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
</head>

<body>
    <!--Header-->
    <div class="medsos">
        <div class="container">
            <ul>
                <li><a href="https://web.facebook.com/polygonbikesid"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="https://www.youtube.com/user/PolygonCycleID"><i class="fa-brands fa-youtube"></i></a></li>
                <li><a href="https://www.instagram.com/polygonbikesid/?hl=id"><i class="fa-brands fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
    <header>
        <div class="container" style="">
            <h1><img src="assets/logo_polygon-removebg-preview.png" alt="kosong"></h1>
            <ul class="navbar">
                <li><a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a></li>
                <li class="active"><a href="product.php"><i class="fa fa-fw fa-bicycle"></i> Product</a></li>
                <?php
                if(isset($_SESSION["username"])){
                    $nama = $_SESSION["username"];?>
                        <?php if($nama == "Andi"){?>
                        <li><a href="admin.php"><i class="fa fa-fw fa-tachometer"></i>Dashboard</a></li>
                        <?php }?>
                <li><a href="#"><i class="fa fa-fw fa-user"></i><?=ucfirst($nama)?></a></li>
                <li><a href="logout.php"><i class="fa fa-fw fa-sign-out"></i>Logout</a></li>
                <?php }else{?>
                <li><a href="login.php"><i class="fa fa-fw fa-user"></i>Login</a></li>
                <?php }?>
                <li><a href="#"><i class="bi-brightness-high-fill" id="toggleDark"></i></a></li>
            </ul>
        </div>
    </header>

    <!-- product -->
    <section class="">
        <!-- <div class="container"> -->
            <div id="jasa" class="maincard">
            <h2>BIKES</h2>
                <?php
                    require 'connect.php';
                    $result = mysqli_query($db, "SELECT * FROM product order by id_product asc");
                    $i = 0;            
                    while($row = mysqli_fetch_assoc($result)){$i++;
                ?>
                <div class="card">
                    <img src="assets/<?=$row['gambar_product'];?>" class="content" width="350px"/>
                    <div class="deskrip">
                        <p><?=$row['nama_product'];?><br>Rp. <?=number_format($row['harga_product'],0,".",",");?>,-</p>
                    </div>
                    <a href="buy.php?id=<?php echo $row['id_product'] ?>"><button class="button-50" role="button" name="button">Beli Sekarang</button></a>
                </div>
                <?php
                }
                ?>
            </div>
        <!-- </div> -->
    </section>

    <!--Footer-->
    <!-- <footer>
        <div class="">
            <small>Copyright &copy; 2022 - Polygon, All Right Reserved.</small>
        </div>
    </footer> -->
    <script src="js/script.js"></script>
</body>

</html>