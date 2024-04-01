<?php
require_once('../services/stock/list_entity.php');
$stock = list_entity_stock();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="Latin1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NoSleep - Stock</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    
    <nav class="nav_menu">
        <div>
            <ul>
                <li><img src="../img_logo/Destaques_07 - Menu.png" alt=""></li>
                <div class="menu">
                    <li><a href="../shop/index.php">Shop</a></li>
                    <li><a href="../MANUAL-DA-IDENTIDADE-VISUAL.pdf">Lookbook</a></li>
                    <li><a href="index.php">Stock</a></li>
                    <li><a href="../employee/index.php">Employee</a></li>
                    <li><a href="../client/index.php">Clients</a></li>
                </div>
                <div class="menu_login">
                    <li><a href="">Emanuel Menezes</a></li>
                </div>
            </ul>
        </div>
    </nav>

    <div class='button_create'>
        <a href="create/index.php">Part Create</a>
    </div>

    <div class='client_show'>
        <table>
            <thead class='client_show_up'>
                <tr>
                    <td><strong>id</strong></td>
                    <td><strong>part_code</strong></td>
                    <td><strong>sector</strong></td>
                    <td><strong>type</strong></td>
                    <td><strong>subtype</strong></td>
                    <td><strong>material</strong></td>
                    <td><strong>line</strong></td>
                    <td><strong>color</strong></td>
                    <td><strong>details</strong></td>
                    <td><strong>size</strong></td>
                    <td><strong>employee</strong></td>
                    <td><strong>value</strong></td>
                    <td><strong>number parts</strong></td>
                    <td><strong>date register</strong></td>
                    <td><strong>picture</strong></td>
                    <td><strong>action</strong></td>
                </tr>
            </thead>
            <tbody class='client_show_down'>
                <?php foreach($stock as $stock): ?>
                <tr>
                    <td><?= $stock['id'] ?></td>
                    <td><?= $stock['part_code'] ?></td>
                    <td><?= $stock['sector'] ?></td>
                    <td><?= $stock['type'] ?></td>
                    <td><?= $stock['subtype'] ?></td>
                    <td><?= $stock['material'] ?></td>
                    <td><?= $stock['line'] ?></td>
                    <td><?= $stock['color'] ?></td>
                    <td><?= $stock['details'] ?></td>
                    <td><?= $stock['size'] ?></td>
                    <td><?= $stock['employee'] ?></td>
                    <td><?= $stock['value'] ?></td>
                    <td><?= $stock['qntd_part'] ?></td>
                    <td><?= $stock['dt_register'] ?></td>
                    <td><img src="../uploads/<?= $stock['picture'] ?>"></td>
                    <td><a href="edit/index.php?id=<?= $stock['id'] ?>">|Show| </a><a href="../routes/stock/delete.php?id=<?= $stock['id'] ?>">|Excluir| </a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    

    <script src="https://kit.fontawesome.com/5dc8345cee.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>