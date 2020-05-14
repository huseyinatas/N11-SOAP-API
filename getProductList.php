<?php
include "index.php";

//* N11 Ürün Listesini Çekme
$productList = $n11->GetProductList(5, 0);
var_dump($productList);