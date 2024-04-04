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
            <div style="color: white;">
                Emanuel Menezes
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
            <div class="part_size">
                <p>Escolha Tamanho</p>
                <input type="radio" name="" id="">P
                <input type="radio" name="" id="">M
                <input type="radio" name="" id="">G
                <input type="radio" name="" id="">GG
            </div>
            <hr>
            <div class="part_qntd">
                <p>Quantidade</p>
                <input type="number" name="" id="">
            </div>
            <hr>
            <div class="part_cart">
                <button>Adicionar ao Carrinho</button>
            </div>
            <hr>
        </div>
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
</body>
</html>