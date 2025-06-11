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
     <?php include ('layout/header.php'); ?>
    <div class="fil-ariane">
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="groupe.php">Connection groupe</a></li>
            <li><a href="creationgroupe.php">Création groupe</a></li>
            <li><a href="grouperando.php">Groupe</a></li>
        </ul>
    </div>

    <section>
        <div class="image-groupe">
            <img src="images/canirando.jpg" alt="rando avec des chiens">
        </div>
    </section>
    <section class="groupe-rando">

      
        <div class="les-truffes">
            <h2>Les truffes à l'air</h2>
        </div>
        <div class="title-menbres">
            <div class="les-membres">
                <h2>Les membres</h2>
            </div>
            <div class="menu-groupe">
                <div class="menbres">
                    <img src="images/icon-profil-femme.png" alt="image de profil d'une femme">
                    <p>Carla</p>
                </div>
                <div class="menbres">
                    <img src="images/icon-profil-homme.png" alt="image de profil d'un homme">
                    <p>Bernard</p>
                </div>
                <div class="menbres">
                    <img src="images/icon-profil-gars.png" alt="image de profil d'un garçon">
                    <p>Pepito</p>
                </div>
                <div class="menbres">
                    <img src="images/icon-profil-femme.png" alt="image de profil d'une femme">
                    <p>Tiphaine</p>
                </div>
                <div class="menbres">
                    <img src="images/icon-profil-homme.png" alt="image de profil d'un homme">
                    <p>Billy</p>
                </div>
                <div class="menbres">
                    <img src="images/icon-profil-gars.png" alt="image de profil d'un garçon">
                    <p>MrLapin</p>
                </div>
            </div>
        </div>
        <div class="form-group">
            <a href=""><button type="submit" class="btn">Option du groupe</button></a>
            <a href=""><button type="submit" class="btn">Devenir menbre</button></a>
        </div>

    </section>
   <?php include ('layout/footer.php'); ?>
    <script src="<?php echo js_dir; ?>theme.js?<?=time();?>" defer></script>
    </section>
</body>

</html>