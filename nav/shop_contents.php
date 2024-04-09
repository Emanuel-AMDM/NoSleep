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
                <ul>
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

<div id="top" class="titulo">
    <a href="../../index/index.html"><img src="../../img_logo/Destaques_07.png" alt=""></a>
</div>

<nav>
    <div class="filter_bar">
        <div>
            <ul class="menu">
                <li><a href="../shoes/index.php"         >Shoes         </a></li>
                <li><a href="../tshirt/index.php"        >T-shirts      </a></li>
                <li><a href="../caps/index.php"          >Caps          </a></li>
                <li><a href="../sweatshirts/index.php"   >Sweatshirts   </a></li>
                <li><a href="../all_categories/index.php">All categories</a></li>
            </ul>
        </div>
    </div>
</nav>