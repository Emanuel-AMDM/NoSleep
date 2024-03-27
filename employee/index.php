<?php
require_once('../services/list_entity.php');
$employee = list_entity_employee();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="Latin1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NoSleep - Employee</title>
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
                    <li><a href="../stock/index.php">Stock</a></li>
                    <li><a href="index.php">Employee</a></li>
                    <li><a href="../client/index.php">Clients</a></li>
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

    <div class='employee_show'>
        <table>
            <thead class='employee_show_title'>
                <tr>
                    <td>id</td>
                    <td>name</td>
                    <td>birth</td>
                    <td>cpf/cnpj</td>
                    <td>rg/ie</td>
                    <td>telephone</td>
                    <td>email</td>
                    <td>cep</td>
                    <td>road</td>
                    <td>neighborhood</td>
                    <td>city</td>
                    <td>state</td>
                    <td>complement</td>
                    <td>number</td>
                    <td>create</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($employee as $employee): ?>
                <tr>
                    <td><?= $employee['id'] ?></td>
                    <td><?= $employee['name'] ?></td>
                    <td><?= $employee['dt_birth'] ?></td>
                    <td><?= $employee['cpf_cnpj'] ?></td>
                    <td><?= $employee['rg_ie'] ?></td>
                    <td><?= $employee['telephone'] ?></td>
                    <td><?= $employee['email'] ?></td>
                    <td><?= $employee['cep'] ?></td>
                    <td><?= $employee['road'] ?></td>
                    <td><?= $employee['neighborhood'] ?></td>
                    <td><?= $employee['city'] ?></td>
                    <td><?= $employee['state'] ?></td>
                    <td><?= $employee['complement'] ?></td>
                    <td><?= $employee['number'] ?></td>
                    <td><?= $employee['dt_created_at'] ?></td>
                    <td><a href="edit/index.php?id=<?= $employee['id'] ?>">|Show| </a><a href="../routes/employee/delete.php?id=<?= $employee['id'] ?>">|Excluir| </a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    

    <script src="https://kit.fontawesome.com/5dc8345cee.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>