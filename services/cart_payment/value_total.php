<?php

require_once('../../database/execute_query.php');

function value_total($id_user){

    $sql = "    SELECT  ROUND(SUM(stock.value * cart.qntd_part)) as value
                FROM    cart,
                        cart_payment,
                        stock
                WHERE cart.id = cart_payment.id_cart
                AND cart.id_part = stock.id
                AND cart_payment.id_cart is not null
                AND cart.id_client = $id_user";
    $value_total = execute_query($sql);

    return $value_total;
}