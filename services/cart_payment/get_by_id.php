<?php

require_once('../database/execute_query.php');

function get_cart_payment_by_id($id){

    $sql = "SELECT * FROM cart_payment WHERE id_cart = $id";
    $cart_payment = execute_query($sql);

    foreach($cart_payment as $cart_payment){
        if($cart_payment['id_cart'] == $id){
            return $cart_payment;
        }
    }

}