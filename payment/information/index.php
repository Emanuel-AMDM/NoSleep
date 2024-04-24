<?php
session_start();

require_once('../../services/information_payment/get_by_id.php');
require_once('../../services/information_payment/list_entity.php');
require_once('../../services/information_payment/value_total.php');


if(!isset($_SESSION['user'])){
    header('Location: ../../login/index.php');
    exit;
}else{
    $id_user = $_SESSION['user'];
}

$client           = get_by_id($id_user);
$cart_information = list_entity($id_user);
$cart_subtotal    = list_entity($id_user);
$value_total      = value_total($id_user);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NoSleep - Information</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    
    <nav class="nav_menu">
        <div>
            <img src="../../img_logo/Destaques_07 - Menu.png" alt="">
        </div>
    </nav>

    <div class="info_payment">
        <label for="">MyCart > <strong>Infomation</strong> > Frete</label>
    </div>

    <div class="titulo_information">
        <h2>Contact</h2>
    </div>

    <div class="border"><hr></div>

    <div class="information_info">
        <div class="information_info_contents">
            <div>
                <p id="txt_info"><?= $client['name'] . ' ' . $client['surname'] ?> ( <?= $client['email'] ?> )</p>
            </div>
            <div>
                <form action="../../routes/login/logout.php" method="POST">
                    <button>Sair</button>
                </form>
            </div>
        </div>
    </div>

    <div class="information_email">
        <input type="checkbox" name="" id="" checked><label for="">Send news and offers to me by email</label>
    </div>

    <div class="border"><hr id="border_down"></div>

    <form action="../../routes/information_payment/update.php?id=<?= $client['id'] ?>" method="post">
        <div class="delivery_address">
            <div>
                <div>
                    <h2>Delivery Address</h2>
                </div>
                <div class="address_input">
                    <div class="address_info">
                        <input type="text" placeholder="CPF/CNPJ" name="cpf_cnpj" value="<?= $client['cpf_cnpj'] ?>"required>
                    </div>
                    <div class="address_info">
                        <input type="text" placeholder="CEP" id="cep" name="cep" value="<?= $client['cep'] ?>"required>
                    </div>
                    <div class="address_info">
                        <div class="address_info_united">
                            <div>
                                <input type="text" placeholder="Road" id="rua" name="road" value="<?= $client['road'] ?>"required>
                            </div>
                            <div>
                                <input type="number" placeholder="Number" id="numero" name="number" value="<?= $client['number'] ?>"required>
                            </div>
                        </div>
                    </div>
                    <div class="address_info">
                        <input type="text" placeholder="Complement" name="complement" value="<?= $client['complement'] ?>">
                    </div>
                    <div class="address_info">
                        <input type="text" placeholder="Neighborhood" id="bairro" name="neighborhood" value="<?= $client['neighborhood'] ?>"required>
                    </div>
                    <div class="address_info">
                        <div class="address_info_united">
                            <div>
                                <input type="text" placeholder="City" id="cidade" name="city" value="<?= $client['city'] ?>"required>
                            </div>
                            <div class="address_info">
                                <input type="text" placeholder="State" id="estado" name="state" value="<?= $client['state'] ?>"required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="information_summary">
                <h2>Purchase Summary</h2>

                <?php foreach($cart_information as $cart): ?>

                    <div class="information_summary_img">
                        <img src="../../uploads/<?= $cart['picture'] ?>" alt="">
                        <p><?= $cart['type'] ?> - <?= $cart['color'] ?> <br> cod.<?= $cart['cod'] ?> | R$<?= $cart['value'] ?></p>
                        <p id="value">Amount.<?= $cart['amount'] ?> | Size.<?= $cart['size'] ?></p>
                    </div>
                
                <?php endforeach; ?>

                <div class="border_summary"><hr></div>

                <div class="information_summary_subtotal_frete">

                    <?php foreach($cart_subtotal as $cart_sub): ?>

                    <div class="information_summary_subtotal">
                        <div>
                            <p>Subtotal</p>
                        </div>
                        <div>
                            <p>R$<?= ROUND($cart_sub['value'] * $cart_sub['amount']) ?></p>
                        </div>
                    </div>

                    <?php endforeach; ?>

                    <div class="information_summary_frete">
                        <div>
                            <p>Frete</p>
                        </div>
                        <div>
                            <p>Calculated in the next step</p>
                        </div>
                    </div>
                </div>

                <div class="border_summary"><hr></div>

                <div class="information_summary_total">
                    <div>
                        <p>Total</p>
                    </div>

                    <?php foreach($value_total as $value): ?>

                        <div>
                            <p>R$<?=$value['value']?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
                
            </div>
        </div>

        <div class="border"><hr id="border_continue"></div>

        <div class="continue">
            <button type="submit">Continue</button>
        </div>
    
    </form>

    <footer class="footer">
        <div class="rede_social">
            <ul>
                <li><a href="https://www.instagram.com/no.sleep.boyz?igsh=MWVsOHk4ZjIwY2hrOA=="><i class="fa-brands fa-instagram"></i></a></li>
            </ul>
        </div>
        <div class="info">
            <p>NoSleep, trust and quality.</p>
        </div>
        <div class="copy">
            <p>&copy;NoSleep</p>
        </div>
        <div class="footer_politics">
            <ul>
                <li><a href="">TERMO DE USO            </a></li>
                <li><a href="">POLÍTICAS DE PRIVACIDADE</a></li>
                <li><a href="">CENTRAL DE ATENDIMENTO  </a></li>
                <li><a href="">TERMOS DE SERVIÇO       </a></li>
                <li><a href="">POLÍTICA DE REEMBOLSO   </a></li>
            </ul>
        </div>
        <div class="footer_end">
            <ul>
                <li>NOSLEEP INDÚSTRIA E COMÉRCIO DE ROUPAS LTDA - XX.XXX.XXX/XXXX-XX</li>
                <li>RUA PANCADA, XX - VILA CAROL - XXXXX-XXX - SOROCABA - SP        </li>
            </ul>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/5dc8345cee.js" crossorigin="anonymous"></script>
    <script src="js/endereco.js"></script>

</body>
</html>