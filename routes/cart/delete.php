<?php

require_once('../../services/delete.php');

delete_cart($_GET['id']);

header('Location: ../../pages/cart/index.php');