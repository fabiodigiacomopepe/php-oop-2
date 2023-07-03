<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./style/style.css">
        <?php
            require_once("./data/db.php");
        ?>
        <title>
            <?php echo $animal_type1 -> getName(); ?>
        </title>
    </head>

    <body>
        <h1>Il mio shop</h1>

        <div class="container">
            <div class="card">
                <div class="immagine">
                    <img src="<?php echo $animal_type1 -> getProductType() -> getImage();?>" alt="croccantini">  
                </div>
                <div class="info">
                    <div class="titolo_prezzo">
                        <h2>
                            <?php echo $animal_type1 -> getName(); ?>
                        </h2>
                        <div class="prezzo">
                            <?php echo $animal_type1 -> getPrice(); ?>
                        </div>
                    </div>
                    <div>
                        Tipo di articolo: <b><?php echo $animal_type1 -> getProductType() -> getType(); ?></b>
                    </div>
                    <div class="icona_categoria">
                        <img src="<?php echo $animal_type1 -> getProductType() -> getCategoryIcon();?>" alt="icona categoria - cibo">
                    </div>
                    <div>
                        Categoria: <b><?php echo $animal_type1 -> getCategory();?></b>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="immagine">
                    <img src="<?php echo $animal_type2 -> getProductType() -> getImage();?>" alt="croccantini">  
                </div>
                <div class="info">
                    <div class="titolo_prezzo">
                        <h2>
                            <?php echo $animal_type2 -> getName(); ?>
                        </h2>
                        <div class="prezzo">
                            <?php echo $animal_type2 -> getPrice(); ?>
                        </div>
                    </div>
                    <div>
                        Tipo di articolo: <b><?php echo $animal_type2 -> getProductType() -> getType(); ?></b>
                    </div>
                    <div class="icona_categoria">
                        <img src="<?php echo $animal_type2 -> getProductType() -> getCategoryIcon();?>" alt="icona categoria - cibo">
                    </div>
                    <div>
                        Categoria: <b><?php echo $animal_type2 -> getCategory();?></b>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="immagine">
                    <img src="<?php echo $animal_type3 -> getProductType() -> getImage();?>" alt="croccantini">  
                </div>
                <div class="info">
                    <div class="titolo_prezzo">
                        <h2>
                            <?php echo $animal_type3 -> getName(); ?>
                        </h2>
                        <div class="prezzo">
                            <?php echo $animal_type3 -> getPrice(); ?>
                        </div>
                    </div>
                    <div>
                        Tipo di articolo: <b><?php echo $animal_type3 -> getProductType() -> getType(); ?></b>
                    </div>
                    <div class="icona_categoria">
                        <img src="<?php echo $animal_type3 -> getProductType() -> getCategoryIcon();?>" alt="icona categoria - cibo">
                    </div>
                    <div>
                        Categoria: <b><?php echo $animal_type3 -> getCategory();?></b>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="immagine">
                    <img src="<?php echo $animal_type4 -> getProductType() -> getImage();?>" alt="croccantini">  
                </div>
                <div class="info">
                    <div class="titolo_prezzo">
                        <h2>
                            <?php echo $animal_type4 -> getName(); ?>
                        </h2>
                        <div class="prezzo">
                            <?php echo $animal_type4 -> getPrice(); ?>
                        </div>
                    </div>
                    <div>
                        Tipo di articolo: <b><?php echo $animal_type4 -> getProductType() -> getType(); ?></b>
                    </div>
                    <div class="icona_categoria">
                        <img src="<?php echo $animal_type4 -> getProductType() -> getCategoryIcon();?>" alt="icona categoria - cibo">
                    </div>
                    <div>
                        Categoria: <b><?php echo $animal_type4 -> getCategory();?></b>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>