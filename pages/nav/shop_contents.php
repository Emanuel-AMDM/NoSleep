<?php
session_start();

require_once('../../services/client/get_by_id_nav.php');

if(!isset($_SESSION['user'])){
    header('/index.php');
    $client = get_by_id(0);
}else{
    $id_client = $_SESSION['user'];
    $client = get_by_id($id_client);
}
?>

<?php if($client['name'] != '' && $client['surname'] != ''): ?>
    <div class="title_login">
        <ul class="login">
            <li>
                <a><?= $client['name'] . ' ' . $client['surname'] ?></a>
                <ul class="li_contents">
                    <?php if($client['type'] == 2): ?>
                        <li><a href="../shop/index.php"                    >Novidades</a></li>
                        <li><a href="../../MANUAL-DA-IDENTIDADE-VISUAL.pdf">Lookbook</a></li>
                        <li><a href="../stock/index.php"                   >Estoque</a></li>
                        <li><a href="../employee/index.php"                >Funcionários</a></li>
                        <li><a href="../client/index.php"                  >Clientes</a></li>
                    <?php else: ?>
                        <li><a href="../shop/shoes.php"                         >Calçados           </a></li>
                        <li><a href="../shop/tshirt.php"                        >Camisetas          </a></li>
                        <li><a href="../shop/caps.php"                          >Bonés              </a></li>
                        <li><a href="../shop/sweatshirts.php"                   >Moletons           </a></li>
                        <li><a href="../shop/all_categories.php"                >Todas as Categorias</a></li>
                        <li><a href="../cart.php"                               >Carinho            </a></li>
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

<div id="top" class="titulo">
    <a href="../index/index.php"><img src="../../img/img_logo/Destaques_07.png" alt=""></a>
</div>

<nav>
    <div class="filter_bar">
        <div>
            <ul class="menu">
                <li><a href="./shoes.php"         >Calçados           </a></li>
                <li><a href="./tshirt.php"        >Camisetas          </a></li>
                <li><a href="./caps.php"          >Bonés              </a></li>
                <li><a href="./sweatshirts.php"   >Moletons           </a></li>
                <li><a href="./all-categories.php">Todas as Categorias</a></li>
            </ul>
        </div>
    </div>
</nav>