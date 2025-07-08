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
        <li><a href="compte.php">Connection</a></li> 
        <li><a href="compte.php">Mon compte</a></li> 
    </ul>
    </div>
    <main class="page-profil-utilisateur">
        <div class="entete-profil">
            <img src="<?php echo images_dir ?>randonneur.png" alt="Photo de profil de l'utilisateur" class="photo-profil">
            <img src="<?php echo images_dir ?>chien.png" alt="Photo de profil de l'utilisateur" class="photo-profil">
            <div class="titre-profil">  
            <h1>Bienvenue, BERNARD ET YOUKI !</h1>
            <p>Votre espace personnalisé pour suivre vos aventures et gérer votre compte.</p>
        </div>
        </div>

        <div class="grille-sections-profil">
            <div class="carte-profil">
                <h2>Vos Statistiques de Rando</h2>
                <div class="liste-statistiques">
                    <p><strong>Randonnées effectuées :</strong> 15</p>
                    <p><strong>Distance totale :</strong> 120 km</p>
                    <p><strong>Groupes de rando rejoints :</strong> 3</p>
                </div>
            </div>
            <div class="carte-profil">
                <h2>Votre Rang de Randonneur</h2>
                <div class="bloc-classement">
                    <p class="rang-actuel">Vous êtes au 15ème rang sur 250 randonneurs </p>
                    <div class="progression-barre">
                        <div class="progression-remplie" style="width: 60%;"></div>
                    </div>
                    <p class="prochain-niveau">Prochain niveau :Randonneur Émériteà 200 km !</p>
                </div>
                <a href="#" class="lien-voir-tout">Voir le classement complet</a>
            </div>
            <div class="carte-profil">
                <h2>Vos Dernières Activités</h2>
                  <ul class="liste-activites">
                    <li><a href="#">La casse patte (25/06/2025)</a></li>
                    <li><a href="#">La feu au cul(18/04/2025)</a></li>
                    <li><a href="#">La campagnarde (10/03/2025)</a></li>
                  </ul>
                <a href="#" class="lien-voir-tout">Voir toutes mes activités</a>
            </div>

            <div class="carte-profil">
                <h2>Mes Groupes</h2>
                <ul class="liste-groupes">
                    <li><a href="groupe.php">Les Bioumans</a></li>
                    <li><a href="groupe.php">Aventuriers Canins du Sud</a></li>
                </ul>
                <a href="groupe.php" class="lien-voir-tout">Gérer mes groupes</a>
            </div>

            <div class="carte-profil">
                <h2>Mes Messages</h2>
                <p>Vous avez <strong>2 nouveaux messages</strong>.</p>
                <a href="#" class="lien-voir-tout">Consulter mes messages</a>
            </div>

            <div class="carte-profil actions-profil">
                <h2>Réglages du Compte</h2>
                <ul class="liste-actions">
                    <li><a href="#">Modifier mon profil</a></li>
                    <li><a href="#">Changer mon mot de passe</a></li>
                    <li><a href="#">Historique des commandes (boutique)</a></li>
                </ul>
                <button class="button bouton-deconnexion" type="button">Se déconnecter</button>
            </div>
        </div>
    </main>
    <?php include ('layout/footer.php'); ?>


        <script src="<?php echo js_dir; ?>theme.js?<?=time();?>" defer></script>
</body>

</html>