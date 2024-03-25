<?php
require_once('../services/list_entity.php');
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
                    <li><a href="../shop/index.html">Shop</a></li>
                    <li><a href="../MANUAL-DA-IDENTIDADE-VISUAL.pdf">Lookbook</a></li>
                    <li><a href="index.php">Stock</a></li>
                    <li><a href="../employee/index.html">Employee Registration</a></li>
                    <li><a href="index.php">Clients list</a></li>
                </div>
                <div class="menu_login">
                    <li><a href="">Emanuel Menezes</a></li>
                    <li><img src="../img/user.png" alt=""></li>
                </div>
            </ul>
        </div>
    </nav>

    <div class='button_create'>
        <a href="create/index.php">Part Create</a>
    </div>

    <div class='client_show'>
        <table>
            <thead class='client_show_title'>
                <tr>
                    <td>id</td>
                    <td>part_code</td>
                    <td>sector</td>
                    <td>type</td>
                    <td>subtype</td>
                    <td>material</td>
                    <td>line</td>
                    <td>color</td>
                    <td>details</td>
                    <td>size</td>
                    <td>employee</td>
                    <td>value</td>
                    <td>date register</td>
                    <td>picture</td>
                    <td>action</td>
                </tr>
            </thead>
            <tbody>
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
                    <td><?= $stock['dt_register'] ?></td>
                    <td><?= $stock['picture'] ?></td>
                    <td><a href="edit/index.php?id=<?= $stock['id'] ?>">|Show| </a><a href="../routes/stock/delete_stock.php?id=<?= $stock['id'] ?>">|Excluir| </a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    

    <script src="https://kit.fontawesome.com/5dc8345cee.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>