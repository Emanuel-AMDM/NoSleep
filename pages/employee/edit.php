<?php
require_once('../../services/get-by-id/employee/index.php');

$id = $_GET['id'];

$employee = get_employee_by_id($id);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="Latin1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NoSleep - Employee</title>
    <link rel="stylesheet" href="../../css/employee/create-edit.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    
    <?php require_once('../nav/index_create_edit.php'); ?>

    <div class="title-company">
        <h1>Editar Funcionário</h1>
    </div>

    <form action='../../routes/update/employee.php?id=<?=$employee['id']?>' method='post'>
    <input type="hidden" name="dt_created_at" id="" value='<?= $employee['dt_created_at'] ?>'>

        <div class="content-center">
            <div class="content-column">
                <label for="">Nome</label>
                <input type="text" name="name" id="" value='<?= $employee['name'] ?>'>
            </div>
            <div class="content-column">
                <label for="">Sobrenome</label>
                <input type="text" name="surname" id="" value='<?= $employee['surname'] ?>'>
            </div>
            <div class="content-column">
                <label for="">Aniversário</label>
                <input type="date" name="birthday" id="" value='<?= $employee['birthday'] ?>'>
            </div>
            <div class="content-column">
                <label for="">CPF/CNPJ</label>
                <input type="text" name="cpf_cnpj" id="" value='<?= $employee['cpf_cnpj'] ?>'>
            </div>
        </div>

        <div class="content-center">
            <div class="content-column">
            <label>Gênero</label>
                <select name="gender" id="gender">
                    <option value="<?=$employee['gender']?>">
                        <?php   
                            if($employee['gender'] == 0){
                                echo 'PREFIRO NÃO DIZER';
                            }elseif($employee['gender'] == 1){
                                echo 'MASCULINO';
                            }else{
                                echo 'FEMININO';
                            }
                        ?>
                    </option>
                    <option value="0">PREFIRO NÃO DIZER</option>
                    <option value="1">MASCULINO</option>
                    <option value="2">FEMININO</option>
                </select>
            </div>
            <div class="content-column">
                <label for="">RG/IE</label>
                <input type="text" name="rg_ie" id="" value='<?= $employee['rg_ie'] ?>'>
            </div>
            <div class="content-column">
                <label for="">Telefone</label>
                <input type="text" name="telephone" id="" value='<?= $employee['telephone'] ?>'>
            </div>
            <div class="content-column">
                <label for="">Email</label>
                <input type="text" name="email" id="" value='<?= $employee['email'] ?>'>
            </div>
        </div>

        <div class="title-company">
            <h1>Endereço</h1>
        </div>

        <div class="content-center">
            <div class="content-column">
                <label for="">CEP</label>
                <input type="text" name="cep" id="cep" value='<?= $employee['cep'] ?>'>
            </div>
            <div class="content-column">
                <label for="">Rua</label>
                <input type="text" name="road" id="rua" value='<?= $employee['road'] ?>'>
            </div>
            <div class="content-column">
                <label for="">Bairro</label>
                <input type="text" name="neighborhood" id="bairro" value='<?= $employee['neighborhood'] ?>'>
            </div>
        </div>

        <div class="content-center">
            <div class="content-column">
                <label for="">Cidade</label>
                <input type="text" name="city" id="cidade" value='<?= $employee['city'] ?>'>
            </div>
            <div class="content-column">
                <label for="">Estado</label>
                <input type="text" name="state" id="estado" value='<?= $employee['state'] ?>'>
            </div>
            <div class="content-column">
                <label for="">Complemento</label>
                <input type="text" name="complement" id="complemento" value='<?= $employee['complement'] ?>'>
            </div>
            <div class="content-column">
                <label for="">Número</label>
                <input type="text" name="number" id="numero" value='<?= $employee['number'] ?>'>
            </div>
        </div>

        <div class="title-company">
            <h1>Login</h1>
        </div>

        <div class="content-center">
            <div class="content-column">
                <label for="">Login</label>
                <input type="text" name="login" id="" value='<?= $employee['login'] ?>'>
            </div>
            <div class="content-column">
                <label for="">Senha</label>
                <input type="text" name="password" id="" value='<?= $employee['password'] ?>'>
            </div>
        </div>

        <div class="button-save-company">
            <div class="glow-on-hover">
                <button type="submit">Salvar</button>
            </div>
        </div>
    </form>

    <script src="https://kit.fontawesome.com/5dc8345cee.js" crossorigin="anonymous"></script>
    <script src="../../js/cep.js"></script>
</body>
</html>