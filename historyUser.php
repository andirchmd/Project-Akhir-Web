<?php
    ob_start();
    session_start();
    ob_end_clean();
    if(isset($_SESSION["username"])){
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
            <h1><img src="https://www.polygonbikes.com/wp-content/themes/polygon2021/assets/images/logo-white.png" alt="" srcset=""></h1>
            <ul class="navbar">
                <li><a href="admin.php"><i class="fa fa-fw fa-bicycle"></i> Product</a></li>
                <li><a href="historyUser.php"><i class="fa fa-fw fa-history"></i> Riwayat Login</a></li>
                <li><a href="#"><i class="fa fa-fw fa-user"></i>Admin</a></li>
                <li><a href="logout.php"><i class="fa fa-fw fa-sign-out"></i> Logout</a></li>
            </ul>
        </div>
    </header>
    <div class="list-table center" style="overflow-x: auto;">
        <table>
            <thead>
                <tr>
                    <th colspan="4" class="thead">
                        <h3 class="center">Riwayat Login</h3>
                    </th>
                </tr>
                <tr>
                    <th>No</th>
                    <th nowrap>Nama Pengguna</th>
                    <th>Waktu Login</th>
                    <th>Waktu Logout</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require "connect.php";
                $query = mysqli_query($db,"SELECT * FROM riwayat_login");
                $i = 1;
                while($row = mysqli_fetch_assoc($query)){
                ?>
                <tr>
                    <td style="text-align: center;"><?= $i ?></td>
                    <td nowrap><?=$row['nama_user']?></td>
                    <td style="text-align: center;"><?=$row['waktu_login']?></td>
                    <td style="text-align: center;"><?=$row['waktu_logout']?></td>
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