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
       <li><a href="forum.php">Forum</a></li> 
    </ul>
    </div>      
      <main>
    <div class="canirando-contenu-principal-forum">
        <div class="canirando-entete-forum">
            <h1>Forum Communauté Canirando</h1>
            <a href="#" class="canirando-btn-nouveau-sujet"> Nouveau Sujet</a>
        </div>

        <div class="canirando-barre-recherche-forum">
            <input type="text" placeholder="Rechercher des discussions, des sujets, des utilisateurs...">
        </div>

        <section class="canirando-categories-forum">
            <h2>Catégories de discussion</h2>
            <div class="canirando-grille-categories">
                <a href="#" class="canirando-carte-categorie">
                    <h3> Itinéraires & Destinations</h3>
                    <p>Les meilleurs sentiers pour vos binômes, questions sur l'accès et les spécificités de chaque lieu.</p>
                    <div class="canirando-stats-categorie">
                        <span> 125 discussions</span>
                        <span> 890 messages</span>
                    </div>
                </a>
                <a href="#" class="canirando-carte-categorie">
                    <h3> Santé & Bien-être Canin</h3>
                    <p>Conseils vétérinaires, alimentation en rando, prévention des blessures, et récupération.</p>
                    <div class="canirando-stats-categorie">
                        <span> 98 discussions</span>
                        <span> 720 messages</span>
                    </div>
                </a>
                <a href="#" class="canirando-carte-categorie">
                    <h3> Matériel & Équipement</h3>
                    <p>Harnais, laisses, sacs à dos, chaussures, trousses de secours : partagez vos avis et découvertes !</p>
                    <div class="canirando-stats-categorie">
                        <span> 70 discussions</span>
                        <span> 510 messages</span>
                    </div>
                </a>
                <a href="#" class="canirando-carte-categorie">
                    <h3> Préparation & Entraînement</h3>
                    <p>Programmes, exercices, conseils pour conditionner votre chien et vous pour la performance.</p>
                    <div class="canirando-stats-categorie">
                        <span> 60 discussions</span>
                        <span> 480 messages</span>
                    </div>
                </a>
                <a href="#" class="canirando-carte-categorie">
                    <h3> Événements & Rencontres</h3>
                    <p>Organisation de sorties, annonces de rassemblements, recherche de partenaires de rando.</p>
                    <div class="canirando-stats-categorie">
                        <span> 45 discussions</span>
                        <span> 320 messages</span>
                    </div>
                </a>
                <a href="#" class="canirando-carte-categorie">
                    <h3> Questions Générales & Débutants</h3>
                    <p>Votre premier pas en canirando ? Posez toutes vos questions ici !</p>
                    <div class="canirando-stats-categorie">
                        <span> 110 discussions</span>
                        <span> 950 messages</span>
                    </div>
                </a>
            </div>
        </section>

        <section class="canirando-sujets-forum">
            <h2>Sujets Récents et Populaires</h2>
            <div class="canirando-liste-sujets">
                <a href="#" class="canirando-ligne-sujet">
                    <div class="canirando-zone-titre-sujet">
                        <h3>Conseils pour une rando de 3 jours avec bivouac en autonomie ?</h3>
                        <p>Dans Itinéraires & Destinations</span></p>
                    </div>
                    <div class="canirando-info-auteur-sujet">
                        Par <strong>@AventureDoggo</strong>
                    </div>
                    <div class="canirando-stats-sujet">
                        <span> 18</span>
                        <span> 345</span>
                    </div>
                    <div class="canirando-dernier-message-sujet">
                        <strong>Il y a 2h</strong> par @RandoPro
                    </div>
                </a>
                <a href="#" class="canirando-ligne-sujet">
                    <div class="canirando-zone-titre-sujet">
                        <h3>Mon chien refuse de boire en randonnée, que faire ?</h3>
                        <p>Dans Santé & Bien-être Canin</span></p>
                    </div>
                    <div class="canirando-info-auteur-sujet">
                        Par <strong>@CanineCare</strong>
                    </div>
                    <div class="canirando-stats-sujet">
                        <span> 25</span>
                        <span> 512</span>
                    </div>
                    <div class="canirando-dernier-message-sujet">
                        <strong>Il y a 5h</strong> par @VetConseils
                    </div>
                </a>
                <a href="#" class="canirando-ligne-sujet">
                    <div class="canirando-zone-titre-sujet">
                        <h3>Retour d'expérience sur le harnais de traction X-Back Pro</h3>
                        <p>Dans Matériel & Équipement</span></p>
                    </div>
                    <div class="canirando-info-auteur-sujet">
                        Par <strong>@GearTester</strong>
                    </div>
                    <div class="canirando-stats-sujet">
                        <span> 12</span>
                        <span> 280</span>
                    </div>
                    <div class="canirando-dernier-message-sujet">
                        <strong>Il y a 1 jour</strong> par @FanDeMatos
                    </div>
                </a>
                <a href="#" class="canirando-ligne-sujet">
                    <div class="canirando-zone-titre-sujet">
                        <h3>Rejoignez notre sortie "Canirando Douce" en forêt de Fontainebleau !</h3>
                        <p>Dans Événements & Rencontres</span></p>
                    </div>
                    <div class="canirando-info-auteur-sujet">
                        Par <strong>@OrganisateurIDF</strong>
                    </div>
                    <div class="canirando-stats-sujet">
                        <span> 7</span>
                        <span> 150</span>
                    </div>
                    <div class="canirando-dernier-message-sujet">
                        <strong>Il y a 2 jours</strong> par @FontainebleauRando
                    </div>
                </a>
                <a href="#" class="canirando-ligne-sujet">
                    <div class="canirando-zone-titre-sujet">
                        <h3>Comment éduquer son chiot à rester au pied en sentier fréquenté ?</h3>
                        <p>Dans Préparation & Entraînement</span></p>
                    </div>
                    <div class="canirando-info-auteur-sujet">
                        Par <strong>@JeuneMaître</strong>
                    </div>
                    <div class="canirando-stats-sujet">
                        <span> 30</span>
                        <span> 600</span>
                    </div>
                    <div class="canirando-dernier-message-sujet">
                        <strong>Il y a 3 jours</strong> par @ÉducateurCanin
                    </div>
                </a>
            </div>
        </section>
    </div>
</main>      
        
        
        
        
        <?php include ('layout/footer.php'); ?>
    <script src="<?php echo js_dir; ?>theme.js?<?=time();?>" defer></script>
    </body>

</html>