<?php
include "index.php";

//* N11 Ürün Silme
$deleteProductBySeller = $n11->DeleteProductBySellerCode('az3289759');
var_dump($deleteProductBySeller);