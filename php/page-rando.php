<?php
require_once("config/setting.php");
?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Canirando</title>
    <meta name="description" content="site de randonne canine" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="stylesheet" href="<?php echo css_dir ?>theme.css?<?php echo time(); ?>">
    <link rel="shortcut icon" href="<?php echo images_dir ?>logo bulma.png">
</head>

<body>
     <div class="box-wrapper" id="reviewModal">
        <div class="box-container">
            <div class="box">
                <div class="box-title">
                    Partager
                    <div class="button-exit">
                        <button class="btn btn-close" type="button" id="closeReviewModalBtn">&#10006</button>
                    </div>
                </div>
                <div class="box-content">
                    <h2>Laisser un avis</h2>
                    <form action="#" method="POST">
                        <textarea name="review_text" rows="5" placeholder="Votre avis ici..."></textarea>
                        <div class="espace-avis">
                            <button class="envoyer" type="submit">Envoyer votre avis</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   <?php include ('layout/header.php'); ?>
     <div class="fil-ariane">
        <ul>
       <li><a href="index.php">Accueil</a></li> 
        <li><a href="page-rando.php">Rando</a></li> 
    </ul>
    </div>
    <section>
        <div class="images">
            <img src="<?php echo images_dir ?>rando.jpg" alt=" rando a la campagne">
            <img src="<?php echo images_dir ?>rando2.jpg" alt=" rando a la campagne">
            <img src="<?php echo images_dir ?>rando3.jpg" alt=" rando a la campagne">
            <img src="<?php echo images_dir ?>rando4.jpg" alt=" rando a la campagne">
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
                        <div class="difficulte">
                            <span>Difficulté</span>
                            <p>Facile</p>
                        </div>
                        <div class="distance">
                            <span>Distance</span>
                            <p>7Km</p>
                        </div>
                        <div class="duree">
                            <span>Durée moyenne</span>
                            <p> 2 h38min</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="description">
                <h2>Description:</h2>
                <p>Découvrez cet itinéraire en boucle de 8,2-km près de Labenne, Landes. Généralement considéré comme un
                    parcours modéré <span id="dots">...</span><span id="more">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Accusamus corporis earum quas ut! Saepe cumque temporibus molestiae nulla
                        laborum perspiciatis tenetur quibusdam, eveniet ab ex corporis earum. Dolor, vel labore.</span>
                </p>
            </div>
            <div class="button-btn">
                <button onclick="AfficherPlus()" id="myBtn">Afficher plus</button>
            </div>
            <div class="maps-rando">
                <a href="maps.php"><img src="<?php echo images_dir ?>maps rando.jpg" alt="carte de randonne"></a>
            </div>
            <div class="meteo">
                <h2>Météo:</h2>

                <div class="jour">
                    <p id="jour-un">V 03</p>
                    <p>S 04</p>
                    <p>D 05</p>
                    <p>L 06</p>
                    <p>M 07</p>
                    <p>M 08</p>
                    <p>J 09</p>
                </div>
                <div class="indications">
                    <div class="gif-meteo">
                        <div class="taille"><img src="<?php echo images_dir ?>soleil.gif" alt="icon soleil"></div>
                        <p>21°C </p>
                    </div>
                    <div class="gif-meteo">
                        <div class="taille"><img src="<?php echo images_dir ?>venteux.gif" alt="icon vent"></div>
                        <p>8Km </p>
                    </div>
                    <div class="gif-meteo">
                        <div class="taille"> <img src="<?php echo images_dir ?>pluie.gif" alt="icon nuage"></div>
                        <p>0mm</p>
                    </div>
                </div>
                <div class="indications-plus">
                    <div class="indications-plus-info">
                        <h3>Soleil</h3>
                        <p>min:6°C max:23°C</p>
                    </div>
                    <div class="indications-plus-info">
                        <h3>Vent</h3>
                        <p>min:6Km max:120Km</p>
                    </div>
                    <div class="indications-plus-info">
                        <h3>Pluie</h3>
                        <p>min:0mm max:120mm</p>
                    </div>
                </div>
            </div>
            <div class="avis">
                <h2>Avis:</h2>
            </div>
            <div class="button-btn">
                <button class="button" type="button" id="openModalReviewBtn">Laisser un avis</button>
            </div>
            <div class="text-avis">
                <div class="avis-utilisateur">
                    <h2><img src="<?php echo images_dir ?>icon-profil-femme.png" alt="image de profil d'une femme">Tiphaine40</h2>
                </div>
                <div class="avis-utilisateur-note">
                    <p>Les chemins sont praticables même apres une forte pluie, il y a de l’ombre sur une grande partie
                        du
                        sentier et des plusieurs points d’eau sur le parcours. </p>
                </div>
            </div>
            <div class="text-avis">
                <div class="avis-utilisateur">
                    <h2><img src="<?php echo images_dir ?>icon-profil-homme.png" alt="image de profil d'un homme">Timothé</h2>
                </div>
                <div class="avis-utilisateur-note">
                    <p>Les chemins sont praticables même apres une forte pluie, il y a de l’ombre sur une grande partie
                        du
                        sentier et des plusieurs points d’eau sur le parcours. </p>
                </div>
            </div>
            <div class="text-avis">
                <div class="avis-utilisateur">
                    <h2><img src="<?php echo images_dir ?>icon-profil-gars.png" alt="image de profil d'un garçon">Billy1984</h2>
                </div>
                <div class="avis-utilisateur-note">
                    <p>Les chemins sont praticables même apres une forte pluie, il y a de l’ombre sur une grande partie
                        du
                        sentier et des plusieurs points d’eau sur le parcours. </p>
                </div>
            </div>

           
        </section>
