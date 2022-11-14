<?php
    require "connect.php";
    ob_start();
    session_start();
    ob_end_clean();
    if(isset($_SESSION["username"])){
    }else{
        echo "<script>
        alert('Silahkan Login Terlebih Dahulu');
        document.location.href = 'product.php';
      </script>";
    }
    
?>