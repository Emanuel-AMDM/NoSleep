<?php

require_once('../../../database/execute_query.php');

function list_entity_cart($id_user, $id){

    $sql = "SELECT * FROM cart WHERE cart.id_client = $id_user AND cart.id_part = $id";
    $cart = execute_query($sql);

    foreach($cart as $cart){
        return $cart;
    }
}