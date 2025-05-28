<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8" />
	<title>Canirando</title>
	<meta name="description" content="site de randonne canine" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	 <link rel="stylesheet" href="<?php echo css_dir ?>theme.css">
    <link rel="shortcut icon" href="<?php echo images_dir ?>logo bulma.png">
</head>

<body>
<?php include ('layout/header.php'); ?>
     <div class="fil-ariane">
        <ul>
       <li><a href="index.php">Accueil</a></li> 
        <li><a href="page-rando.php">Rando</a></li> 
        <li><a href="maps.php">Carte</a></li> 
    </ul>
    </div>

<body>
    <section>
        <div class="maps">
            <a href=""><img src="images/maps-rando.png" alt="une carte de randonnée"></a>
        </div>
        <?php include ('layout/footer.php'); ?>
    </section>
	 
</body>
</html>