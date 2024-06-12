<?php
session_start();

if(!isset($_SESSION['user'])){
    header('Location: ../../login/index.php');
    exit;
}else{
    $id_user = $_SESSION['user'];
}

require_once('../../services/frete_payment/get_by_id.php');
require_once('../../services/frete_payment/list_entity.php');
require_once('../../services/frete_payment/value_total.php');
require_once('../../services/frete_payment/get_by_id_order.php');

$client           = get_by_id($id_user);
$cart_information = list_entity($id_user);
$cart_subtotal    = list_entity($id_user);
$value_total      = value_total($id_user);
$id_order         = get_by_id_order($id_user);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NoSleep - Frete</title>
    <link rel="stylesheet" href="../../css/payment/frete.css">
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
        <label for="">Meu Carrinho > Informações > <strong>Frete</strong></label>
    </div>

    <div class="titulo_frete">
        <h2>Informações</h2>
    </div>

    <div class="border"><hr></div>

    <div class="frete_info">
        <div class="frete_info_border">
            <div class="frete_info_contact">
                <div>
                    <p>Contact</p>
                </div>
                <div>
                    <p><?= $client['email'] ?></p>
                </div>
                <div>
                    <a href="../client/edit.php?id=<?= $client['id'] ?>" id="alter_up">To alter</a>
                </div>
            </div>
            <hr>
            <div class="frete_info_sendto">
                <div>
                    <p>Send to</p>
                </div>
                <div>
                    <p><?= $client['road'] . ', ' . $client['neighborhood'] . ', ' . $client['state'] . ', ' . $client['city'] . ', ' . $client['complement'] . ', ' . $client['number'] ?></p>
                </div>
                <div>
                    <a href="../client/edit.php?id=<?= $client['id'] ?>" id="alter_down">To alter</a>
                </div>
            </div>
        </div>
    </div>

    <div class="border"><hr id="border_down"></div>

        <div class="frete_calculate">
            <form action="../../routes/frete_payment/update.php?id=<?= $client['id'] ?>" method="post">
                <div>
                    <div>
                        <h2>Frete</h2>
                    </div>
                    <div class="frete_type">
                        <p>Select a shipping method below:</p>
                        <div class="border_box">
                            <div class="border_box_display">
                                <div>
                                    <input type="radio" name="frete" id="">Sedex Correio
                                    <p>4 dias ulteis</p>
                                </div>
                                <div>
                                    <p id="value1">$25</p>
                                </div>
                            </div>
                        </div>
                        <div class="border_box">
                            <div  class="border_box_display">
                                <div> 
                                    <input type="radio" name="frete" id="">Motoboy Sorocaba / Votorantim
                                    <p>Entregas a partir das 14horas</p>
                                </div>
                                <div>
                                    <p id="value3">$5</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <div class="frete_summary">
                <h2>Purchase Summary</h2>

                <?php foreach($cart_information as $cart): ?>

                    <div class="frete_summary_img">
                        <img src="../../uploads/<?= $cart['picture'] ?>" alt="">
                        <p><?= $cart['type'] ?> - <?= $cart['color'] ?> <br> cod.<?= $cart['cod'] ?> | R$<?= $cart['value'] ?></p>
                        <p id="value">Amount.<?= $cart['amount'] ?> | Size.<?= $cart['size'] ?></p>
                    </div>

                <?php endforeach; ?>

                <div class="border_summary"><hr></div>
                
                <div class="frete_summary_subtotal_frete">

                    <?php foreach($cart_subtotal as $cart_sub): ?>

                        <div class="frete_summary_subtotal">
                            <div>
                                <p>Subtotal</p>
                            </div>
                            <div>
                                <p>R$<?= ROUND($cart_sub['value'] * $cart_sub['amount']) ?></p>
                            </div>
                        </div>

                    <?php endforeach; ?>

                    <div class="frete_summary_frete">
                        <div>
                            <p>Frete</p>
                        </div>
                        <div>
                            <p>$15</p>
                        </div>
                    </div>
                </div>

                <div class="border_summary"><hr></div>

                <div class="frete_summary_total">
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
        <a href="./process/index.php" type="button" class="btn btn-primary">Continue</a>
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

</body>
</html>