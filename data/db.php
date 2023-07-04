<?php

require_once("./models/Product.php");
require_once("./models/Color.php");
require_once("./models/ProductType.php");
require_once("./models/AnimalType.php");

$animal_CANE = new AnimalType("Cane", "https://png.pngtree.com/png-vector/20191018/ourlarge/pngtree-dog-logo-design-vector-icon-png-image_1824202.jpg");
$animal_GATTO = new AnimalType("Gatto", "https://www.ipastock.net/members/get-image.php?s=st2&u=thumbs/1032749/vector/10912/109123810/api_thumb_450.jpg");

try {
    $ProductType1 = new ProductType("Croccantini", 40, "Cibo", "https://content.dambros.it/uploads/2017/06/20185238/0000152287.jpg", $animal_CANE, "Verde");
} catch (Exception $e) {
    echo $e -> getMessage() . "<br/>";
}

try {
    $ProductType2 = new ProductType("Canna da pesca", 8, "Gioco", "https://m.media-amazon.com/images/I/61PQnaDWlKL._AC_UF894,1000_QL80_.jpg", $animal_GATTO, "Rosso");
} catch (Exception $e) {
    echo $e -> getMessage() . "<br/>";
}

try {
    $ProductType3 = new ProductType("Ciotola in acciaio", 6, "Accessorio", "https://www.zuccarone.it/423-large_default/ciotola-in-acciaio-inox-da-2800-ml-lavabile-in-lavastoviglie.jpg", $animal_CANE, "Giallo");
} catch (Exception $e) {
    echo $e -> getMessage() . "<br/>";
}

try {
    $ProductType4 = new ProductType("Tiragraffi a casetta", 32, "Cuccia", "https://arcaplanet.vteximg.com.br/arquivos/ids/265811/185001_PHO_PRO_CAT_CLIP_44428-1.jpg?v=637740424612900000", $animal_GATTO, "Blu");
} catch (Exception $e) {
    echo $e -> getMessage() . "<br/>";
}

$ProductTypes = [$ProductType1, $ProductType2, $ProductType3, $ProductType4];

// echo "<pre>";
//     var_dump($ProductTypes);
// echo "</pre>";