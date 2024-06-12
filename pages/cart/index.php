<?php
session_start();

$id_user = $_SESSION['user'];

require_once('../../services/cart/list_entity_index.php');
require_once('../../services/client/get_by_id_nav_cart.php');
require_once('../../services/cart_payment/get_by_id.php');

$cart = list_entity_cart($id_user);

// $cart_payment = get_cart_payment_by_id($id_cart); esse usa pro if do botao

if(!isset($_SESSION['user'])){
    header('Location: ../auth/login/index.php');
    exit;
}else{
    $id_client = $_SESSION['user'];
    $client    = get_by_id($id_client);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="Latin1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NoSleep - Cart</title>
    <link rel="stylesheet" href="../../css/cart/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    
    <nav class="nav_menu">
        <div class="nav_flex">
            <div>
                <a href="../index/index.php"><img src="../../img/img_logo/Destaques_07 - Menu.png" alt=""></a>
            </div>

            <?php if($client['name'] != '' && $client['surname'] != ''): ?>
                <div class="title_login">
                    <ul class="login">
                        <li>
                            <a><?= $client['name'] . ' ' . $client['surname'] ?></a>
                            <ul>
                                <?php if($client['type'] == 2): ?>
                                    <li><a href="../shop/index.php"                         >Shop               </a></li>
                                    <li><a href="../../MANUAL-DA-IDENTIDADE-VISUAL.pdf"     >Lookbook           </a></li>
                                    <li><a href="../stock/index.php"                        >Estoque            </a></li>
                                    <li><a href="../employee/index.php"                     >Funcionários       </a></li>
                                    <li><a href="../client/index.php"                       >Clientes           </a></li>
                                    <li><a href="../shop/shoes.php"                         >Ténis              </a></li>
                                    <li><a href="../shop/tshirt.php"                        >Camisetas          </a></li>
                                    <li><a href="../shop/caps.php"                          >Bonés              </a></li>
                                    <li><a href="../shop/sweatshirts.php"                   >Moletons           </a></li>
                                    <li><a href="../shop/all-categories.php"                >Todas as Categorias</a></li>
                                    <li><a href="../client/edit.php?id=<?= $client['id'] ?>">Configurações      </a></li>
                                <?php else: ?>
                                    <li><a href="../shop/shoes.php"                         >Ténis              </a></li>
                                    <li><a href="../shop/tshirt.php"                        >Camisetas          </a></li>
                                    <li><a href="../shop/caps.php"                          >Bonés              </a></li>
                                    <li><a href="../shop/sweatshirts.php"                   >Moletons           </a></li>
                                    <li><a href="../shop/all-categories.php"                >Todas as Categorias</a></li>
                                    <li><a href="../client/edit.php?id=<?= $client['id'] ?>">Configurações      </a></li>
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
                    <a href="../auth/login/index.php">Login/Register</a>
                </div>
            <?php endif; ?>

        </div>
    </nav>

    <div class="title_cart">
        <h1>Informações Carrinho</h1>
    </div>

    <div class="subtitle_cart">
        <p>Aqui você escolhe a quantidade e o tamanho, qual peça você vai levar do carrinho</p>
    </div>

    <div class='contents_center'>
        <div>
            <div class='cart_show'>
                <table>
                    <thead class='cart_show_up'>
                        <tr>
                            <th>Codigo da Peça</th>
                            <th>Setor</th>
                            <th>Tipo</th>
                            <th>Subtipo</th>
                            <th>Material</th>
                            <th>Cor</th>
                            <th>Detalhes</th>
                            <th>Valor</th>
                            <th>Quantidade</th>
                            <th>Tamanho</th>
                            <th>Foto</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <?php foreach($cart as $cart): ?>
                        <tbody class='cart_show_down'>
                            <tr>
                                <td><?= $cart['part_code'] ?></td>
                                <td><?= $cart['sector'] ?></td>
                                <td><?= $cart['type'] ?></td>
                                <td><?= $cart['subtype'] ?></td>
                                <td><?= $cart['material'] ?></td>
                                <td><?= $cart['color'] ?></td>
                                <td><?= $cart['details'] ?></td>
                                <td><?= $cart['value'] ?></td>
                                <td>
                                    <?php if($cart['qntd_part'] === 'Selecionar Quantidade'): ?>
                                        <a href="../shop/view-piece/edit.php?id_cart=<?= $cart['id_cart'] ?>&id_peca=<?= $cart['id_stock'] ?>">Selecionar Quantidade</a>
                                    <?php else: ?>
                                        <?= $cart['qntd_part'] ?>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if($cart['size'] === 'Selecionar Tamanho'): ?>
                                        <a href="../shop/view-piece/edit.php?id_cart=<?= $cart['id_cart'] ?>&id_peca=<?= $cart['id_stock'] ?>">Selecionar Tamanho</a>
                                    <?php else: ?>
                                        <?= $cart['size'] ?>
                                    <?php endif; ?>
                                </td>
                                <td><img src="../../uploads/<?= $cart['picture'] ?>"></td>
                                <td>
                                    <a href="../shop/view-piece/edit.php?id_cart=<?= $cart['id_cart'] ?>&id_peca=<?= $cart['id_stock'] ?>"><i class="fa-solid fa-eye"></i></a>
                                        
                                    <a id="cart_plus" href="../../routes/cart_payment/save.php?id=<?= $cart['id_cart'] ?>"><i class="fa-solid fa-cart-plus"></i></a>
                                
                                    <a id="trash" href="../../routes/cart/delete.php?id=<?= $cart['id_cart'] ?>"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    <?php endforeach; ?>
                </table>
            </div>
            <div class="continue">
                <a href="../payment/cart.php" type="button" class="btn btn-primary">Continue</a>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/5dc8345cee.js" crossorigin="anonymous"></script>

</body>
</html>