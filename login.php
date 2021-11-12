<?php
 if(isset($_GET['pesan'])){
  if($_GET['pesan']=="gagal"){
    $message = "Username / Password Salah!";
    echo "<script type='text/javascript'>alert('$message');</script>";
  }
 }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="./loginstyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Login | Cun Book Store</title>
    <link rel = "icon" type = "image/png" href = "./img/letter-c.png">
</head>
<body>
    <section class="side">
        <img src="./img/digital-library.png" alt="">
    </section>

    <section class="main">
        <div class="login-container">
            <p class="title">Selamat Datang!</p>
            <div class="separator"></div>
            <p class="welcome-message">Dengan mengisi formulir login dibawah, Anda dapat mengakses seluruh layanan kami.</p>

            <form action="cek_login.php" method="POST" class="login-form">
                <div class="form-control">
                    <input type="text" name="username" placeholder="Username" required="required">
                    <i class="fas fa-user"></i>
                </div>
                <div class="form-control">
                    <input type="password" name="password" placeholder="Password" required="required">
                    <i class="fas fa-lock"></i>
                </div>

                <button class="submit" value="LOGIN">Login</button>
            </form>
        </div>
    </section>
    
</body>
</html>