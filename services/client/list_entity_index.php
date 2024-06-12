<?php

require_once('../../database/execute_query.php');

function list_entity_client(){
    
    $sql = "SELECT * FROM client WHERE type = 1";
    $client = execute_query($sql);

    return $client;

}