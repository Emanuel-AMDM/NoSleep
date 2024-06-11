<?php
session_start();
require_once('../../services/stock/get_by_id.php');
require_once('../../services/stock/list_entity_viewpart.php');
require_once('../../services/client/get_by_id_nav_viewpart.php');
$id = $_GET['id'];
$viewpart = get_stock_by_id($id);
$stock = list_entity_viewpart($id);

if(!isset($_SESSION['user'])){
    header('/index.php');
    $client = get_by_id(0);
}else{
    $id_client = $_SESSION['user'];
    $client = get_by_id($id_client);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="Latin1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NoSleep - View</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    
    <nav class="nav_menu">
        <div class="nav_flex">
            <div>
                <a href="../../index/index.php"><img src="../../img_logo/Destaques_07 - Menu.png" alt=""></a>
            </div>

            <?php if($client['name'] != '' && $client['surname'] != ''): ?>
                <div class="title_login">
                    <ul class="login">
                        <li>
                            <a><?= $client['name'] . ' ' . $client['surname'] ?></a>
                            <ul>
                                <?php if($client['type'] == 2): ?>
                                    <li><a href="../../shop/index.php">Shop</a></li>
                                    <li><a href="../../MANUAL-DA-IDENTIDADE-VISUAL.pdf">Lookbook</a></li>
                                    <li><a href="../../stock/index.php">Stock</a></li>
                                    <li><a href="../../employee/index.php">Employee</a></li>
                                    <li><a href="../../client/index.php">Clients</a></li>
                                <?php else: ?>
                                    <li><a href="../../shop/shoes/index.php"                         >Shoes         </a></li>
                                    <li><a href="../../shop/tshirt/index.php"                        >T-shirts      </a></li>
                                    <li><a href="../../shop/caps/index.php"                          >Caps          </a></li>
                                    <li><a href="../../shop/sweatshirts/index.php"                   >Sweatshirts   </a></li>
                                    <li><a href="../../shop/all_categories/index.php"                >All categories</a></li>
                                    <li><a href="../../cart/index.php">Cart</a></li>
                                    <li><a href="../../client/edit/index.php?id=<?= $client['id'] ?>">Configurações</a></li>
                                <?php endif; ?>
                                <li>
                                    <form action="../../routes/login/logout.php" method="POST">
                                        <button>Sair</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            <?php else: ?>
                <div class="title_login_register">
                    <a href="../../login/index.php">Login/Register</a>
                </div>
            <?php endif; ?>

        </div>
    </nav>

    <div class="content_cart">
        <div>
            <div class="part_cart_title">
                <h1><?php echo $viewpart['type'] . ' ' . $viewpart['sector'] .  ' ' . $viewpart['subtype'] .  ' ' . $viewpart['color'] ?></h1>
            </div>
            <div class="part_cart_img">
                <img src="../../uploads/<?= $viewpart['picture'] ?>" alt="">
            </div>
        </div>
        <form action="../../routes/cart/save.php?id=<?= $viewpart['id'] ?>" method="post">
            <div class="part_info">
                <hr>
                <div class="part_value_padding">
                    <div class="part_value">
                        <p id="text">Value:</p>
                        <p id="value"><?php echo 'R$ ' . number_format($viewpart['value'], 2) ?></p>
                        <div class="part_value_incash">
                            <p id="value"><?php echo 'R$ ' . number_format(($viewpart['value'] - ($viewpart['value'] / 10)), 2) ?></p><p> in cash</p>
                        </div>
                    </div>
                    <div>
                        <p>up to 12 interest-free installments of <?php echo 'R$ ' . number_format(($viewpart['value'] / 12), 2) ?></p>
                    </div>
                </div>
                <hr>
                <div class="part_size" required>
                    <?php if($viewpart['pp'] > 0 || $viewpart['p'] > 0 || $viewpart['m'] > 0 || $viewpart['g'] > 0 || $viewpart['gg'] > 0 || $viewpart['xgg'] > 0): ?>
                        <?php if($viewpart['pp'] > 0): ?>
                            <div>
                                <input type="radio" name="size" value="1"> PP
                            </div>
                        <?php endif; ?>
                        <?php if($viewpart['p'] > 0): ?>
                            <div>
                                <input type="radio" name="size" value="2"> P
                            </div>
                        <?php endif; ?>
                        <?php if($viewpart['m'] > 0): ?>
                            <div>
                                <input type="radio" name="size" value="3"> M
                            </div>
                        <?php endif; ?>
                        <?php if($viewpart['g'] > 0): ?>
                            <div>
                                <input type="radio" name="size" value="4"> G
                            </div>
                        <?php endif; ?>
                        <?php if($viewpart['gg'] > 0): ?>
                            <div>
                                <input type="radio" name="size" value="5"> GG
                            </div>
                        <?php endif; ?>
                        <?php if($viewpart['xgg'] > 0): ?>
                            <div>
                                <input type="radio" name="size" value="6"> XGG
                            </div>
                        <?php endif; ?>
                    <?php else: ?>
                        <div class="sold_off">
                            <label for="">SOLD OFF</label>
                        </div>
                    <?php endif; ?>
                </div>
                <hr>
                <div class="part_qntd">
                    <p>Quantidade</p>
                    <input type="number" name="qntd_part" id="">
                </div>
                <hr>
                <div class="part_cart">
                    <div>
                        <button type="submit" class="glow-on-hover">
                            <div>
                                <label for=""><i class="fa-solid fa-cart-plus"></i> Adicionar ao Carrinho</label>
                            </div>
                        </button>
                    </div>
                </div>
                <hr>
            </div>
        </form>
    </div>

    <div class="more_part">
        <div class="more_part_title">
            <p><strong>Produtos Relacionados</strong></p>
        </div>
    </div>

    <div class="related_products">
        <?php foreach($stock as $stock): ?>
            <div class="related_products_border">
                <div class="related_products_img">
                    <a href="index.php?id=<?= $stock['id'] ?>&id_peca=<?= $stock['id'] ?>"><img src="../../uploads/<?= $stock['picture'] ?>" alt=""></a>
                </div>
                <div class="related_products_info">
                    <p><?php echo $stock['type'] . ' ' . $stock['sector'] .  ' ' . $stock['subtype'] .  ' ' . $stock['color'] ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <footer>
        
    </footer>

    <script src="https://kit.fontawesome.com/5dc8345cee.js" crossorigin="anonymous"></script>
</body>
</html>