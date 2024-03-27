<?php
require_once('../services/list_entity.php');
$stock = list_entity_stock();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NoSleep - Shop</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>
<body>

    <div class="titulo">
        <a href="../index/index.html"><img src="../img_logo/Destaques_01.png" alt=""></a>
    </div>

    <nav>
        <div class="filter_bar">
            <div>
                <ul class="menu">
                    <li><a href="../shop/shoes/index.php"         >Shoes         </a></li>
                    <li><a href="../shop/tshirt/index.php"        >T-shirts      </a></li>
                    <li><a href="../shop/caps/index.php"          >Caps          </a></li>
                    <li><a href="../shop/sweatshirts/index.php"   >Sweatshirts   </a></li>
                    <li><a href="../shop/all_categories/index.php">All categories</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="stock_part">
        <?php foreach($stock as $stock): ?>
            <div class="stock_content">
                <div class="img_shop">
                    <img src="../img_logo/Destaques_01.png" alt="">
                </div>
                <div class="txt_shop">
                    <label for="" id="roupa1">ROUPA - ROUPA</label>
                </div>
            </div>
        <?php endforeach; ?>
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