<?php
require_once('../../services/get_by_id.php');

$id = $_GET['id'];

$stock = get_stock_by_id($id);

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
        <div>
            <ul>
                <li><img src="../../img_logo/Destaques_07 - Menu.png" alt=""></li>
                <div class="menu">
                    <li><a href="../../shop/index.html">Shop</a></li>
                    <li><a href="../../MANUAL-DA-IDENTIDADE-VISUAL.pdf">Lookbook</a></li>
                    <li><a href="../index.php">Stock</a></li>
                    <li><a href="../../employee/index.html">Employee Registration</a></li>
                    <li><a href="../../client/index.php">Clients list</a></li>
                </div>
                <div class="menu_login">
                    <li><a href="">Emanuel Menezes</a></li>
                    <li><img src="../img/user.png" alt=""></li>
                </div>
            </ul>
        </div>
    </nav>

    <form action="../../routes/stock/update.php?id=<?= $stock['id'] ?>" method="post">
        
        <input type="hidden" value='<?= $stock['dt_created_at'] ?>' name='dt_created_at'>

        <div class="stock_title">
            <h1>Part Edit</h1>
        </div>

        <div class="stock_content_center">
            <label class="picture" for="picture__input" tabIndex="0">
            <span class="picture__image"></span>
            </label>
            
            <input type="file" name="picture__input" id="picture__input" value='<?= $stock['picture'] ?>'>
        </div>

        <div class="stock_content_center">
            <div class="stock_content_column">
                <label for="">Codigo da Peça</label>
                <input type="text" name="part_code" id="" value='<?= $stock['part_code'] ?>' readonly>
            </div>
            <div class="stock_content_column">
                <label for="">Setor</label>
                <input type="text" name="sector" id="" value='<?= $stock['sector'] ?>'>
            </div>
            <div class="stock_content_column">
                <label for="">Tipo</label>
                <input type="text" name="type" id="" value='<?= $stock['type'] ?>'>
            </div>
        </div>

        <div class="stock_content_center">
            <div class="stock_content_column">
                <label for="">SubTipo</label>
                <input type="text" name="subtype" id="" value='<?= $stock['subtype'] ?>'>
            </div>
            <div class="stock_content_column">
                <label for="">Material</label>
                <input type="text" name="material" id="" value='<?= $stock['material'] ?>'>
            </div>
            <div class="stock_content_column">
                <label for="">Linha</label>
                <input type="text" name="line" id="" value='<?= $stock['line'] ?>'>
            </div>
        </div>

        <div class="stock_content_center">
            <div class="stock_content_column">
                <label for="">Cor</label>
                <input type="text" name="color" id="" value='<?= $stock['color'] ?>'>
            </div>
            <div class="stock_content_column">
                <label for="">Detalhes</label>
                <input type="text" name="details" id="" value='<?= $stock['details'] ?>'>
            </div>
            <div class="stock_content_column">
                <label for="">Tamanho</label>
                <input type="text" name="size" id="" value='<?= $stock['size'] ?>'>
            </div>
        </div>

        <div class="stock_title">
            <h1>Information</h1>
        </div>

        <div class="stock_content_center">
            <div class="stock_content_column">
                <label for="">Funcionario</label>
                <input type="text" name="employee" id="" value='<?= $stock['employee'] ?>'>
            </div>
            <div class="stock_content_column">
                <label for="">Data Cadastro</label>
                <input type="date" name="dt_register" id="" required value='<?= $stock['dt_register'] ?>'>
            </div>
            <div class="stock_content_column">
                <label for="">Valor</label>
                <input type="text" name="value" id="" required value='<?= $stock['value'] ?>'>
            </div>
        </div>

        <div class="stock_button_save">
            <button type="submit">Save</button>
        </div>
    </form>

    <script src="https://kit.fontawesome.com/5dc8345cee.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>