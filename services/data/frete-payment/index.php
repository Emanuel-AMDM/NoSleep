<?php

require_once('../../database/execute_query.php');

function list_entity($id_user){

    $sql = "    SELECT  cart.id as id,
                        cart.qntd_part as quantity,
                        stock.type as type,
                        stock.color as color,
                        stock.value as value,
                        stock.part_code as cod,
                        stock.picture as picture,
                        cart.qntd_part as amount,
                        CASE
                            WHEN cart.size = 1 THEN 'PP'
                            WHEN cart.size = 2 THEN 'P'
                            WHEN cart.size = 3 THEN 'M'
                            WHEN cart.size = 4 THEN 'G'
                            WHEN cart.size = 5 THEN 'GG'
                            WHEN cart.size = 6 THEN 'XGG'
                        ELSE ''
                        END as size
                FROM    cart,
                        cart_payment,
                        stock
                WHERE cart.id = cart_payment.id_cart
                AND cart.id_part = stock.id
                AND cart_payment.id_cart is not null
                AND cart.id_client = $id_user";
    $cart_payment = execute_query($sql);

    return $cart_payment;
}