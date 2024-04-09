<?php
require_once('../../services/stock/get_by_id.php');
require_once('../../services/stock/list_entity_viewpart.php');
$id = $_GET['id'];
$viewpart = get_stock_by_id($id);
$stock = list_entity_viewpart($id);
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
    <nav>
        <div class="filter_bar">
            <div class="img_logo">
                <img src="../../img_logo/Destaques_02.png" alt="">
            </div>
            <div>
                <ul class="menu">
                    <li><a href="../../shop/shoes/index.php"         >Shoes         </a></li>
                    <li><a href="../../shop/tshirt/index.php"        >T-shirts      </a></li>
                    <li><a href="../../shop/caps/index.php"          >Caps          </a></li>
                    <li><a href="../../shop/sweatshirts/index.php"   >Sweatshirts   </a></li>
                    <li><a href="../../shop/all_categories/index.php">All categories</a></li>
                </ul>
            </div>
            <div class="menu_perfil">
                <a href="">Emanuel Menezes</a>
            </div>
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
                    <div class="glow-on-hover">
                        <button type="submit">
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
                    <a href="index.php?id=<?= $stock['id'] ?>"><img src="../../uploads/<?= $stock['picture'] ?>" alt=""></a>
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