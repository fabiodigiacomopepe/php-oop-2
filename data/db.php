<?php

require_once("./models/Product.php");
require_once("./models/Color.php");
require_once("./models/ProductType.php");
require_once("./models/AnimalType.php");

$animal_CANE = new AnimalType("Cane", "https://png.pngtree.com/png-vector/20191018/ourlarge/pngtree-dog-logo-design-vector-icon-png-image_1824202.jpg");
$animal_GATTO = new AnimalType("Gatto", "https://www.ipastock.net/members/get-image.php?s=st2&u=thumbs/1032749/vector/10912/109123810/api_thumb_450.jpg");

$ProductTypes = [
    $ProductType1 = new ProductType("Croccantini", "40 Euro", "Cibo", "https://content.dambros.it/uploads/2017/06/20185238/0000152287.jpg", $animal_CANE, "Verde"),
    $ProductType2 = new ProductType("Canna da pesca", "8 Euro", "Gioco", "https://m.media-amazon.com/images/I/61PQnaDWlKL._AC_UF894,1000_QL80_.jpg", $animal_GATTO, "Rosso"),
    $ProductType3 = new ProductType("Ciotola in acciaio", "6 Euro", "Accessorio", "https://www.zuccarone.it/423-large_default/ciotola-in-acciaio-inox-da-2800-ml-lavabile-in-lavastoviglie.jpg", $animal_CANE, "Giallo"),
    $ProductType4 = new ProductType("Tiragraffi a casetta", "32 Euro", "Cuccia", "https://arcaplanet.vteximg.com.br/arquivos/ids/265811/185001_PHO_PRO_CAT_CLIP_44428-1.jpg?v=637740424612900000", $animal_GATTO, "Blu")
];