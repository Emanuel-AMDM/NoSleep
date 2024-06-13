<?php
session_start();

require_once('../../services/get-by-id/client/nav-index.php');

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
            <a href="../index/index.php"><img src="../../img/img_logo/Destaques_07 - Menu.png" alt=""></a>
        </div>

        <?php if($client['name'] != '' && $client['surname'] != ''): ?>
            <div class="title_login">
                <ul class="login">
                    <li>
                        <a><?= $client['name'] . ' ' . $client['surname'] ?></a>
                        <ul>
                            <?php if($client['type'] == 2): ?>
                                <li><a href="../shop/index.php"                         >Shop        </a></li>
                                <li><a href="../../MANUAL-DA-IDENTIDADE-VISUAL.pdf"     >Lookbook    </a></li>
                                <li><a href="../stock/index.php"                        >Estoque     </a></li>
                                <li><a href="../employee/index.php"                     >Funcionários</a></li>
                                <li><a href="../client/index.php"                       >Clientes    </a></li>
                                <li><a href="../shop/shoes.php"                         >Tenis              </a></li>
                                <li><a href="../shop/tshirt.php"                        >Camisetas          </a></li>
                                <li><a href="../shop/caps.php"                          >Bonés              </a></li>
                                <li><a href="../shop/sweatshirts.php"                   >Moletons           </a></li>
                                <li><a href="../shop/all_categories.php"                >Todas as Categorias</a></li>
                                <li><a href="../cart/index.php"                         >Carrinho           </a></li>
                                <li><a href="../client/edit.php?id=<?= $client['id'] ?>">Configurações      </a></li>
                            <?php else: ?>
                                <li><a href="../shop/shoes.php"                         >Tenis              </a></li>
                                <li><a href="../shop/tshirt.php"                        >Camisetas          </a></li>
                                <li><a href="../shop/caps.php"                          >Bonés              </a></li>
                                <li><a href="../shop/sweatshirts.php"                   >Moletons           </a></li>
                                <li><a href="../shop/all_categories.php"                >Todas as Categorias</a></li>
                                <li><a href="../cart/index.php"                         >Carrinho           </a></li>
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