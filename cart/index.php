<?php
session_start();

$id_user = $_SESSION['user'];

require_once('../services/cart/list_entity_index.php');
require_once('../services/client/get_by_id_nav_cart.php');
require_once('../services/cart_payment/get_by_id.php');

$cart         = list_entity_cart($id_user);

// $cart_payment = get_cart_payment_by_id($id_cart); esse usa pro if do botao

if(!isset($_SESSION['user'])){
    header('Location: ../../login/index.php');
    exit;
}else{
    $id_client = $_SESSION['user'];
    $client    = get_by_id($id_client);
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
                <a href="../index/index.php"><img src="../img_logo/Destaques_07 - Menu.png" alt=""></a>
            </div>

            <?php if($client['name'] != '' && $client['surname'] != ''): ?>
                <div class="title_login">
                    <ul class="login">
                        <li>
                            <a><?= $client['name'] . ' ' . $client['surname'] ?></a>
                            <ul>
                                <?php if($client['type'] == 2): ?>
                                    <li><a href="../shop/index.php">Shop</a></li>
                                    <li><a href="../MANUAL-DA-IDENTIDADE-VISUAL.pdf">Lookbook</a></li>
                                    <li><a href="../stock/index.php">Stock</a></li>
                                    <li><a href="../employee/index.php">Employee</a></li>
                                    <li><a href="../client/index.php">Clients</a></li>
                                <?php else: ?>
                                    <li><a href="../shop/shoes/index.php"                              >Shoes         </a></li>
                                    <li><a href="../shop/tshirt/index.php"                             >T-shirts      </a></li>
                                    <li><a href="../shop/caps/index.php"                               >Caps          </a></li>
                                    <li><a href="../shop/sweatshirts/index.php"                        >Sweatshirts   </a></li>
                                    <li><a href="../shop/all_categories/index.php"                     >All categories</a></li>
                                    <li><a href="../shop/cart/index.php">Cart</a></li>
                                    <li><a href="../shop/client/edit/index.php?id=<?= $client['id'] ?>">Configurações</a></li>
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
                    <a href="../../login/index.php">Login/Register</a>
                </div>
            <?php endif; ?>

        </div>
    </nav>

    <div class="title_cart">
        <h1>Information Cart</h1>
    </div>

    <div class="subtitle_cart">
        <p>Here you choose quantity, size and whether you are going to buy the piece</p>
    </div>

    <div class='contents_center'>
        <div>
            <div class='cart_show'>
                <table>
                    <thead class='cart_show_up'>
                        <tr>
                            <th>Part Code</th>
                            <th>Sector</th>
                            <th>Type</th>
                            <th>Subtype</th>
                            <th>Material</th>
                            <th>Color</th>
                            <th>Details</th>
                            <th>Value</th>
                            <th>Amount</th>
                            <th>Size</th>
                            <th>Picture</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php foreach($cart as $cart): ?>
                        <tbody class='cart_show_down'>
                            <tr>
                                <td><?= $cart['part_code'] ?></td>
                                <td><?= $cart['sector'] ?></td>
                                <td><?= $cart['type'] ?></td>
                                <td><?= $cart['subtype'] ?></td>
                                <td><?= $cart['material'] ?></td>
                                <td><?= $cart['color'] ?></td>
                                <td><?= $cart['details'] ?></td>
                                <td><?= $cart['value'] ?></td>
                                <td>
                                    <?php if($cart['qntd_part'] === 'Selecionar Quantidade'): ?>
                                        <a href="../shop/view_part/edit/index.php?id_cart=<?= $cart['id_cart'] ?>&id_peca=<?= $cart['id_stock'] ?>">Selecionar Quantidade</a>
                                    <?php else: ?>
                                        <?= $cart['qntd_part'] ?>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if($cart['size'] === 'Selecionar Tamanho'): ?>
                                        <a href="../shop/view_part/edit/index.php?id_cart=<?= $cart['id_cart'] ?>&id_peca=<?= $cart['id_stock'] ?>">Selecionar Tamanho</a>
                                    <?php else: ?>
                                        <?= $cart['size'] ?>
                                    <?php endif; ?>
                                </td>
                                <td><img src="../uploads/<?= $cart['picture'] ?>"></td>
                                <td>
                                    <a href="../shop/view_part/edit/index.php?id_cart=<?= $cart['id_cart'] ?>&id_peca=<?= $cart['id_stock'] ?>"><i class="fa-solid fa-eye"></i></a>
                                        
                                    <a id="cart_plus" href="../routes/cart_payment/save.php?id=<?= $cart['id_cart'] ?>"><i class="fa-solid fa-cart-plus"></i></a>
                                
                                    <a id="trash" href="../routes/cart/delete.php?id=<?= $cart['id_cart'] ?>"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    <?php endforeach; ?>
                </table>
            </div>
            <div class="continue">
                <a href="../payment/cart/index.php" type="button" class="btn btn-primary">Continue</a>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/5dc8345cee.js" crossorigin="anonymous"></script>

</body>
</html>