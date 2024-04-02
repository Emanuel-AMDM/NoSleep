<?php
require_once('../services/employee/list_entity_index.php');
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

            <div class='employee_show'>
                <table>
                    <thead class='employee_show_up'>
                        <tr>
                            <th>Name</th>
                            <th>Birth</th>
                            <th>CPF/CNPJ</th>
                            <th>RG/IE</th>
                            <th>Telephone</th>
                            <th>Email</th>
                            <th>CEP</th>
                            <th>Road</th>
                            <th>Neighborhood</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Complement</th>
                            <th>Number</th>
                            <th>Create</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody  class='employee_show_down'>
                        <?php foreach($employee as $employee): ?>
                        <tr>
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
                            <td><a href="edit/index.php?id=<?= $employee['id'] ?>"><i class="fa-solid fa-eye"></i></a><a id="trash" href="../routes/employee/delete.php?id=<?= $employee['id'] ?>"><i class="fa-solid fa-trash"></i></a></td>
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