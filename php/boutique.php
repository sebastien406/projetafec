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


    <?php include ('layout/header.php'); ?>
<div class="fil-ariane">
		<ul>
		<li><a href="index.php">Accueil</a></li>
		<li><a href="">Compte</a></li>
	</ul>
</div>
<body>
 <div>
    <h2>Aventure et Nature</h2>
    <p>Equipez-vous pour des randonnées mémorables avec votre fidèle compagnon.</p>

    <div class="carte-boutique">
        <div class="carte-apercu">
            <div class="carte-image">
                <img src="<?php echo images_dir ?>laisse.png" alt="laisse pour chien">
            </div>
            <div class="carte-titre">
                <p>Laisses</p>
            </div>
            <div class="carte-description">
                <p>Laisse rétractable 5 m système anti-emmêlement.</p>
            </div>
            <div class="carte-avis">
               <svg class="icon-star-filled" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.902-7.416 3.901 1.48-8.279-6.064-5.828 8.332-1.151z"/></svg>
        <svg class="icon-star-filled" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.902-7.416 3.901 1.48-8.279-6.064-5.828 8.332-1.151z"/></svg>
        <svg class="icon-star-filled" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.902-7.416 3.901 1.48-8.279-6.064-5.828 8.332-1.151z"/></svg>
        <svg class="icon-star-filled" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.902-7.416 3.901 1.48-8.279-6.064-5.828 8.332-1.151z"/></svg>
        <svg class="icon-star-empty" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
        <p>4.6(203)</p>
    </div>
    <div class="carte-prix">
        <p>34.99€</p>
        <span>44.99€</span>
    </div>
   
        <div class="button-btn">
                <button class="button" type="button">Ajouter au panier</button>
                <img src="<?php echo images_dir ?>panier.png" alt="icon caddie ppour achat">
            </div>

            </div>
        </div>

    </div>
 </div>
	<section>
	 <?php include ('layout/footer.php'); ?>
    <script src="<?php echo js_dir; ?>theme.js?<?=time();?>" defer></script>

</section>
</body>
</html>