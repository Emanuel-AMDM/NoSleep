<?php

require_once('list_entity.php');

function get_client_by_id($id){

    $client = list_entity_client();

    foreach($client as $cli){
        if($cli['id'] == $id){
            return $cli;
        }
    }
}