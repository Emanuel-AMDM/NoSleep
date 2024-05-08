<?php

$order = [
    'email' => 'menezesemanuel007@gmail.com',
    'token' => 'AF831BDA13BC470E892E98A480BE14F8',
    'currency' => 'BRL',
    'items' => [],
    'extraAmount' => '',
];

function setExtraAmount($extraAmount)
{
    global $order;

    $order['extraAmount'] = $extraAmount;
}

function setReference($reference)
{
    global $order;

    $order['reference'] = $reference;
}

function setBuyer($buyer)
{
    global $order;

    $order['sender'] = $buyer;
}

function setAddress($address)
{
    global $order;

    $order['address'] = $address;
}

function addItem($item)
{
    global $order;

    $order['items'][] = $item;
}

function sendPagseguro()
{
    global $order;
    $url = 'https://ws.sandbox.pagseguro.uol.com.br/v2/checkout?email=' . $order['email'] . '&token=' . $order['token'];

    $data = [
        'email' => $order['email'],
        'token' => $order['token'],
        'currency' => 'BRL',
        'reference' => 'REF1234',
        'senderName' => $order['sender']['name'],
        'senderEmail' => $order['sender']['email'],
        'shippingType' => '1',
        'shippingAddressStreet' => $order['address']['street'],
        'shippingAddressNumber' => $order['address']['number'],
        'shippingAddressComplement' => $order['address']['complement'],
        'shippingAddressDistrict' => $order['address']['district'],
        'shippingAddressPostalCode' => $order['address']['postal_code'],
        'shippingAddressCity' => $order['address']['city'],
        'shippingAddressState' => $order['address']['state'],
        'shippingAddressCountry' => 'BRA'
    ];

    foreach ($order['items'] as $index => $item) {
        $data['itemId' . ($index + 1)] = $item['id'];
        $data['itemDescription' . ($index + 1)] = $item['description'];
        $data['itemAmount' . ($index + 1)] = $item['amount'];
        $data['itemQuantity' . ($index + 1)] = $item['quantity'];
    }


    // Setting up the cURL session
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data)); // Form data is sent as URL-encoded
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    // Execute the cURL session
    $response = curl_exec($ch);

    // Check for cURL errors
    if (curl_errno($ch)) {
        echo 'cURL error: ' . curl_error($ch);
        curl_close($ch);
    } else {
        // If the cURL call was successful, parse the XML to extract the checkout code
        $xml = simplexml_load_string($response);
        // var_dump($xml);exit;
        if ($xml === false) {
            echo "Failed to parse the XML response.";
        } else {
            // Assuming the XML response has a structure where the <code> tag is directly under the root
            $checkoutCode = (string) $xml->code;
            if (!empty($checkoutCode)) {
                return "https://sandbox.pagseguro.uol.com.br/v2/checkout/payment.html?code=" . $checkoutCode;
            } else {
                echo "Checkout code not found in the response.";
            }
        }
    }
}