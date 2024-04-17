<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NoSleep - Payment</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>

    <div id="modal" class="modal">
        
        <div class="content">
            <div class="form_payment_card">
                <div class="credito">
                    <input type="radio" name="card"> <i class="fa-solid fa-credit-card"></i> Cartão de Crédito
                </div>
                <div class="debito">
                    <input type="radio" name="card"> <i class="fa-solid fa-credit-card"></i> Cartão de Débito
                </div>
            </div>
            <div class="footer_modal">
                <a href="#" class="footer-btn-close">Fechar</a>
            </div>
        </div>

    </div>
    
    <nav class="nav_menu">
        <div>
            <img src="../img_logo/Destaques_07 - Menu.png" alt="">
        </div>
    </nav>

    <div class="info_payment">
        <label for="">MyCart > Infomation > Frete > <strong>Payment</strong></label>
    </div>

    <div class="payment_title">
        <h2>Payment</h2>
    </div>

    <div class="border"><hr></div>

    <div class="cpf_payment">
        <div>
            <label for="">CPF/CNPJ do pagador</label>
        </div>
        <div>
            <input type="text">
        </div>
    </div>

    <div class="border"><hr id="border_down"></div>

    <div class="delivery_address">
        <div>
            <div>
                <h2>Payment</h2>
            </div>
            <div class="address_input">
                <div class="address_info">
                    <input type="text" placeholder="Nome do Titular do Cartão">
                </div>
                <div class="address_info">
                    <div class="address_info_united">
                        <div>
                            <input type="text" placeholder="Número do Cartão" id="number_card">
                        </div>
                        <div>
                            <input type="text" placeholder="CVV" id="cvv">
                        </div>
                    </div>
                </div>
                <div class="address_info">
                    <label for="">Validade do Cartão </label><input type="month" id="validade">
                </div>
            </div>
        </div>

        <div class="payment_summary">
            <h2>Form of Payment</h2>

            <div id="form_payment"></div>

            <div class="form_payment"><a href="#modal">Escolha uma/outra forma de pagamento</a></div>
            
            <div class="parcelas">
                <label for="">Parcelas</label>
                <select name="" id="">
                    <option value="">1x sem juros</option>
                    <option value="">2x sem juros</option>
                    <option value="">3x sem juros</option>
                    <option value="">4x sem juros</option>
                    <option value="">5x sem juros</option>
                    <option value="">6x sem juros</option>
                    <option value="">7x sem juros</option>
                    <option value="">8x com juros</option>
                    <option value="">9x com juros</option>
                    <option value="">10x com juros</option>
                    <option value="">11x com juros</option>
                    <option value="">12x com juros</option>
                </select>
            </div>
            <div class="input_save">
                <input type="checkbox"> Salvar meu cartão com segurança para compras futuras.
            </div>
        </div>
    </div>

    <div class="border"><hr id="border_continue"></div>

    <div class="continue">
        <a href="" type="button" class="btn btn-primary">Finalizar Compra</a>
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
    <script src="js/endereco.js"></script>

</body>
</html>