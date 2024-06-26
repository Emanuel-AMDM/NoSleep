<?php
    require_once('../../services/data/client/list-entity.php');
    $client_table = list_entity();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="Latin1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NoSleep - Stock</title>
    <link rel="stylesheet" href="../../css/client/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    
    <?php require_once('../nav/index.php'); ?>

    <div class='contents-center'>
        <div class='show-table'>
            <table>
                <thead class='show-up'>
                    <tr>
                        <th>Nome</th>
                        <th>Sobrenome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Gênero</th>
                        <th>Aniversário</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody class='show-down'>
                    <?php foreach($client_table as $client_table): ?>
                        <tr>
                            <td><?= $client_table['name'] ?></td>
                            <td><?= $client_table['surname'] ?></td>
                            <td><?= $client_table['email'] ?></td>
                            <td><?= $client_table['telephone'] ?></td>
                            <td><?= $client_table['gender'] ?></td>
                            <td><?= $client_table['birthday'] ?></td>
                            <td><a href="./edit.php?id=<?= $client_table['id'] ?>"><i class="fa-solid fa-eye"></i></a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/5dc8345cee.js" crossorigin="anonymous"></script>
</body>
</html>