<?php

require_once('../../database/execute_query.php');

function create_client($name, $surname, $email, $telephone, $gender, $birthday, $password){

    //coloca a data de hoje
    $agora = date('Y-m-d');
    $dt_created_at = $agora;
    $dt_updated_at = $agora;

    //checa se email ja existe
    $sql1 = "SELECT email FROM client WHERE email = '$email'";
    $emails = execute_query($sql1);

    if(count($emails) > 0){
        return exit('E-mail já cadastrado');
    }

    //insert sql
    $sql2 = "INSERT INTO client (id, name, surname, email, telephone, gender, birthday, password, dt_created_at, dt_updated_at) VALUES (NULL, '$name', '$surname', '$email', '$telephone', '$gender', '$birthday', '$password', '$dt_created_at', '$dt_updated_at')";
    execute_query($sql2);
}

function create_employee($name, $dt_birth, $cpf_cnpj, $rg_ie, $telephone, $email, $cep, $road, $neighborhood, $city, $state, $complement, $number, $login, $password){

    //coloca a data de hoje
    $agora = date('Y-m-d');
    $dt_created_at = $agora;
    $dt_updated_at = $agora;

    if(isset($dt_birth)){
        $dt_birth = $dt_birth;
    }else{
        $dt_birth = '0000-00-00';
    }

    if(isset($rg_ie)){
        $rg_ie = $rg_ie;
    }else{
        $rg_ie = '';
    }
    
    if(isset($cep)){
        $cep = $cep;
    }else{
        $cep = '';
    }

    if(isset($road)){
        $road = $road;
    }else{
        $road = '';
    }

    if(isset($neighborhood)){
        $neighborhood = $neighborhood;
    }else{
        $neighborhood = '';
    }

    if(isset($city)){
        $city = $city;
    }else{
        $city = '';
    }

    if(isset($state)){
        $state = $state;
    }else{
        $state = '';
    }

    if(isset($complement)){
        $complement = $complement;
    }else{
        $complement = '';
    }

    if(isset($number)){
        $number = $number;
    }else{
        $number = '';
    }

    //insert sql
    $sql1 = "INSERT INTO employee (name, dt_birth, cpf_cnpj, rg_ie, telephone, email, cep, road, neighborhood, city, state, complement, number, login, password, dt_created_at, dt_updated_at) VALUES ('$name', '$dt_birth', '$cpf_cnpj', '$rg_ie', '$telephone', '$email', '$cep', '$road', '$neighborhood', '$city', '$state', '$complement', '$number', '$login', '$password', '$dt_created_at', '$dt_updated_at')";
    execute_query($sql1);
}

function create_stock($part_code, $sector, $type, $subtype, $material, $line, $color, $details, $size, $employee, $dt_register, $value, $picture__input, $qntd_part){

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
    $sql1 = "INSERT INTO stock (part_code, sector, type, subtype, material, line, color, details, size, employee, dt_register, value, qntd_part, dt_created_at, dt_updated_at, picture) VALUES ('$part_code', '$sector', '$type', '$subtype', '$material', '$line', '$color', '$details', '$size', '$employee', '$dt_register', '$value', '$qntd_part', '$dt_created_at', '$dt_updated_at', '$picture__input')";
    execute_query($sql1);
}

