<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./style/style.css">
        <?php require_once("./data/db.php"); ?>
        <title>Il mio shop</title>
    </head>

    <body>
        <h1>Il mio shop</h1>

        <div class="container">
            <?php
                foreach ($ProductTypes as $ProductType) {
            ?>
                    <div class="card">
                        <div class="immagine">
                            <img src="<?php echo $ProductType -> getImage();?>" alt="croccantini">  
                        </div>
                        <div class="info">
                            <div class="titolo_prezzo">
                                <h2>
                                    <?php echo $ProductType -> getName(); ?>
                                </h2>
                                <div class="prezzo">
                                    <?php echo $ProductType -> getPrice(); ?>
                                </div>
                            </div>
                            <div>
                                Tipo di articolo: <b><?php echo $ProductType -> getType(); ?></b>
                            </div>
                            <div class="icona_categoria">
                                <div>
                                    <img src="<?php echo $ProductType -> getAnimalType() -> getCategoryIcon();?>" alt="icona categoria - cibo">
                                </div>
                            </div>
                            <div>
                                Categoria: <b><?php echo $ProductType -> getAnimalType() -> getCategory();?></b>
                            </div>
                        </div>
                    </div>
            <?php
                }
            ?>
        </div>
    </body>
</html>