<?php
session_start();

$id_user = $_SESSION['user'];

require_once('../services/orders/list_entity_orders.php');
require_once('../services/client/get_by_id_nav_cart.php');
require_once('../services/cart_payment/get_by_id.php');

$orders = list_entity_orders($id_user);

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
    <title>NoSleep - Orders</title>
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
        <h1>Information Orders</h1>
    </div>

    <div class='contents_center'>
        <div>
            <div class='cart_show'>
                <table>
                    <thead class='cart_show_up'>
                        <tr>
                            <th>id_order</th>
                            <th>zipcode_address</th>
                            <th>status</th>
                            <th>amount</th>
                            <th>reference</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <?php foreach($orders as $orders): ?>
                        <tbody class='cart_show_down'>
                            <tr>
                                <td><?= $orders['id_order'] ?></td>
                                <td><?= $orders['zipcode_address'] ?></td>
                                <td><?= $orders['status'] ?></td>
                                <td><?= $orders['amount'] ?></td>
                                <td><?= $orders['reference'] ?></td>
                                <td><a href="items/index.php?id=<?= $orders['id_order'] ?>"><i class="fa-solid fa-eye"></i></a></td>
                            </tr>
                        </tbody>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/5dc8345cee.js" crossorigin="anonymous"></script>

</body>
</html>