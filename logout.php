<?php
require "connect.php";
ob_start();
session_start();
ob_end_clean();
date_default_timezone_set("Asia/Makassar");
$tanggal = date("Y-m-d H:i:s");
$user = $_SESSION['user'];
$query = mysqli_query($db, "UPDATE riwayat_login SET waktu_logout ='$tanggal' WHERE nama_user='$user'");
if($query){
    echo " <script>
        alert('berhasil logout');
        document.location.href='index.php';
    </script>";
    session_unset();
    session_destroy();
}else{
    echo " <script>
    alert('gagal logout');
    document.location.href='login.php';
    </script>";
}
header('Location: index.php');
exit;