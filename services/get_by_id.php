<?php

require_once('../database/execute_query.php');

function get_client_by_id($id){

    $sql = "SELECT * FROM client WHERE id = $id";
    $client = execute_query($sql);

    foreach($client as $cli){
        if($cli['id'] == $id){
            return $cli;
        }
    }

}

function get_employee_by_id($id){

    $sql = "SELECT * FROM employee WHERE id = $id";
    $employee = execute_query($sql);

    foreach($employee as $employee){
        if($employee['id'] == $id){
            return $employee;
        }
    }
}

function get_stock_by_id($id){

    $sql = "SELECT * FROM stock WHERE id = $id";
    $stock = execute_query($sql);

    foreach($stock as $stock){
        if($stock['id'] == $id){
            return $stock;
        }
    }

}

