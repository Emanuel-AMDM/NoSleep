<?php

require_once('../../database/execute_query.php');

function get_employee_by_id($id){

    $sql = "SELECT * FROM client WHERE id = $id";
    $employee = execute_query($sql);

    foreach($employee as $employee){
        if($employee['id'] == $id){
            return $employee;
        }
    }
}