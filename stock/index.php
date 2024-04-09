<?php
require_once('../services/stock/list_entity_index.php');
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
        <div class="nav_flex">
            <div>
                <a href="../index/index.html"><img src="../img_logo/Destaques_07 - Menu.png" alt=""></a>
            </div>
            <ul>
                <div class="menu">
                    <li><a href="../shop/index.php">Shop</a></li>
                    <li><a href="../MANUAL-DA-IDENTIDADE-VISUAL.pdf">Lookbook</a></li>
                    <li><a href="index.php">Stock</a></li>
                    <li><a href="../employee/index.php">Employee</a></li>
                    <li><a href="../client/index.php">Clients</a></li>
                </div>
            </ul>
            <div class="menu_login">
                <li><a href="">Emanuel Menezes</a></li>
            </div>
        </div>
    </nav>

    <div class='contents_center'>
        <div>
            <div class='button_create'>
                <div class='glow-on-hover'>
                    <a href="create/index.php">Part Create</a>
                </div>
            </div>

            <div class='stock_show'>
                <table>
                    <thead class='stock_show_up'>
                        <tr>
                            <th>Part Code</th>
                            <th>Sector</th>
                            <th>Type</th>
                            <th>Subtype</th>
                            <th>Material</th>
                            <th>Line</th>
                            <th>Color</th>
                            <th>Details</th>
                            <th>P</th>
                            <th>PP</th>
                            <th>M</th>
                            <th>G</th>
                            <th>GG</th>
                            <th>XGG</th>
                            <th>Employee</th>
                            <th>Value</th>
                            <th>Date Register</th>
                            <th>Picture</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class='stock_show_down'>
                        <?php foreach($stock as $stock): ?>
                        <tr>
                            <td><?= $stock['part_code'] ?></td>
                            <td><?= $stock['sector'] ?></td>
                            <td><?= $stock['type'] ?></td>
                            <td><?= $stock['subtype'] ?></td>
                            <td><?= $stock['material'] ?></td>
                            <td><?= $stock['line'] ?></td>
                            <td><?= $stock['color'] ?></td>
                            <td><?= $stock['details'] ?></td>
                            <td><?= $stock['p'] ?></td>
                            <td><?= $stock['pp'] ?></td>
                            <td><?= $stock['m'] ?></td>
                            <td><?= $stock['g'] ?></td>
                            <td><?= $stock['gg'] ?></td>
                            <td><?= $stock['xgg'] ?></td>
                            <td><?= $stock['employee'] ?></td>
                            <td><?= $stock['value'] ?></td>
                            <td><?= $stock['dt_register'] ?></td>
                            <td><img src="../uploads/<?= $stock['picture'] ?>"></td>
                            <td><a href="edit/index.php?id=<?= $stock['id'] ?>"><i class="fa-solid fa-eye"></i></a><a id="trash" href="../routes/stock/delete.php?id=<?= $stock['id'] ?>"><i class="fa-solid fa-trash"></i></a></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/5dc8345cee.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>