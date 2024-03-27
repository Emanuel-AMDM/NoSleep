<?php
require_once('../services/list_entity.php');
$client = list_entity_client();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
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
                    <li><a href="../stock/create/index.html">Stock</a></li>
                    <li><a href="../employee/index.php">Employee</a></li>
                    <li><a href="index.php">Clients</a></li>
                </div>
                <div class="menu_login">
                    <li><a href="">Emanuel Menezes</a></li>
                    <li><img src="../img/user.png" alt=""></li>
                </div>
            </ul>
        </div>
    </nav>

    <div class='client_show'>
        <table>
            <thead class='client_show_title'>
                <tr>
                    <td>id</td>
                    <td>nome</td>
                    <td>sobrenome</td>
                    <td>email</td>
                    <td>telefone</td>
                    <td>genero</td>
                    <td>data aniversario</td>
                    <td>CRM</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($client as $client): ?>
                <tr>
                    <td><?= $client['id'] ?></td>
                    <td><?= $client['name'] ?></td>
                    <td><?= $client['surname'] ?></td>
                    <td><?= $client['email'] ?></td>
                    <td><?= $client['telephone'] ?></td>
                    <td><?= $client['gender'] ?></td>
                    <td><?= $client['birthday'] ?></td>
                    <td><a href="../login/register/edit/index.php?id=<?= $client['id'] ?>">|Show| </a><a href="">|Todas as Compras| </a><a href=""> |Mais Informações|</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    

    <script src="https://kit.fontawesome.com/5dc8345cee.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>