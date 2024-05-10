<?php

require_once('../database/execute_query.php');

function list_entity_orders($id_user){

    $sql = "SELECT DISTINCT(order_items.id_orders) as id_order,
                    orders.zipcode as zipcode_address,
                    orders.status as status,
                    orders.amount as amount,
                    orders.reference as reference
            FROM    orders,
                    order_items
            WHERE orders.id = order_items.id_orders
            AND orders.id_client = $id_user";
    $orders = execute_query($sql);

    return $orders;
}