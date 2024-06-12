<?php
session_start();

require_once('../../services/cart_payment/list_entity.php');
require_once('../../services/cart_payment/value_total.php');

if(!isset($_SESSION['user'])){
    header('Location: ../../login/index.php');
    exit;
}else{
    $id_user = $_SESSION['user'];
}

$cart_payment = list_entity($id_user);
$cart_pay = list_entity($id_user);
$value_total = value_total($id_user);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NoSleep - MyCart</title>
    <link rel="stylesheet" href="../../css/payment/cart.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>

    <nav class="nav_menu">
        <div>
            <img src="../../img/img_logo/Destaques_07 - Menu.png" alt="">
        </div>
    </nav>

    <div class="info_frete">
        <label for=""><strong>Meu Carrinho</strong> > Informações > Frete</label>
    </div>

    <div class="titulo_frete">
        <h2>Meu Carrinho</h2>
    </div>

    <div class="border"><hr></div>

    <div class="frete_calculate">
        <div>
            
            <div class="cart_itens">
                <div>
                    <h2>Itens</h2>
                </div>
                <?php foreach($cart_payment as $cart_payment): ?>
                    <div class="cart_item_up">
                        <div class="cart_item_img">
                            <img src="../../uploads/<?= $cart_payment['picture'] ?>" alt="">
                        </div>
                        <div class="cart_item_up_text">
                            <p><?= $cart_payment['type'] ?> - <?= $cart_payment['color'] ?></p>
                            <p>cod.<?= $cart_payment['cod'] ?> | <?= 'R$' . $cart_payment['value'] ?></p>
                        </div>
                        <div class="cart_item_up_qntd">
                            <p>amount - <?= $cart_payment['amount'] ?> | size - <?= $cart_payment['size'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        
        <div>
            <div class="frete_summary">
                <h2>Purchase Summary</h2>
                
                <div class="frete_summary_subtotal">
                    <?php foreach($cart_pay as $cart_pay): ?>
                        <div>
                            <spam>Subtotal</spam>
                        </div>
                        <div>
                            <p>R$<?= ROUND($cart_pay['value'] * $cart_pay['amount']) ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="border_summary"><hr></div>

                <div class="frete_summary_total">
                    <div>
                        <p>Total</p>
                    </div>
                    <?php foreach($value_total as $value_total): ?>
                        <div>
                            <p>R$<?= $value_total['value']?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
                
            </div>
        </div>
    </div>

    <div class="border"><hr id="border_continue"></div>

    <div class="continue">
        <a href="./information.php" type="button" class="btn btn-primary">Continue</a>
    </div>

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
    <script src="js/script.js"></script>

</body>
</html>