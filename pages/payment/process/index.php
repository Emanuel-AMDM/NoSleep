<?php

session_start();

if(!isset($_SESSION['user'])){
    header('Location: ../../auth/login/index.php');
    exit;
}else{
    $id_user = $_SESSION['user'];
}

require_once('../../../services/frete_payment/get_by_id.php');
require_once('../../../services/frete_payment/list_entity.php');
require_once('../../../services/frete_payment/get_by_id_order.php');
require_once('pagseguro.php');

$client           = get_by_id($id_user);
$cart_information = list_entity($id_user);
$user_order        = get_by_id_order($id_user);

setExtraAmount(10.00);
setReference($user_order['reference']);

setBuyer([
    'name'  => $client['name'] . ' ' . $client['surname'],
    'email' => $client['email']
]);

setAddress([
    'street'      => $user_order['street'],
    'number'      => $user_order['number'],
    'complement'  => $user_order['complement'],
    'district'    => $user_order['neighborhood'],
    'city'        => $user_order['city'],
    'state'       => $user_order['state'],
    'country'     => 'BRA',
    'postal_code' => preg_replace('/\D/', '', $user_order['zipcode'])
]);

foreach($cart_information as $cart_info){
    addItem([
        'id' => $cart_info['id'],
        'description' => $cart_info['type'],
        'amount' => number_format($cart_info['value'], 2),
        'quantity' => $cart_info['quantity']
    ]);
}

header('Location: ' . sendPagseguro());