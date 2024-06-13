<?php
require_once('../../services/data/employee/list-entity.php');
$employee = list_entity_employee();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="Latin1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NoSleep - Employee</title>
    <link rel="stylesheet" href="../../css/employee/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    
    <?php require_once('../nav/index.php'); ?>

    <div class='button_create'>
        <div class='glow-on-hover'>
            <a href="./create.php">Criar Funcionário</a>
        </div>
    </div>

    <div class='contents-center'>
        <div class='show-table'>
            <table>
                <thead class='show-up'>
                    <tr>
                        <th>Nome</th>
                        <th>Sobrenome</th>
                        <th>Aniversário</th>
                        <th>CPF/CNPJ</th>
                        <th>RG/IE</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th>CEP</th>
                        <th>Rua</th>
                        <th>Bairro</th>
                        <th>Cidade</th>
                        <th>Estado</th>
                        <th>Complemento</th>
                        <th>Número</th>
                        <th>Data Cadastro</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody  class='show-down'>
                    <?php foreach($employee as $employee): ?>
                        <tr>
                            <td><?= $employee['name'] ?></td>
                            <td><?= $employee['surname'] ?></td>
                            <td><?= $employee['birthday'] ?></td>
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
                            <td><a href="./edit.php?id=<?= $employee['id'] ?>"><i class="fa-solid fa-eye"></i></a><a id="trash" href="../../routes/delete/employee.php?id=<?= $employee['id'] ?>"><i class="fa-solid fa-trash"></i></a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/5dc8345cee.js" crossorigin="anonymous"></script>
</body>
</html>