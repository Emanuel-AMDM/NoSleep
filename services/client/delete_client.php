<?php

require_once('../../database/execute_query.php');

function delete_client($id){

    $sql = "DELETE FROM client WHERE id = $id";
    execute_query($sql);
}