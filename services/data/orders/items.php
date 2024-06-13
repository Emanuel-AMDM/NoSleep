<?php

require_once('../../database/execute_query.php');

function list_entity_orders_items($id_order){

    $sql = "SELECT  order_items.id_orders as id_order,
                    orders.zipcode as zipcode_address,
                    orders.status as status,
                    order_items.amount as amount,
                    orders.reference as reference,
                    order_items.cod_part as cod_part,
                    order_items.quantity as quantity,
                    order_items.size as size
            FROM orders, order_items
            WHERE orders.id = order_items.id_orders
            AND orders.id = $id_order";
    $orders = execute_query($sql);

    return $orders;
}