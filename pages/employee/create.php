<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="Latin1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NoSleep - Employee</title>
    <link rel="stylesheet" href="../../css/employee/create.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    
    <?php require_once('../nav/index_create_edit.php'); ?>

    <div class="employee_title">
        <h1>Employee Registration</h1>
    </div>

    <form action='../../routes/employee/save.php' method='post'>

        <div class="employee_content_center">
            <div class="employee_content_column">
                <label for="">Nome</label>
                <input type="text" name="name" id="" required>
            </div>
            <div class="employee_content_column">
                <label for="">Sobrenome</label>
                <input type="text" name="surname" id="" required>
            </div>
            <div class="employee_content_column">
                <label for="">Aniversário</label>
                <input type="date" name="dt_birth" id="" required>
            </div>
            <div class="employee_content_column">
                <label for="">CPF/CNPJ</label>
                <input type="text" name="cpf_cnpj" id="" required>
            </div>
        </div>

        <div class="employee_content_center">
            <div class="employee_content_column">
                <label>Gênero</label>
                <select name="gender" id="gender">
                    <option value="0">PREFIRO NÃO DIZER</option>
                    <option value="1">MASCULINO</option>
                    <option value="2">FEMININO</option>
                </select>
            </div>
            <div class="employee_content_column">
                <label for="">RG/IE</label>
                <input type="text" name="rg_ie" id="" required>
            </div>
            <div class="employee_content_column">
                <label for="">Telefone</label>
                <input type="text" name="telephone" id="" required>
            </div>
            <div class="employee_content_column">
                <label for="">Email</label>
                <input type="text" name="email" id="" required>
            </div>
        </div>

        <div class="employee_title">
            <h1>Endereço</h1>
        </div>

        <div class="employee_content_center">
            <div class="employee_content_column">
                <label for="">CEP</label>
                <input type="text" name="cep" id="cep" required>
            </div>
            <div class="employee_content_column">
                <label for="">Rua</label>
                <input type="text" name="road" id="rua">
            </div>
            <div class="employee_content_column">
                <label for="">Bairro</label>
                <input type="text" name="neighborhood" id="bairro">
            </div>
        </div>

        <div class="employee_content_center">
            <div class="employee_content_column">
                <label for="">Cidade</label>
                <input type="text" name="city" id="cidade">
            </div>
            <div class="employee_content_column">
                <label for="">Estado</label>
                <input type="text" name="state" id="estado">
            </div>
            <div class="employee_content_column">
                <label for="">Complemento</label>
                <input type="text" name="complement" id="complemento">
            </div>
            <div class="employee_content_column">
                <label for="">Número</label>
                <input type="text" name="number" id="numero">
            </div>
        </div>

        <div class="employee_title">
            <h1>Login</h1>
        </div>

        <div class="employee_content_center">
            <div class="employee_content_column">
                <label for="">Login</label>
                <input type="text" name="login" id="" required>
            </div>
            <div class="employee_content_column">
                <label for="">Senha</label>
                <input type="text" name="password" id="" required>
            </div>
        </div>

        <div class="employee_button_save">
            <div class="glow-on-hover">
                <button type="submit">Salvar</button>
            </div>
        </div>
    </form>

    <script src="https://kit.fontawesome.com/5dc8345cee.js" crossorigin="anonymous"></script>
    <script src="../../js/cep.js"></script>
</body>
</html>