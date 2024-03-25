<?php

require_once('../../database/execute_query.php');

function update_stock($id, $part_code, $sector, $type, $subtype, $material, $line, $color, $details, $size, $employee, $dt_register, $value, $dt_created_at, $picture__input){

    //coloca a data de hoje
    $agora = date('Y-m-d');
    $dt_updated_at = $agora;

    if(isset($picture__input)){
        $picture__input = $picture__input;
    }else{
        $picture__input = '';
    }


    //insert sql
    $sql1 = "UPDATE stock SET part_code = '$part_code', sector = '$sector', type = '$type', subtype = '$subtype', material = '$material', line = '$line', color = '$color', details = '$details', size = '$size', employee = '$employee', dt_register = '$dt_register', value = '$value', dt_created_at = '$dt_created_at', dt_updated_at = '$dt_updated_at', picture = '$picture__input' WHERE id = $id";
    execute_query($sql1);
}