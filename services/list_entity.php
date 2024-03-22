<?php

require_once('../../../database/execute_query.php');

function list_entity_client(){
    $sql = "SELECT * FROM client";
    $client = execute_query($sql);

    return $client;
}