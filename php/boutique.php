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
<div class="shop-page-container">
        <h2>Aventure et Nature</h2>
        <p>Équipez-vous pour des randonnées mémorables avec votre fidèle compagnon.</p>
         <div class="product-categories">
        <h3>Nos catégories :</h3>
        <ul>
            <li><a href="#laisses">Laisses & Harnais</a></li>
            <li><a href="#sacs-a-dos">Sacs à Dos</a></li>
            <li><a href="#secours">Secourisme</a></li>
            <li><a href="#gourdes">Gourdes & Hydratation</a></li>
            <li><a href="#friandises">Friandises & Énergie</a></li>
            <li><a href="#jouets">Jouets de Rando</a></li>
            <li><a href="#tout-voir">Tout voir</a></li>
        </ul>
    </div>
        <div class="products-grid">
            <div class="carte-boutique">
                <div class="carte-apercu">
                    <div class="carte-image">
                        <img src="<?php echo images_dir ?>laisse.png" alt="laisse pour chien">
                    </div>
                    <div class="carte-titre">
                        <p>Laisse Rétractable</p>
                    </div>
                    <div class="carte-description">
                        <p>Laisse rétractable 5 m avec système anti-emmêlement, idéale pour la liberté contrôlée de votre chien.</p>
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
                    </div>
                </div>
            </div>

            
            <div class="carte-boutique">
                <div class="carte-apercu">
                    <div class="carte-image">
                        <img src="<?php echo images_dir ?>sac-a-dos-chien.png" alt="sac à dos pour chien">
                    </div>
                    <div class="carte-titre">
                        <p>Sac à Dos Canin</p>
                    </div>
                    <div class="carte-description">
                        <p>Sac à dos ergonomique pour chien, idéal pour transporter ses affaires lors de longues randonnées.</p>
                    </div>
                    <div class="carte-avis">
                       <svg class="icon-star-filled" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.902-7.416 3.901 1.48-8.279-6.064-5.828 8.332-1.151z"/></svg>
                       <svg class="icon-star-filled" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.902-7.416 3.901 1.48-8.279-6.064-5.828 8.332-1.151z"/></svg>
                       <svg class="icon-star-filled" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.902-7.416 3.901 1.48-8.279-6.064-5.828 8.332-1.151z"/></svg>
                       <svg class="icon-star-empty" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                       <svg class="icon-star-empty" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                       <p>3.8(150)</p>
                    </div>
                    <div class="carte-prix">
                        <p>59.99€</p>
                        <span>69.99€</span>
                    </div>
                    <div class="button-btn">
                        <button class="button" type="button">Ajouter au panier</button>
                    </div>
                </div>
            </div>
             <div class="carte-boutique">
                <div class="carte-apercu">
                    <div class="carte-image">
                        <img src="<?php echo images_dir ?>trousse-de-secour.png" alt="sac à dos pour chien">
                    </div>
                    <div class="carte-titre">
                        <p>Trousse de secours</p>
                    </div>
                    <div class="carte-description">
                        <p>En pleine nature, les petits imprévus peuvent arriver vite. Une trousse de secours bien pensée est votre meilleure alliée pour garantir la sécurité et le bien-être de votre compagnon à quatre pattes. Des coussinets égratignés aux petites coupures, soyez toujours prêt à agir. Vérifiez régulièrement son contenu et adaptez-le à vos itinéraires.</p>
                    </div>
                    <div class="carte-avis">
                       <svg class="icon-star-filled" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.902-7.416 3.901 1.48-8.279-6.064-5.828 8.332-1.151z"/></svg>
                       <svg class="icon-star-filled" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.902-7.416 3.901 1.48-8.279-6.064-5.828 8.332-1.151z"/></svg>
                       <svg class="icon-star-filled" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.902-7.416 3.901 1.48-8.279-6.064-5.828 8.332-1.151z"/></svg>
                       <svg class="icon-star-empty" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                       <svg class="icon-star-empty" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                       <p>3.8(150)</p>
                    </div>
                    <div class="carte-prix">
                        <p>39.99€</p>
                        <span>89.99€</span>
                    </div>
                    <div class="button-btn">
                        <button class="button" type="button">Ajouter au panier</button>
                    </div>
                </div>
            </div>
            <div class="carte-boutique">
                <div class="carte-apercu">
                    <div class="carte-image">
                        <img src="<?php echo images_dir ?>gourde portable.png" alt="sac à dos pour chien">
                    </div>
                    <div class="carte-titre">
                        <p>Gourde</p>
                    </div>
                    <div class="carte-description">
                        <p>Pour des randonnées réussies, la gourde pour chien est essentielle ! Elle assure l'hydratation et la vitalité de votre compagnon, pour des balades sereines et pleines d'énergie.</p>
                    </div>
                    <div class="carte-avis">
                       <svg class="icon-star-filled" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.902-7.416 3.901 1.48-8.279-6.064-5.828 8.332-1.151z"/></svg>
                       <svg class="icon-star-filled" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.902-7.416 3.901 1.48-8.279-6.064-5.828 8.332-1.151z"/></svg>
                       <svg class="icon-star-filled" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.902-7.416 3.901 1.48-8.279-6.064-5.828 8.332-1.151z"/></svg>
                       <svg class="icon-star-empty" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                       <svg class="icon-star-empty" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                       <p>3.8(150)</p>
                    </div>
                    <div class="carte-prix">
                        <p>19.99€</p>
                        <span>39.99€</span>
                    </div>
                    <div class="button-btn">
                        <button class="button" type="button">Ajouter au panier</button>
                    </div>
                </div>
            </div>
            <div class="carte-boutique">
                <div class="carte-apercu">
                    <div class="carte-image">
                        <img src="<?php echo images_dir ?>friandises.png" alt="sac à dos pour chien">
                    </div>
                    <div class="carte-titre">
                        <p>Friandises</p>
                    </div>
                    <div class="carte-description">
                        <p>Les friandises de rando sont parfaites pour recharger l'énergie de votre chien ! Elles le motivent et le récompensent sur les sentiers.</p>
                    </div>
                    <div class="carte-avis">
                       <svg class="icon-star-filled" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.902-7.416 3.901 1.48-8.279-6.064-5.828 8.332-1.151z"/></svg>
                       <svg class="icon-star-filled" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.902-7.416 3.901 1.48-8.279-6.064-5.828 8.332-1.151z"/></svg>
                       <svg class="icon-star-filled" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.902-7.416 3.901 1.48-8.279-6.064-5.828 8.332-1.151z"/></svg>
                       <svg class="icon-star-empty" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                       <svg class="icon-star-empty" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                       <p>3.8(150)</p>
                    </div>
                    <div class="carte-prix">
                        <p>14.99€</p>
                        <span>30.92€</span>
                    </div>
                    <div class="button-btn">
                        <button class="button" type="button">Ajouter au panier</button>
                    </div>
                </div>
            </div>
            <div class="carte-boutique">
                <div class="carte-apercu">
                    <div class="carte-image">
                        <img src="<?php echo images_dir ?>jouet.png" alt="sac à dos pour chien">
                    </div>
                    <div class="carte-titre">
                        <p>Jouet</p>
                    </div>
                    <div class="carte-description">
                        <p>Un jouet léger et durable est parfait pour divertir votre chien en rando ! Il stimule son énergie et renforce votre complicité sur les sentiers.</p>
                    </div>
                    <div class="carte-avis">
                       <svg class="icon-star-filled" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.902-7.416 3.901 1.48-8.279-6.064-5.828 8.332-1.151z"/></svg>
                       <svg class="icon-star-filled" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.902-7.416 3.901 1.48-8.279-6.064-5.828 8.332-1.151z"/></svg>
                       <svg class="icon-star-filled" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.902-7.416 3.901 1.48-8.279-6.064-5.828 8.332-1.151z"/></svg>
                       <svg class="icon-star-empty" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                       <svg class="icon-star-empty" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                       <p>3.8(150)</p>
                    </div>
                    <div class="carte-prix">
                        <p>5.91€</p>
                        <span>15.72€</span>
                    </div>
                    <div class="button-btn">
                        <button class="button" type="button">Ajouter au panier</button>
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