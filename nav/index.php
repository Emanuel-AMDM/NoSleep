<?php
session_start();

require_once('../services/client/get_by_id_nav_index.php');

if(!isset($_SESSION['user'])){
    header('Location: ../login/index.php');
    exit;
}else{
    $id_client = $_SESSION['user'];
    $client = get_by_id($id_client);
}
?>

<nav class="nav_menu">
    <div class="nav_flex">
        <div>
            <a href="../index/index.html"><img src="../img_logo/Destaques_07 - Menu.png" alt=""></a>
        </div>

        <?php if($client['name'] != '' && $client['surname'] != ''): ?>
            <div class="title_login">
                <ul class="login">
                    <li>
                        <a><?= $client['name'] . ' ' . $client['surname'] ?></a>
                        <ul>
                            <?php if($client['type'] == 2): ?>
                                <li><a href="../shop/index.php">Shop</a></li>
                                <li><a href="../MANUAL-DA-IDENTIDADE-VISUAL.pdf">Lookbook</a></li>
                                <li><a href="../stock/index.php">Stock</a></li>
                                <li><a href="../employee/index.php">Employee</a></li>
                                <li><a href="../client/index.php">Clients</a></li>
                            <?php else: ?>
                                <li><a href="../client/edit/index.php?id=<?= $client['id'] ?>">Configurações</a></li>
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
                <a href="../login/index.php">Login/Register</a>
            </div>
        <?php endif; ?>

    </div>
</nav>