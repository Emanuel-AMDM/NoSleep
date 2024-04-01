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

    if(empty($dt_birth)){
        $dt_birth = '0000-00-00';
    }

    if(empty($rg_ie)){
        $rg_ie = '';
    }
    
    if(empty($cep)){
        $cep = '';
    }

    if(empty($road)){
        $road = '';
    }

    if(empty($neighborhood)){
        $neighborhood = '';
    }

    if(empty($city)){
        $city = '';
    }

    if(empty($state)){
        $state = '';
    }

    if(empty($complement)){
        $complement = '';
    }

    if(empty($number)){
        $number = '';
    }

    //insert sql
    $sql1 = "INSERT INTO employee (name, dt_birth, cpf_cnpj, rg_ie, telephone, email, cep, road, neighborhood, city, state, complement, number, login, password, dt_created_at, dt_updated_at) VALUES ('$name', '$dt_birth', '$cpf_cnpj', '$rg_ie', '$telephone', '$email', '$cep', '$road', '$neighborhood', '$city', '$state', '$complement', '$number', '$login', '$password', '$dt_created_at', '$dt_updated_at')";
    execute_query($sql1);
}

function create_stock($part_code, $sector, $type, $subtype, $material, $line, $color, $details, $size, $employee, $dt_register, $value, $name_picture, $qntd_part){

    //coloca a data de hoje
    $agora = date('Y-m-d');
    $dt_created_at = $agora;
    $dt_updated_at = $agora;

    if(empty($part_code)){
        $part_code = '';
    }

    if(empty($sector)){
        $sector = '';
    }
    
    if(empty($type)){
        $type = '';
    }

    if(empty($subtype)){
        $subtype = '';
    }

    if(empty($material)){
        $material = '';
    }

    if(empty($line)){
        $line = '';
    }

    if(empty($color)){
        $color = '';
    }

    if(empty($details)){
        $details = '';
    }

    if(empty($size)){
        $size = '';
    }

    if(empty($employee)){
        $employee = '';
    }

    if(empty($name_picture)){
        $name_picture = '';
    }

    //insert sql
    $sql1 = "INSERT INTO stock (part_code, sector, type, subtype, material, line, color, details, size, employee, dt_register, value, qntd_part, dt_created_at, dt_updated_at, picture) VALUES ('$part_code', '$sector', '$type', '$subtype', '$material', '$line', '$color', '$details', '$size', '$employee', '$dt_register', '$value', '$qntd_part', '$dt_created_at', '$dt_updated_at', '$name_picture')";
    execute_query($sql1);
}

