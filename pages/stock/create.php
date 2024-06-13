<?php
require_once('../../database/execute_query.php');

$sql = "SELECT * FROM stock ORDER BY part_code ASC";
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
    <link rel="stylesheet" href="../../css/stock/create-edit.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    
    <?php require_once('../nav/index_create_edit.php'); ?>

    <form action="../../routes/save/stock.php" method="post" enctype="multipart/form-data">

        <div class="title-company">
            <h1>Part Registration</h1>
        </div>

        <div class="content-center">
            <div class="content-column">
                <label for="">Codigo da Peça</label>
                <input type="text" name="part_code" id="" value='<?= $cod ?>' readonly>
            
                <label for="">Setor</label>
                <input type="text" name="sector" id="">

                <label for="">Tipo</label>
                <input type="text" name="type" id="">

                <label for="">SubTipo</label>
                <input type="text" name="subtype" id="">

                <label for="">Detalhes</label>
                <input type="text" name="details" id="">

                <h1>Information</h1>

                <label for="">Funcionario</label>
                <input type="text" name="employee" id="">
            </div>

            <div class="content-column">
                <label for="">Material</label>
                <input type="text" name="material" id="">

                <label for="">Cor</label>
                <input type="text" name="color" id="">

                <label for="">Linha</label>
                <input type="text" name="line" id="">

                <div class="content-column">
                    <div class="information-size">
                        <div class="content-column">
                            <label for="">PP</label>
                            <input type="number" name="pp" id="pp">
                        </div>
                        <div class="content-column">
                            <label for="">P</label>
                            <input type="number" name="p" id="p">
                        </div>
                        <div class="content-column">
                            <label for="">M</label>
                            <input type="number" name="m" id="m">
                        </div>
                        <div class="content-column">
                            <label for="">G</label>
                            <input type="number" name="g" id="g">
                        </div>
                        <div class="content-column">
                            <label for="">GG</label>
                            <input type="number" name="gg" id="gg">
                        </div>
                        <div class="content-column">
                            <label for="">XGG</label>
                            <input type="number" name="xgg" id="xgg">
                        </div>
                    </div>
                </div>

                <div class="content-column">
                    <div class="information">
                        <div class="content-column">
                            <label for="">Data Cadastro</label>
                            <input type="date" name="dt_register" id="dt_register" required>
                        </div>
                        <div class="content-column">
                            <label for="">Valor</label>
                            <input type="text" name="value" id="value" required>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="content-center">
                <label class="picture" for="picture__input" tabIndex="0">
                <span class="picture__image"></span>
                </label>
                
                <input type="file" name="picture__input" id="picture__input">
            </div>
        </div>

        <div class="button-save-company">
            <div class="glow-on-hover">
                <button type="submit">Salvar</button>
            </div>
        </div>
    </form>

    <script src="https://kit.fontawesome.com/5dc8345cee.js" crossorigin="anonymous"></script>
    <script src="../../js/imagem.js"></script>
</body>
</html>