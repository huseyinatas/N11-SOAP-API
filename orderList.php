<?php
include "index.php";

//* N11 Sipariş Listesi
$orderList  = $n11->OrderList (
    [
        "productId"=>'',
        "status"=> 'New',
        "buyerName"=> '',
        "orderNumber"=> '',
        "productSellerCode" =>'',
        "recipient"=> '',
        "period"=>[
            "startDate"=> '?',
            "endDate"=> '?'
        ]
    ]
);
var_dump($orderList);
