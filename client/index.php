<?php
require_once('../services/client/list_entity_index.php');
$client = list_entity_client();
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
                    <li><a href="../stock/index.php">Stock</a></li>
                    <li><a href="../../employee/index.php">Employee</a></li>
                    <li><a href="../client/index.php">Clients</a></li>
                </div>
            </ul>
            <div class="menu_login">
                <li><a href="">Emanuel Menezes</a></li>
            </div>
        </div>
    </nav>

    <div class='client_show'>
        <table>
            <thead class='client_show_up'>
                <tr>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Email</th>
                    <th>Telephone</th>
                    <th>Gender</th>
                    <th>Birthday</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class='client_show_down'>
                <?php foreach($client as $client): ?>
                <tr>
                    <td><?= $client['name'] ?></td>
                    <td><?= $client['surname'] ?></td>
                    <td><?= $client['email'] ?></td>
                    <td><?= $client['telephone'] ?></td>
                    <td><?= $client['gender'] ?></td>
                    <td><?= $client['birthday'] ?></td>
                    <td><a href="../login/register/edit/index.php?id=<?= $client['id'] ?>"><i class="fa-solid fa-eye"></i></a>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    

    <script src="https://kit.fontawesome.com/5dc8345cee.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>