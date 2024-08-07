<?php
session_start();

if(!isset($_SESSION['user'])){
    $id_user = 0;
}else{
    $id_user = $_SESSION['user'];
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="Latin1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NoSleep</title>
    <link rel="stylesheet" href="../../css/index/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>

    <div id="modal" class="modal">
        
        <div class="content">
            <div class="contact">
                <ul>
                    <li><i class="fa-brands fa-whatsapp"></i><a href="https://wa.me/+5515991693000">WhatsApp: +55 (15)99169-3000</a></li>
                    <li><i class="fa-regular fa-envelope"></i>E-mail: NoSleep@gmail.com</li>
                </ul>
            </div>
            <div class="footer_modal">
                <a href="#" class="footer-btn-close">Fechar</a>
            </div>
        </div>

    </div>
    
    <div class="title">
        <img src="../../img/img_logo/Destaques_01.png" alt="">
    </div>

    <div class="subtitle">
        <p>Street Wear</p>
    </div>

    <div class="menu">
        <ul>
            <li><a href="../shop/index.php"                    >Shop</a></li>
            <?php if($id_user == 0): ?>
                <li><a href="../auth/login/index.php"          >Login</a></li>
            <?php endif; ?>
            <li><a href="../../MANUAL-DA-IDENTIDADE-VISUAL.pdf">Lookbook</a></li>
            <li><a href="#modal"                               >Contact</a></li>
            <li><a href=""                                     >Info</a></li>
            <?php if($id_user != 0): ?>
                <li>
                    <form action="../../routes/login/logout.php" method="POST">
                        <button>Sair</button>
                    </form>
                </li>
            <?php endif; ?>
        </ul>
    </div>

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