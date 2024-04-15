<?php
session_start();

require_once('../services/shop/list_entity_index.php');
require_once('../services/client/get_by_id.php');

if(!isset($_SESSION['user'])){
    header('/index.php');
    $client = get_by_id(0);
}else{
    $id_client = $_SESSION['user'];
    $client = get_by_id($id_client);
}

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

    <?php if($client['name'] != '' && $client['surname'] != ''): ?>
        <div class="title_login">
            <ul class="login">
                <li>
                    <a><?= $client['name'] . ' ' . $client['surname'] ?></a>
                    <ul>
                        <?php if($client['type'] == 2): ?>
                            <li><a href="../shop/index.php"                 >Shop</a></li>
                            <li><a href="../MANUAL-DA-IDENTIDADE-VISUAL.pdf">Lookbook</a></li>
                            <li><a href="../stock/index.php"                >Stock</a></li>
                            <li><a href="../employee/index.php"             >Employee</a></li>
                            <li><a href="../client/index.php"               >Clients</a></li>
                        <?php else: ?>
                            <li><a href="shoes/index.php"                                 >Shoes         </a></li>
                            <li><a href="tshirt/index.php"                                >T-shirts      </a></li>
                            <li><a href="caps/index.php"                                  >Caps          </a></li>
                            <li><a href="sweatshirts/index.php"                           >Sweatshirts   </a></li>
                            <li><a href="all_categories/index.php"                        >All categories</a></li>
                            <li><a href="../cart/index.php"                               >Cart</a></li>
                            <li><a href="../client/edit/index.php?id=<?= $client['id'] ?>">Configurações</a></li>
                        <?php endif; ?>
                        <li>
                            <form action="../routes/login/logout.php" method="POST">
                                <button>Sair</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    <?php else: ?>
        <div class="title_login_register">
            <a href="../login/index.php">Login/Register</a>
        </div>
    <?php endif; ?>

    <div class="title">
        <div class="title_img">
            <a href="../index/index.php"><img src="../img_logo/Destaques_01.png" alt=""></a>
        </div>
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