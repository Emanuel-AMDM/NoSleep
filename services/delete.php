<?php

require_once('../../database/execute_query.php');

function delete_client($id){

    $sql = "DELETE FROM client WHERE id = $id";
    execute_query($sql);
}

function delete_employee($id){

    $sql = "DELETE FROM client WHERE id = $id";
    execute_query($sql);
}

function delete_stock($id){

    $sql = "DELETE FROM stock WHERE id = $id";
    execute_query($sql);
}

function delete_cart($id){

    $sql = "DELETE FROM cart WHERE id = $id";
    execute_query($sql);
}