<?php
    require_once('../services/client/list_entity_index.php');
    $client_table = list_entity_client();
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
    
    <?php require_once('../nav/index.php'); ?>

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
                <?php foreach($client_table as $client_table): ?>
                    <tr>
                        <td><?= $client_table['name'] ?></td>
                        <td><?= $client_table['surname'] ?></td>
                        <td><?= $client_table['email'] ?></td>
                        <td><?= $client_table['telephone'] ?></td>
                        <td><?= $client_table['gender'] ?></td>
                        <td><?= $client_table['birthday'] ?></td>
                        <td><a href="edit/index.php?id=<?= $client_table['id'] ?>"><i class="fa-solid fa-eye"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    

    <script src="https://kit.fontawesome.com/5dc8345cee.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>