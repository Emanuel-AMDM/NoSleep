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
    
    <?php require_once('../../nav/index_create_edit.php'); ?>

    <div class="employee_title">
        <h1>Employee Registration</h1>
    </div>

    <form action='../../routes/employee/save.php' method='post'>

        <div class="employee_content_center">
            <div class="employee_content_column">
                <label for="">Name</label>
                <input type="text" name="name" id="" required>
            </div>
            <div class="employee_content_column">
                <label for="">Surname</label>
                <input type="text" name="surname" id="" required>
            </div>
            <div class="employee_content_column">
                <label for="">Birthday</label>
                <input type="date" name="dt_birth" id="" required>
            </div>
            <div class="employee_content_column">
                <label for="">CPF/CNPJ</label>
                <input type="text" name="cpf_cnpj" id="" required>
            </div>
        </div>

        <div class="employee_content_center">
            <div class="employee_content_column">
                <label>Gender</label>
                <select name="gender" id="gender">
                    <option value="0">Prefer not to say</option>
                    <option value="1">MASCULINE</option>
                    <option value="2">FEMININE</option>
                </select>
            </div>
            <div class="employee_content_column">
                <label for="">RG/IE</label>
                <input type="text" name="rg_ie" id="" required>
            </div>
            <div class="employee_content_column">
                <label for="">Telephone</label>
                <input type="text" name="telephone" id="" required>
            </div>
            <div class="employee_content_column">
                <label for="">Email</label>
                <input type="text" name="email" id="" required>
            </div>
        </div>

        <div class="employee_title">
            <h1>address</h1>
        </div>

        <div class="employee_content_center">
            <div class="employee_content_column">
                <label for="">CEP</label>
                <input type="text" name="cep" id="cep" required>
            </div>
            <div class="employee_content_column">
                <label for="">Road</label>
                <input type="text" name="road" id="rua">
            </div>
            <div class="employee_content_column">
                <label for="">Neighborhood</label>
                <input type="text" name="neighborhood" id="bairro">
            </div>
        </div>

        <div class="employee_content_center">
            <div class="employee_content_column">
                <label for="">City</label>
                <input type="text" name="city" id="cidade">
            </div>
            <div class="employee_content_column">
                <label for="">State</label>
                <input type="text" name="state" id="estado">
            </div>
            <div class="employee_content_column">
                <label for="">Complement</label>
                <input type="text" name="complement" id="complemento">
            </div>
            <div class="employee_content_column">
                <label for="">Number</label>
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
                <label for="">Password</label>
                <input type="text" name="password" id="" required>
            </div>
        </div>

        <div class="employee_button_save">
            <div class="glow-on-hover">
                <button type="submit">Save</button>
            </div>
        </div>
    </form>

    <script src="https://kit.fontawesome.com/5dc8345cee.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>