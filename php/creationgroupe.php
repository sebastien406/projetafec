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
        </ul>
    </div>

    <body>
        <section class="groupe">
            <div class="admin">
                <h2>Administrateur</h2>
                <div class="contact-form">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn">création administrateur</button>
                        </div>
                </div>
            </div>
            </form>
            </div>
            <div class="contact-form">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name" class="text-form">Nom du groupe:</label>
                        <input type="text" name=" Nom du groupe" >
                    </div>
                    <div class="form-group">
                        <label for="name" class="text-form">Choix des rando:</label>
                        <input type="text" name="Choix des rando ">
                    </div>
                    <div class="form-group">
                        <label for="name" class="text-form">Choix des chiens:</label>
                        <input type="text" name="Choix des chiens">
                    </div>
                    <div class="form-group">
                        <label for="name" class="text-form">Choix des difficultés:</label>
                        <input type="text" name="Choix des difficultés">
                    </div>
                    <div class="form-group">
                         <div>
                <label for="photo" class="drop-container" id="dropcontainer">
                  <span class="drop-title"></span>
            
                  <span class="btn">Choisir la photo de profil pour votre groupe</span>
              <input
                type="file"
                id="photo"
                name="photo"
                />
                </label>
            </div>
                    <div class="form-group">
                        <input type="hidden" value="50" name="id-article">
                    </div>
                    <div class="form-group">
                        <a href="grouperando.php"><button type="submit"class="btn" >Créer le groupe</button></a>	
                    </div>
                </form>
            </div>
        </section>
        	 <?php include ('layout/footer.php'); ?>
    <script src="<?php echo js_dir; ?>theme.js?<?=time();?>" defer></script>
    </body>

</html>