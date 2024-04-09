<?php
session_start();

if(isset($_SESSION['user'])){
    header('Location: ../shop/index.php');

    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="Latin1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NoSleep - Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    
    <div class="titulo">
        <img src="../img_logo/Destaques_01.png" alt="">
    </div>

    <div class="subtitulo">
        <p>LOGIN</p>
    </div>

    <form action="../routes/login/login.php" method="post">

        <div class="login">
            <input type="text" placeholder="Email" name='email'>
            <br>
            <input type="password" placeholder="Password" name='password'>
            
            <div class="login_button">
                <div class="glow-on-hover">
                    <button type='submit'>Login</button>
                </div>
            </div>
            
            <div class="login_register">
                <div class="glow-on-hover">
                    <a href="">Forgot password?</a>
                </div>
                <div class="glow-on-hover">
                    <a href='register/index.html'>Register</a>
                </div>
            </div>
        </div>
    </form>

    <footer class="footer">
        <div class="rede_social">
            <ul>
                <li><a href="https://www.instagram.com/no.sleep.boyz?igsh=MWVsOHk4ZjIwY2hrOA=="><i class="fa-brands fa-instagram"></i></a></li>
            </ul>
        </div>
        <div class="info">
            <p>NoSleep, trust and quality.</p>
        </div>
        <div class="copy">
            <p>&copy;NoSleep</p>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/5dc8345cee.js" crossorigin="anonymous"></script>

</body>
</html>