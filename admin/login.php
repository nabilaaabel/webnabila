<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    
    <div class="container">
        <img src="../image/coklatt.png">
        <div class="login">
            <!-- cek pesan notifikasi -->
    <?php
    // if (isset($_GET['pesan'])) {
    //     if ($_GET['pesan'] == "gagal") {
    //         echo "Login gagal! username dan password salah!";
    //     } else if ($_GET['pesan'] == "logout") {
    //         echo "Anda telah berhasil logout";
    //     } else if ($_GET['pesan'] == "belum_login") {
    //         echo "Anda harus login untuk mengakses halaman admin";
    //     }
    // }
    ?>
            <form action="login/cek_login.php" method="post">
                <h1>Login</h1>
                <hr>
                <p>Silahkan Login Terlebih Dahulu</p>
                <label for="">Username</label>
                <input type="text" name="username"
                placeholder="example@gmail.com">
                <label for="">Password</label>
                <input type="password" name="password"
                placeholder="Password">
                <button type="submit">Login</button>
                <!-- <p><a href="#">Forgot Password?</a></p> -->
                <div class="right">
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>