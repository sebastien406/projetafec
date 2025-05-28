<?php
require_once("config/setting.php");
// Liste des plantes pour "Mon répertoire Botanique"
$sql = "SELECT * FROM fleurs ORDER BY id DESC limit 12";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$repBotanique = $stmt->fetchAll();
?>
?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Canirando - L'aventure à quatre pattes</title>
    <meta name="description"
        content="Découvrez les meilleures randonnées à faire avec votre chien en montagne, à la plage, en campagne et à l'océan." />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="<?php echo css_dir ?>theme.css?<?php echo time(); ?>">
    <link rel="shortcut icon" href="<?php echo images_dir ?>logo bulma.png">
</head>

<body>
    <?php include ('layout/header.php'); ?>
<div class="fil-ariane">
		<ul>
		<li><a href="accueil">Accueil</a></li>
	</ul>
   <?php //include ('layout/menuFiltre.php'); ?>
    <section class="hero">
        <div class="hero-content">     
            <h1>Explorez le monde avec votre fidèle compagnon</h1>
            <p>Trouvez et partagez les meilleures randonnées seule ou en groupe pour vous et votre chien.</p>
            <form  class="search-bar" method="get" action="listing.php" >
                <input name="keywords" type="search" placeholder="Rechercher une rando, un lieu...">
                <button type="submit">Go !</button>
            </form>
        </div>
    </section>

    <div class="container-univers" id="destinations">
        <section class="univers">
            <h2>Choisissez votre prochaine aventure</h2>
            <div class="univers-grid">
                <div class="grid-overflow">
                    <a href="rando-proximite.php" class="univers-item proximite">
                        <img src="<?php echo images_dir ?>radar.gif" alt="Icône a proximite">
                        <h3>A proximité</h3>
                        <p>Des rando autour de soi.</p>
                    </a>
                    <a href="rando-montagne.php" class="univers-item montagne">
                        <img src="<?php echo images_dir ?>montagnes.gif" alt="Icône Montagne">
                        <h3>Montagne</h3>
                        <p>Des sommets à conquérir ensemble.</p>
                    </a>
                    <a href="rando-plage.php" class="univers-item plage">
                        <img src="<?php echo images_dir ?>plage.gif" alt="Icône Plage">
                        <h3>Plage</h3>
                        <p>Balades iodées et jeux dans le sable.</p>
                    </a>
                    <a href="rando-campagne.php" class="univers-item campagne">
                        <img src="<?php echo images_dir ?>vache.gif" alt="Icône Campagne">
                        <h3>Campagne</h3>
                        <p>Chemins ruraux.</p>
                    </a>
                    <a href="rando-foret.php" class="univers-item foret">
                        <img src="<?php echo images_dir ?>foret.gif" alt="Icône foret">
                        <h3>Forêt</h3>
                        <p>Sentiers forestiers.</p>
                    </a>
                </div>
            </div>
        </section>
    </div>
    <section class="featured-randonnees">
        <h2>Nos randonnées les plus populaires</h2>
        <div class="randonnees-grid">
            <section class="randonnees">
                <a href="page-rando.php">
                    <div class="rando">
                        <div class="picture">
                            <img src="<?php echo images_dir ?>rando-montagne.jpg" alt="Rando à la campagne">
                        </div>
                        <div class="titre-rando">
                            <h2>La casse patte</h2>
                        </div>
                        <div class="lieu-rando">
                            <p>Pyrénées-Atlantiques, Ibardin</p>
                        </div>
                        <div class="info-rando">
                            <p>Facile - 24km - 1h</p>
                            <div class="maps-info">
                                <a href="maps.php"><img id="maps" src="<?php echo images_dir ?>carte.png" alt="Icon d'une carte"></a>
                            </div>
                        </div>
                    </div>
                </a>
            </section>
            <section class="randonnees">
                <a href="page-rando.php">
                    <div class="rando">
                        <div class="picture">
                            <img src="<?php echo images_dir ?>volcan2.jpg" alt="Rando en montagne">
                        </div>
                        <div class="titre-rando">
                            <h2>La feu au cul</h2>
                        </div>
                        <div class="lieu-rando">
                            <p>Auvergne, Puy-de-Dôme</p>
                        </div>
                        <div class="info-rando">
                            <p>Moyen - 15km - 3h</p>
                            <div class="maps-info">
                                <a href="maps.php"><img id="maps" src="<?php echo images_dir ?>carte.png" alt="Icon d'une carte"></a>
                            </div>
                        </div>
                    </div>
                </a>
            </section>
            <section class="randonnees">
                <a href="page-rando.php">
                    <div class="rando">
                        <div class="picture">
                            <img src="<?php echo images_dir ?>plage.jpg" alt="Rando à la plage">
                        </div>
                        <div class="titre-rando">
                            <h2>La tranquillou</h2>
                        </div>
                        <div class="lieu-rando">
                            <p>Bretagne, Finistère</p>
                        </div>
                        <div class="info-rando">
                            <p>Facile - 8km - 2h</p>
                            <div class="maps-info">
                                <a href="maps.php"><img id="maps" src="<?php echo images_dir ?>carte.png" alt="Icon d'une carte"></a>
                            </div>
                        </div>
                    </div>
                </a>
            </section>
            <section class="randonnees">
                <a href="page-rando.php">
                    <div class="rando">
                        <div class="picture">
                            <img src="<?php echo images_dir ?>campagnarde.jpg" alt="Rando à la campagne">
                        </div>
                        <div class="titre-rando">
                            <h2>La campagnarde</h2>
                        </div>
                        <div class="lieu-rando">
                            <p>Gaujacq, Landes</p>
                        </div>
                        <div class="info-rando">
                            <p>Facile - 10km - 3h</p>
                            <div class="maps-info">
                                <a href="maps.php"><img id="maps" src="<?php echo images_dir ?>carte.png" alt="Icon d'une carte"></a>
                            </div>
                        </div>
                    </div>
                </a>
            </section>
        </div>
    </section>

    <section id="apropos" class="a-propos">
        <h2>À propos de Canirando</h2>
        <p>Canirando est une communauté passionnée par la randonnée et nos amis à quatre pattes. Notre objectif est de
            faciliter la découverte de sentiers , de partager des conseils et des expériences pour pratiquer cette
            activité en toute sécurité et dans le respect de nos chiens et de l'environnement.</p>
</section>
    <?php include ('layout/footer.php'); ?>
    <script src="<?php echo js_dir; ?>theme.js?<?=time();?>" defer></script>

</body>

</html>