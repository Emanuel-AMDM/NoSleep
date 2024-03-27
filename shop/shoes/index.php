<?php
require_once('../../services/list_entity.php');
$stock = list_entity_stock();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NoSleep - Shop</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>
<body>

    <div id="top" class="titulo">
        <a href="../../index/index.html"><img src="../../img_logo/Destaques_07.png" alt=""></a>
    </div>

    <nav>
        <div class="filter_bar">
            <div>
                <ul class="menu">
                    <li><a href="../shoes/index.html"         >Shoes         </a></li>
                    <li><a href="../tshirt/index.html"        >T-shirts      </a></li>
                    <li><a href="../caps/index.html"          >Caps          </a></li>
                    <li><a href="../sweatshirts/index.html"   >Sweatshirts   </a></li>
                    <li><a href="../all_categories/index.html">All categories</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="img_shop">
        <?php foreach($stock as $stock): ?>
            <div class="border_img">
                <a href="#modal"><img src="../../img/img_peita1_frente.png" alt="" id="img_1" onmouseover="alternarImagem1()"></a>
                <div class="border_txt">
                    <label for="" id="roupa1">CAMISETA - PRETA</label>
                    <p>$10</p>
                    <i class="fa-solid fa-cart-plus"></i>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    

    <div class="back_top">
        <h3><a href="#top">VOLTAR AO TOPO</a></h3>
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
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>

</body>
</html>