<?php

require_once('../../database/execute_query.php');

function delete_stock($id){

    $sql = "DELETE FROM stock WHERE id = $id";
    execute_query($sql);
}