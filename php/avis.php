<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8" />
	<title>Canirando</title>
	<meta name="description" content="site de randonne canine" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="<?php echo css_dir ?>theme.css">
    <link rel="shortcut icon" href="<?php echo images_dir ?>logo bulma.jpg">
	<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=menu" /> -->
</head>

<body>
	<?php include ('layout/header.php'); ?>
    <section>
        <div class="images">
            <img src="images/rando.jpg" alt=" rando a la campagne">
            <img src="images/rando2.jpg" alt=" rando a la campagne">
            <img src="images/rando3.jpg" alt=" rando a la campagne">
            <img src="images/rando4.jpg" alt=" rando a la campagne">
        </div>
        <section class="info-rando-complete">
            <div class="relief">
                <div class=" titre-rando">
                    <h2>La casse patte</h2>
                </div>
                <div class="lieu-rando">
                    <p>Pyrénées-Atlantiques, Ibardin</p>
                </div>
                <div class="info">
                    <h2>Infos:</h2>
                    <div class="indication">
                        <div class="distance">
                            <span>Distance</span>
                            <p>7Km</p>
                        </div>
                        <div class="duree">
                            <span>Durée moyenne</span>
                            <p> 2h38min</p>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
        <section>
            <div class="laisser-un-avis">
                <div>
                <h2>Laisser un avis</h2>
                <div class="form-group">
                    <label for="name" class="text-form"></label>
                    <textarea name="Votre message" id="message"></textarea>
            
                <div class="button-btn">
                <a href="page-rando.html"><button class="button">Envoyer</button></a>
              
                </div>
            </div>
        </section>   

