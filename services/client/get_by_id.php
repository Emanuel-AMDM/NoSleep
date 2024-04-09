<?php

require_once('../database/execute_query.php');

function get_by_id($id){

    $sql = "SELECT * FROM client WHERE id = $id";
    $client = execute_query($sql);

    foreach($client as $cli){
        if($cli['id'] == $id){
            return $cli;
        }
    }

}