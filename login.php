<?php
    require "connect.php";
    ob_start();
    session_start();
    ob_end_clean();
    if(isset($_SESSION["username"])){
        echo header("location:admin.php");
    }else{

  if(isset($_POST['submit'])){     

  $user = $_POST['user'];
  $password = $_POST['password'];
  $query = mysqli_query($db,"SELECT * FROM akun WHERE username = '$user' OR email ='$user'");
  $result = mysqli_fetch_assoc($query);
  $username = $result['username'];
  $name = $result['nama'];
  if(password_verify($password,$result['password'])){
    $_SESSION['username']=$username;
    $_SESSION['user']=$name;
    date_default_timezone_set("Asia/Makassar");
    $tanggal = date("Y-m-d H:i:s");
    $queryhistory = mysqli_query($db,"INSERT INTO riwayat_login (nama_user, waktu_login) VALUES('$username', '$tanggal')");
    if($queryhistory){
        echo " <script>
            alert('selamat datang $username');
            document.location.href='admin.php';
        </script>";
    }else{
        echo " <script>
        alert('gagal tambah riwayat');
        document.location.href='login.php';
        </script>";
    }
        
} else {  
    echo " <script>
       alert('username dan password salah');
       document.location.href='login.php';
       </script>";
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
    <title>Login</title>
</head>
<body>
    <div class="container login">
        <div class="logo">
            <img src="assets/logo.png" alt="logo polygon" width="225px">
        </div>
        <div class="form-login">
            <h3>Login</h3>
            <form action="" method="post">
                <input type="text" name="user" placeholder="email atau username" class="input">
                <input type="password" name="password" placeholder="password" class="input">

                <input type="submit" name="submit" value="Login" class="submit"><br><br>
            </form>

            <p>Belum punya akun?
                <a href="register.php">Register</a>
            </p>
        </div>
    </div>
</body>
</html>