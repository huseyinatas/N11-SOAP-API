<?php
include "index.php";

//* N11 Kayıtlı Ürünü Çekme
$getProductBySeller = $n11->GetProductBySellerCode('db0000');
var_dump($getProductBySeller);