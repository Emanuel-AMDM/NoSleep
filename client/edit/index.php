<?php
session_start();
require_once('../../services/client/get_client_by_id.php');
require_once('../../services/client/get_by_id_nav_create_edit.php');


$id = $_GET['id'];

$client_edit = get_client_by_id($id);

if(!isset($_SESSION['user'])){
    header('Location: ../../login/index.php');
    exit;
}else{
    $id_client = $_SESSION['user'];
    $client = get_by_id($id_client);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="Latin1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NoSleep - client</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>

    <nav class="nav_menu">
        <div class="nav_flex">
            <div>
                <a href="../../index/index.html"><img src="../../img_logo/Destaques_07 - Menu.png" alt=""></a>
            </div>

            <?php if($client['name'] != '' && $client['surname'] != ''): ?>
                <div class="title_login">
                    <ul class="login">
                        <li>
                            <a><?= $client['name'] . ' ' . $client['surname'] ?></a>
                            <ul>
                                <?php if($client['type'] == 2): ?>
                                    <li><a href="../../shop/index.php">Shop</a></li>
                                    <li><a href="../../MANUAL-DA-IDENTIDADE-VISUAL.pdf">Lookbook</a></li>
                                    <li><a href="../../stock/index.php">Stock</a></li>
                                    <li><a href="../../employee/index.php">Employee</a></li>
                                    <li><a href="../../client/index.php">Clients</a></li>
                                <?php else: ?>
                                    <li><a href="../../shoes/index.php"                              >Shoes         </a></li>
                                    <li><a href="../../tshirt/index.php"                             >T-shirts      </a></li>
                                    <li><a href="../../caps/index.php"                               >Caps          </a></li>
                                    <li><a href="../../sweatshirts/index.php"                        >Sweatshirts   </a></li>
                                    <li><a href="../../all_categories/index.php"                     >All categories</a></li>
                                    <li><a href="../../client/edit/index.php?id=<?= $client['id'] ?>">Configurações</a></li>
                                <?php endif; ?>
                                <li>
                                    <form action="../../routes/login/logout.php" method="POST">
                                        <button>Sair</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            <?php else: ?>
                <div class="title_login_register">
                    <a href="../../login/index.php">Login/Register</a>
                </div>
            <?php endif; ?>

        </div>
    </nav>

    <div class="client_title">
        <h1>Client Edit</h1>
    </div>

    <form action='../../routes/client/update.php?id=<?=$client_edit['id']?>' method='post'>
    <input type="hidden" name="dt_created_at" id="" value='<?= $client_edit['dt_created_at'] ?>'>

        <div class="client_content_center">
            <div class="client_content_column">
                <label for="">Nome</label>
                <input type="text" name="name" id="" value='<?= $client_edit['name'] ?>'>
            </div>
            <div class="client_content_column">
                <label for="">Surname</label>
                <input type="text" name="surname" id="" value='<?= $client_edit['surname'] ?>'>
            </div>
            <div class="client_content_column">
                <label for="">Birthday</label>
                <input type="date" name="birthday" id="" value='<?= $client_edit['birthday'] ?>'>
            </div>
            <div class="client_content_column">
                <label for="">CPF/CNPJ</label>
                <input type="text" name="cpf_cnpj" id="" value='<?= $client_edit['cpf_cnpj'] ?>'>
            </div>
        </div>

        <div class="client_content_center">
            <div class="client_content_column">
            <label>Gender</label>
                <select name="gender" id="gender">
                    <option value="<?=$client_edit['gender']?>">
                        <?php   
                            if($client_edit['gender'] == 0){
                                echo 'Prefer not to say';
                            }elseif($client_edit['gender'] == 1){
                                echo 'Masculine';
                            }else{
                                echo 'Feminine';
                            }
                        ?>
                    </option>
                    <option value="0">Prefer not to say</option>
                    <option value="1">MASCULINE</option>
                    <option value="2">FEMININE</option>
                </select>
            </div>
            <div class="client_content_column">
                <label for="">RG/IE</label>
                <input type="text" name="rg_ie" id="" value='<?= $client_edit['rg_ie'] ?>'>
            </div>
            <div class="client_content_column">
                <label for="">Telephone</label>
                <input type="text" name="telephone" id="" value='<?= $client_edit['telephone'] ?>'>
            </div>
            <div class="client_content_column">
                <label for="">Email</label>
                <input type="text" name="email" id="" value='<?= $client_edit['email'] ?>'>
            </div>
        </div>

        <div class="client_title">
            <h1>address</h1>
        </div>

        <div class="client_content_center">
            <div class="client_content_column">
                <label for="">CEP</label>
                <input type="text" name="cep" id="cep" value='<?= $client_edit['cep'] ?>'>
            </div>
            <div class="client_content_column">
                <label for="">Road</label>
                <input type="text" name="road" id="rua" value='<?= $client_edit['road'] ?>'>
            </div>
            <div class="client_content_column">
                <label for="">Neighborhood</label>
                <input type="text" name="neighborhood" id="bairro" value='<?= $client_edit['neighborhood'] ?>'>
            </div>
        </div>

        <div class="client_content_center">
            <div class="client_content_column">
                <label for="">City</label>
                <input type="text" name="city" id="cidade" value='<?= $client_edit['city'] ?>'>
            </div>
            <div class="client_content_column">
                <label for="">State</label>
                <input type="text" name="state" id="estado" value='<?= $client_edit['state'] ?>'>
            </div>
            <div class="client_content_column">
                <label for="">Complement</label>
                <input type="text" name="complement" id="complemento" value='<?= $client_edit['complement'] ?>'>
            </div>
            <div class="client_content_column">
                <label for="">Number</label>
                <input type="text" name="number" id="numero" value='<?= $client_edit['number'] ?>'>
            </div>
        </div>

        <div class="client_title">
            <h1>Login</h1>
        </div>

        <div class="client_content_center">
            <div class="client_content_column">
                <label for="">Login</label>
                <input type="text" name="login" id="" value='<?= $client_edit['login'] ?>'>
            </div>
            <div class="client_content_column">
                <label for="">Password</label>
                <input type="text" name="password" id="" value='<?= $client_edit['password'] ?>'>
            </div>
        </div>

        <div class="client_button_save">
            <div class="glow-on-hover">
                <button type="submit">Save</button>
            </div>
        </div>
    </form>

    <script src="https://kit.fontawesome.com/5dc8345cee.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>