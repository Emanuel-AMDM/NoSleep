<?php
session_start();

require_once('../../services/client/get_by_id_nav_index.php');

if(!isset($_SESSION['user'])){
    header('Location: ../auth/login/index.php');
    exit;
}else{
    $id_client = $_SESSION['user'];
    $client = get_by_id($id_client);

    if($client['type'] != 2){
        header('Location: ../shop/index.php');
        exit;
    }
}
?>

<nav class="nav_menu">
    <div class="nav_flex">
        <div>
            <a href="./index.php"><img src="../../img/img_logo/Destaques_07 - Menu.png" alt=""></a>
        </div>

        <?php if($client['name'] != '' && $client['surname'] != ''): ?>
            <div class="title_login">
                <ul class="login">
                    <li>
                        <a><?= $client['name'] . ' ' . $client['surname'] ?></a>
                        <ul>
                            <?php if($client['type'] == 2): ?>
                                <li><a href="../shop/index.php"                               >Shop</a></li>
                                <li><a href="../MANUAL-DA-IDENTIDADE-VISUAL.pdf"              >Lookbook</a></li>
                                <li><a href="../stock/index.php"                              >Estoque</a></li>
                                <li><a href="../employee/index.php"                           >Funcionários</a></li>
                                <li><a href="../client/index.php"                             >Clientes</a></li>
                                <li><a href="../shoes/index.php"                              >Ténis              </a></li>
                                <li><a href="../tshirt/index.php"                             >Camisetas          </a></li>
                                <li><a href="../caps/index.php"                               >Bonés              </a></li>
                                <li><a href="../sweatshirts/index.php"                        >Moletons           </a></li>
                                <li><a href="../all_categories/index.php"                     >Todas as Categorias</a></li>
                                <li><a href="../cart/index.php"                               >Carrinho           </a></li>
                                <li><a href="../client/edit/index.php?id=<?= $client['id'] ?>">Configurações      </a></li>
                            <?php else: ?>
                                <li><a href="../shoes/index.php"                              >Ténis              </a></li>
                                <li><a href="../tshirt/index.php"                             >Camisetas          </a></li>
                                <li><a href="../caps/index.php"                               >Bonés              </a></li>
                                <li><a href="../sweatshirts/index.php"                        >Moletons           </a></li>
                                <li><a href="../all_categories/index.php"                     >Todas as Categorias</a></li>
                                <li><a href="../cart/index.php"                               >Carrinho           </a></li>
                                <li><a href="../client/edit/index.php?id=<?= $client['id'] ?>">Configurações      </a></li>
                            <?php endif; ?>
                            <li>
                                <form action="../routes/login/logout.php" method="POST">
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