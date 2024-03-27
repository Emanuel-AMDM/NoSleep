<?php
require_once('../../services/get_by_id.php');

$id = $_GET['id'];

$employee = get_employee_by_id($id);
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
                <li><img src="../../img_logo/Destaques_07 - Menu.png" alt=""></li>
                <div class="menu">
                    <li><a href="../shop/index.html">Shop</a></li>
                    <li><a href="../MANUAL-DA-IDENTIDADE-VISUAL.pdf">Lookbook</a></li>
                    <li><a href="../stock/index.php">Stock</a></li>
                    <li><a href="../index.php">Employee</a></li>
                    <li><a href="../client/index.php">Clients</a></li>
                </div>
                <div class="menu_login">
                    <li><a href="">Emanuel Menezes</a></li>
                    <li><img src="../../img/user.png" alt=""></li>
                </div>
            </ul>
        </div>
    </nav>

    <div class="employee_title">
        <h1>Employee Edit</h1>
    </div>

    <form action='../../routes/employee/update.php?id=<?=$employee['id']?>' method='post'>
    <input type="hidden" name="dt_created_at" id="" value='<?= $employee['dt_created_at'] ?>'>

        <div class="employee_content_center">
            <div class="employee_content_column">
                <label for="">Nome</label>
                <input type="text" name="name" id="" value='<?= $employee['name'] ?>'>
            </div>
            <div class="employee_content_column">
                <label for="">Data Nascimento</label>
                <input type="date" name="dt_birth" id="" value='<?= $employee['dt_birth'] ?>'>
            </div>
            <div class="employee_content_column">
                <label for="">CPF/CNPJ</label>
                <input type="text" name="cpf_cnpj" id="" value='<?= $employee['cpf_cnpj'] ?>'>
            </div>
        </div>

        <div class="employee_content_center">
            <div class="employee_content_column">
                <label for="">RG/IE</label>
                <input type="text" name="rg_ie" id="" value='<?= $employee['rg_ie'] ?>'>
            </div>
            <div class="employee_content_column">
                <label for="">Telefone</label>
                <input type="text" name="telephone" id="" value='<?= $employee['telephone'] ?>'>
            </div>
            <div class="employee_content_column">
                <label for="">E-Mail</label>
                <input type="text" name="email" id="" value='<?= $employee['email'] ?>'>
            </div>
        </div>

        <div class="employee_content_center">
            <div class="employee_content_column">
                <label for="">CEP</label>
                <input type="text" name="cep" id="cep" value='<?= $employee['cep'] ?>'>
            </div>
            <div class="employee_content_column">
                <label for="">Rua</label>
                <input type="text" name="road" id="rua" value='<?= $employee['road'] ?>'>
            </div>
            <div class="employee_content_column">
                <label for="">Bairro</label>
                <input type="text" name="neighborhood" id="bairro" value='<?= $employee['neighborhood'] ?>'>
            </div>
        </div>

        <div class="employee_content_center">
            <div class="employee_content_column">
                <label for="">Cidade</label>
                <input type="text" name="city" id="cidade" value='<?= $employee['city'] ?>'>
            </div>
            <div class="employee_content_column">
                <label for="">Estado</label>
                <input type="text" name="state" id="estado" value='<?= $employee['state'] ?>'>
            </div>
            <div class="employee_content_column">
                <label for="">Complemento</label>
                <input type="text" name="complement" id="complemento" value='<?= $employee['complement'] ?>'>
            </div>
            <div class="employee_content_column">
                <label for="">Numero</label>
                <input type="text" name="number" id="numero" value='<?= $employee['number'] ?>'>
            </div>
        </div>

        <div class="employee_title">
            <h1>Login</h1>
        </div>

        <div class="employee_content_center">
            <div class="employee_content_column">
                <label for="">Login</label>
                <input type="text" name="login" id="" value='<?= $employee['login'] ?>'>
            </div>
            <div class="employee_content_column">
                <label for="">Senha</label>
                <input type="text" name="password" id="" value='<?= $employee['password'] ?>'>
            </div>
        </div>

        <div class="employee_button_save">
            <button type="submit">Save</button>
        </div>
    </form>

    <script src="https://kit.fontawesome.com/5dc8345cee.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>