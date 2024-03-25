<?php
require_once('../../database/execute_query.php');

$sql = "SELECT * FROM stock";
$cod = execute_query($sql);

foreach($cod as $cod){
    $cod = $cod['part_code'] + 1;
}

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

    <form action="../../routes/stock/save_stock.php" method="post">

        <div class="stock_title">
            <h1>Part Registration</h1>
        </div>

        <div class="stock_content_center">
            <label class="picture" for="picture__input" tabIndex="0">
            <span class="picture__image"></span>
            </label>
            
            <input type="file" name="picture__input" id="picture__input">
        </div>

        <div class="stock_content_center">
            <div class="stock_content_column">
                <label for="">Codigo da Peça</label>
                <input type="text" name="part_code" id="" value='<?= $cod ?>' readonly>
            </div>
            <div class="stock_content_column">
                <label for="">Setor</label>
                <input type="text" name="sector" id="">
            </div>
            <div class="stock_content_column">
                <label for="">Tipo</label>
                <input type="text" name="type" id="">
            </div>
        </div>

        <div class="stock_content_center">
            <div class="stock_content_column">
                <label for="">SubTipo</label>
                <input type="text" name="subtype" id="">
            </div>
            <div class="stock_content_column">
                <label for="">Material</label>
                <input type="text" name="material" id="">
            </div>
            <div class="stock_content_column">
                <label for="">Linha</label>
                <input type="text" name="line" id="">
            </div>
        </div>

        <div class="stock_content_center">
            <div class="stock_content_column">
                <label for="">Cor</label>
                <input type="text" name="color" id="">
            </div>
            <div class="stock_content_column">
                <label for="">Detalhes</label>
                <input type="text" name="details" id="">
            </div>
            <div class="stock_content_column">
                <label for="">Tamanho</label>
                <input type="text" name="size" id="">
            </div>
        </div>

        <div class="stock_title">
            <h1>Information</h1>
        </div>

        <div class="stock_content_center">
            <div class="stock_content_column">
                <label for="">Funcionario</label>
                <input type="text" name="employee" id="">
            </div>
            <div class="stock_content_column">
                <label for="">Data Cadastro</label>
                <input type="date" name="dt_register" id="" required>
            </div>
            <div class="stock_content_column">
                <label for="">Valor</label>
                <input type="text" name="value" id="" required>
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