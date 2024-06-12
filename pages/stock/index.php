<?php
require_once('../../services/stock/list_entity_index.php');
$stock = list_entity_stock();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="Latin1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NoSleep - Stock</title>
    <link rel="stylesheet" href="../../css/stock/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    
    <?php require_once('../nav/index.php'); ?>

    <div class='button_create'>
        <div class='glow-on-hover'>
            <a href="./create.php">Cadastrar Peça</a>
        </div>
    </div>

    <div class='contents-center'>
        <div class='show-table'>
            <table>
                <thead class='show-up'>
                    <tr>
                        <th>Codigo da Peça</th>
                        <th>Setor</th>
                        <th>Tipo</th>
                        <th>Subtipo</th>
                        <th>Material</th>
                        <th>Linha</th>
                        <th>Cor</th>
                        <th>Detailhes</th>
                        <th>P</th>
                        <th>PP</th>
                        <th>M</th>
                        <th>G</th>
                        <th>GG</th>
                        <th>XGG</th>
                        <th>Funcionario</th>
                        <th>Valor</th>
                        <th>Data Registro</th>
                        <th>Foto</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody class='show-down'>
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
                        <td><img src="../../uploads/<?= $stock['picture'] ?>"></td>
                        <td><a href="./edit.php?id=<?= $stock['id'] ?>"><i class="fa-solid fa-eye"></i></a><a id="trash" href="../../routes/stock/delete.php?id=<?= $stock['id'] ?>"><i class="fa-solid fa-trash"></i></a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/5dc8345cee.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>