<?php
session_start();

$id_user = $_SESSION['user'];

require_once('../services/cart/list_entity_index.php');

$cart = list_entity_cart($id_user);
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
                <img src="../img_logo/Destaques_02.png" alt="">
            </div>
            <div>
                <ul class="menu">
                    <li><a href="../shop/shoes/index.php"         >Shoes         </a></li>
                    <li><a href="../shop/tshirt/index.php"        >T-shirts      </a></li>
                    <li><a href="../shop/caps/index.php"          >Caps          </a></li>
                    <li><a href="../shop/sweatshirts/index.php"   >Sweatshirts   </a></li>
                    <li><a href="../shop/all_categories/index.php">All categories</a></li>
                </ul>
            </div>
            <div class="menu_perfil">
                <a href="">Emanuel Menezes</a>
            </div>
        </div>
    </nav>

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
                                        <a href="../shop/view_part/index.php?id=<?= $cart['idstock'] ?>">Selecionar Quantidade</a>
                                    <?php else: ?>
                                        <?= $cart['qntd_part'] ?>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if($cart['size'] === 'Selecionar Tamanho'): ?>
                                        <a href="../shop/view_part/index.php?id=<?= $cart['idstock'] ?>">Selecionar Tamanho</a>
                                    <?php else: ?>
                                        <?= $cart['size'] ?>
                                    <?php endif; ?>
                                </td>
                                <td><img src="../uploads/<?= $cart['picture'] ?>"></td>
                                <td><a href=""><i class="fa-solid fa-eye"></i></a><a id="trash" href="../routes/cart/delete.php?id=<?= $cart['idcart'] ?>"><i class="fa-solid fa-trash"></i></a></td>
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