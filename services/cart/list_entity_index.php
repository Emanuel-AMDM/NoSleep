<?php

require_once('../database/execute_query.php');

function list_entity_cart($id_user){

    $sql = "SELECT  stock.id as id_stock,
                    cart.id as id_cart,
                    stock.part_code,
                    stock.sector,
                    stock.type,
                    stock.subtype,
                    stock.material,
                    stock.color,
                    stock.details,
                    stock.value,
                    stock.picture,
                    CASE
                        WHEN cart.qntd_part = 0 THEN 'Selecionar Quantidade'
                        ELSE cart.qntd_part
                    END as qntd_part,
                    CASE
                        WHEN cart.size = 1 THEN 'PP'
                        WHEN cart.size = 2 THEN 'P'
                        WHEN cart.size = 3 THEN 'M'
                        WHEN cart.size = 4 THEN 'G'
                        WHEN cart.size = 5 THEN 'GG'
                        WHEN cart.size = 6 THEN 'XGG'
                        WHEN cart.size = 0 THEN 'Selecionar Tamanho'
                        ELSE ''
                    END as size
            FROM cart, stock
            WHERE cart.id_part = stock.id
            AND cart.id_client = $id_user";
    $cart = execute_query($sql);

    // $sql = "SELECT * FROM cart WHERE id_client = $id_user";
    $cart = execute_query($sql);

    return $cart;
}