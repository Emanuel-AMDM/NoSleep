<?php
require_once('../../services/stock/get_by_id.php');

$id = $_GET['id'];

$stock = get_stock_by_id($id);

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

    <form action="../../routes/stock/update.php?id=<?= $stock['id'] ?>" method="post"  enctype="multipart/form-data">
        
        <input type="hidden" value='<?= $stock['dt_created_at'] ?>' name='dt_created_at'>

        <div class="title-company">
            <h1>Editar Peça</h1>
        </div>

        <div class="content-center">
            <div class="content-column">
                <label for="">Codigo da Peça</label>
                <input type="text" name="part_code" id="" value='<?= $stock['part_code'] ?>' readonly>

                <label for="">Setor</label>
                <input type="text" name="sector" id="" value='<?= $stock['sector'] ?>'>

                <label for="">Tipo</label>
                <input type="text" name="type" id="" value='<?= $stock['type'] ?>'>

                <label for="">SubTipo</label>
                <input type="text" name="subtype" id="" value='<?= $stock['subtype'] ?>'>

                <label for="">Detalhes</label>
                <input type="text" name="details" id="" value='<?= $stock['details'] ?>'>

                <h1>Information</h1>

                <label for="">Funcionario</label>
                <input type="text" name="employee" id="" value='<?= $stock['employee'] ?>'>
            </div>

            <div class="content-column">
                <label for="">Material</label>
                <input type="text" name="material" id="" value='<?= $stock['material'] ?>'>

                <label for="">Cor</label>
                <input type="text" name="color" id="" value='<?= $stock['color'] ?>'>

                <label for="">Linha</label>
                <input type="text" name="line" id="" value='<?= $stock['line'] ?>'>

                <div class="content-column">
                    <div class="information-size">
                        <div class="content-column">
                            <label for="">PP</label>
                            <input type="number" name="pp" id="pp" value='<?= $stock['pp'] ?>'>
                        </div>
                        <div class="content-column">
                            <label for="">P</label>
                            <input type="number" name="p" id="p" value='<?= $stock['p'] ?>'>
                        </div>
                        <div class="content-column">
                            <label for="">M</label>
                            <input type="number" name="m" id="m" value='<?= $stock['m'] ?>'>
                        </div>
                        <div class="content-column">
                            <label for="">G</label>
                            <input type="number" name="g" id="g" value='<?= $stock['g'] ?>'>
                        </div>
                        <div class="content-column">
                            <label for="">GG</label>
                            <input type="number" name="gg" id="gg" value='<?= $stock['gg'] ?>'>
                        </div>
                        <div class="content-column">
                            <label for="">XGG</label>
                            <input type="number" name="xgg" id="xgg" value='<?= $stock['xgg'] ?>'>
                        </div>
                    </div>
                </div>

                <div class="content-column">
                    <div class="information">
                        <div class="content-column">
                            <label for="">Data Cadastro</label>
                            <input type="date" name="dt_register" id="dt_register" required value='<?= $stock['dt_register'] ?>'>
                        </div>
                        <div class="content-column">
                            <label for="">Valor</label>
                            <input type="text" name="value" id="value" required value='<?= $stock['value'] ?>'>
                        </div>
                    </div>
                </div>
            </div>

            <label class="picture" for="picture__input" tabIndex="0">
                <img class="picture__image" src="../../uploads/<?= $stock['picture'] ?>" alt="">
            </label>

            <input type="hidden" value="<?= $stock['picture'] ?>" name="picture_current_name">
            
            <input type="file" name="picture__input" id="picture__input">
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