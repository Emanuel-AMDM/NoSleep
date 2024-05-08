<?php

require_once('../../database/execute_query.php');

function create_client($name, $surname, $email, $telephone, $gender, $birthday, $password){

    //coloca a data de hoje
    $agora = date('Y-m-d H:i:s');
    $dt_created_at = $agora;
    $dt_updated_at = $agora;

    //checa se email ja existe
    $sql1 = "SELECT email FROM client WHERE email = '$email'";
    $emails = execute_query($sql1);

    if(count($emails) > 0){
        return exit('E-mail já cadastrado');
    }

    //insert sql
    $sql2 = "INSERT INTO client (id, type, name, surname, email, telephone, gender, login, password, cpf_cnpj, rg_ie, cep, road, neighborhood, city, state, complement, number, birthday, dt_created_at, dt_updated_at) VALUES (NULL, 1, '$name', '$surname', '$email', '$telephone', '$gender', '$email', '$password', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$birthday', '$dt_created_at', '$dt_updated_at')";
    execute_query($sql2);
}

function create_employee($name, $surname, $birthday, $cpf_cnpj, $gender, $rg_ie, $telephone, $email, $cep, $road, $neighborhood, $city, $state, $complement, $number, $login, $password, $birthday){

    //coloca a data de hoje
    $agora = date('Y-m-d H:i:s');
    $dt_created_at = $agora;
    $dt_updated_at = $agora;

    //checa se email ja existe
    $sql1 = "SELECT email FROM client WHERE email = '$email'";
    $emails = execute_query($sql1);

    if(count($emails) > 0){
        return exit('E-mail já cadastrado');
    }

    //insert sql
    $sql1 = "INSERT INTO client (id, type, name, surname, email, telephone, gender, login, password, cpf_cnpj, rg_ie, cep, road, neighborhood, city, state, complement, number, birthday, dt_created_at, dt_updated_at) VALUES (NULL, 2, '$name', '$surname', '$email', '$telephone', '$gender', '$login', '$password', '$cpf_cnpj', '$rg_ie', '$cep', '$road', '$neighborhood', '$city', '$state', '$complement', '$number', '$birthday', '$dt_created_at', '$dt_updated_at')";
    execute_query($sql1);
}

function create_stock($part_code, $sector, $type, $subtype, $material, $line, $color, $details, $pp, $p, $m, $g, $gg, $xgg, $employee, $dt_register, $value, $name_picture){

    //coloca a data de hoje
    $agora = date('Y-m-d H:i:s');
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

    if(empty($pp)){
        $pp = 0;
    }
    if(empty($p)){
        $p = 0;
    }
    if(empty($m)){
        $m = 0;
    }
    if(empty($g)){
        $g = 0;
    }
    if(empty($gg)){
        $gg = 0;
    }
    if(empty($xgg)){
        $xgg = 0;
    }

    //insert sql
    $sql1 = "INSERT INTO stock (part_code, sector, type, subtype, material, line, color, details, pp, p, m, g, gg, xgg, employee, dt_register, value, dt_created_at, dt_updated_at, picture) VALUES ('$part_code', '$sector', '$type', '$subtype', '$material', '$line', '$color', '$details', '$pp', '$p', '$m', '$g', '$gg', '$xgg', '$employee', '$dt_register', '$value', '$dt_created_at', '$dt_updated_at', '$name_picture')";
    execute_query($sql1); 
}

function create_cart($id_part, $id_client, $qntd_part, $size){

    //coloca a data de hoje
    $agora = date('Y-m-d H:i:s');
    $dt_created_at = $agora;
    $dt_updated_at = $agora;

    if(empty($qntd_part)){
        $qntd_part = 0;
    }
    
    if(empty($size)){
        $size = 0;
    }

    //insert sql
    $sql1 = "INSERT INTO cart (id_part, id_client, qntd_part, size, dt_created_at, dt_updated_at) VALUES ('$id_part', '$id_client', '$qntd_part', '$size', '$dt_created_at', '$dt_updated_at')";
    execute_query($sql1);
}

function create_cart_payment($id){

    //coloca a data de hoje
    $agora = date('Y-m-d H:i:s');
    $dt_created_at = $agora;
    $dt_updated_at = $agora;

    //insert sql
    $sql1 = "INSERT INTO cart_payment (id_cart, dt_created_at, dt_updated_at) VALUES ('$id', '$dt_created_at', '$dt_updated_at')";
    execute_query($sql1);
}



function create_address_order($id, $zipcode, $street, $number, $complement, $neighborhood, $city, $state, $amount){

    //coloca a data de hoje
    $agora = date('Y-m-d H:i:s');
    $dt_created_at = $agora;
    $dt_updated_at = $agora;

    $reference = md5(uniqid(time() * rand()));

    //insert sql
    $sql1 = "INSERT INTO orders (id_client, zipcode, street, number, complement, neighborhood, city, state, status, amount, reference, shipping_method, dt_created_at, dt_updated_at) VALUES ('$id', '$zipcode', '$street', '$number', '$complement', '$neighborhood', '$city', '$state', 0, '$amount', '$reference', 0, '$dt_created_at', '$dt_updated_at')";
    execute_query($sql1);

    $sql2 = "SELECT * FROM orders WHERE id_client = $id";
    $ultimo_pedido = execute_query($sql2);

    foreach($ultimo_pedido as $ulti){
        $ulti_id = $ulti['id']; //ultimo id orders do cliente
    }

    $sql3 = "SELECT * FROM cart_payment, cart, stock WHERE cart_payment.id_cart = cart.id AND cart.id_part = stock.id AND cart.id_client = $id";
    $info_cart = execute_query($sql3);

    foreach($info_cart as $info){

        $cod_part = $info['part_code'];
        $quantity = $info['qntd_part'];
        $amount   = $info['value'];
        $size     = $info['size'];

        $sql4 = "INSERT INTO order_items (id_orders, cod_part, quantity, amount, size, dt_created_at, dt_updated_at) VALUES ('$ulti_id', '$cod_part', '$quantity', '$amount', '$size','$dt_created_at', '$dt_updated_at')";
        execute_query($sql4);
    }


}