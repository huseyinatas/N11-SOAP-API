<?php
include "index.php";

//*N11 Ürün Kaydetme
$saveProduct = $n11->SaveProduct(
    [
        'productSellerCode' => 'az32897591',
        'title' => 'Deneme üründür satın almayınız.',
        'subtitle' => 'Api Test ürünü ',
        'description' => 'Deneme  ürünümüz.',
        'attributes' =>
            [
                'attribute' => Array()
            ],
        'category' =>
            [
                'id' => 1000038
            ],
        'price' => 0.99,
        'currencyType' => 'TL',
        'images' =>
            [
                'image' =>
                    [
                        'url' => 'http://alyamedya.com/uploads/alya-medya-logo1.png',
                        'order' => 1
                    ]
            ],
        'saleStartDate' => '',
        'saleEndDate' => '',
        'productionDate' => '',
        'expirationDate' => '',
        'productCondition' => '1',
        'preparingDay' => '3',
        'discount' => 10,
        'shipmentTemplate' => 'Alıcı Öder',
        'stockItems' =>
            [
                'stockItem' =>
                    [
                        'quantity' => 1,
                        'sellerStockCode' => 'stokkodu',
                        'attributes' =>
                            [
                                'attribute' => []
                            ],
                        'optionPrice' => 0.99
                    ]
            ]
    ]
);
var_dump($saveProduct);