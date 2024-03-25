<?php

require_once('../../database/execute_query.php');

function create_stock($part_code, $sector, $type, $subtype, $material, $line, $color, $details, $size, $employee, $dt_register, $value, $picture__input){

    //coloca a data de hoje
    $agora = date('Y-m-d');
    $dt_created_at = $agora;
    $dt_updated_at = $agora;

    if(isset($part_code)){
        $part_code = $part_code;
    }else{
        $part_code = '';
    }

    if(isset($sector)){
        $sector = $sector;
    }else{
        $sector = '';
    }
    
    if(isset($type)){
        $type = $type;
    }else{
        $type = '';
    }

    if(isset($subtype)){
        $subtype = $subtype;
    }else{
        $subtype = '';
    }

    if(isset($material)){
        $material = $material;
    }else{
        $material = '';
    }

    if(isset($line)){
        $line = $line;
    }else{
        $line = '';
    }

    if(isset($color)){
        $color = $color;
    }else{
        $color = '';
    }

    if(isset($details)){
        $details = $details;
    }else{
        $details = '';
    }

    if(isset($size)){
        $size = $size;
    }else{
        $size = '';
    }

    if(isset($employee)){
        $employee = $employee;
    }else{
        $employee = '';
    }

    if(isset($picture__input)){
        $picture__input = $picture__input;
    }else{
        $picture__input = '';
    }

    //insert sql
    $sql1 = "INSERT INTO stock (part_code, sector, type, subtype, material, line, color, details, size, employee, dt_register, value, dt_created_at, dt_updated_at, picture) VALUES ('$part_code', '$sector', '$type', '$subtype', '$material', '$line', '$color', '$details', '$size', '$employee', '$dt_register', '$value', '$dt_created_at', '$dt_updated_at', '$picture__input')";
    execute_query($sql1);
}