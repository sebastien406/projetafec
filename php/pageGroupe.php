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
        <li><a href="utilisateur.php">Mon compte</a></li> 
    </ul>
    </div> <?php include ('layout/footer.php'); ?>

    <main class="contenu-principal-groupe">


        <section class="section-introduction-groupe">
            <h2 class="titre-groupe-principal">Les Explorateurs Canins</h2>
            <p class="description-groupe">
                Bienvenue sur la page des Explorateurs Canins ! Nous sommes un groupe de passionnés de randonnée, humains et chiens, qui aimons les balades tranquilles en campagne et les sentiers faciles. Notre objectif est de profiter de la nature, de la compagnie de nos chiens et de partager des moments conviviaux, sans la contrainte des terrains difficiles. Que votre compagnon soit petit ou grand, stérilisé ou non, il est le bienvenu !
            </p>
            <div class="visuel-introduction-groupe">
                <img src="https://placehold.co/600x300/a7f3d0/065f46?text=Groupe+Explorateurs+Canins" alt="Image d'un groupe de randonneurs avec des chiens dans un paysage de campagne" class="image-introduction-groupe">
            </div>
        </section>

       
        <section class="section-administrateur">
            <h2 class="titre-section">Notre Chef de Meute</h2>
            <div class="contenu-administrateur">
                <img src="https://placehold.co/150x150/d1fae5/065f46?text=Admin" alt="Image de l'administrateur du groupe" class="photo-admin-groupe">
                <div class="details-admin-groupe">
                    <h3 class="nom-admin-groupe">Jean-Luc Dubois</h3>
                    <p class="description-admin-groupe">
                        Jean-Luc est le fondateur et l'âme des Explorateurs Canins. Fort de plus de 15 ans d'expérience en randonnée, il privilégie les balades accessibles à tous, humains et chiens. Sa passion pour la nature et la convivialité fait de lui un guide hors pair. Il est toujours prêt à partager ses astuces pour des promenades sereines et joyeuses.
                    </p>
                    <p class="compagnon-admin-groupe">
                        Accompagné de son fidèle berger allemand, Rocky.
                    </p>
                </div>
            </div>
        </section>

        
        <section class="section-membres-groupe">
            <h2 class="titre-section">Nos Randonneurs</h2>
            <div class="liste-membres-groupe">
             
                <div class="carte-membre">
                    <img src="https://placehold.co/100x100/ecfdf5/065f46?text=Membre1" alt="Image d'un membre du groupe" class="photo-membre-groupe">
                    <h4 class="nom-membre-groupe">Sophie & Luna</h4>
                    <p class="description-membre-groupe">Amoureuses des sentiers de campagne</p>
                </div>
              
                <div class="carte-membre">
                    <img src="https://placehold.co/100x100/a7f3d0/065f46?text=Membre2" alt="Image d'un membre du groupe" class="photo-membre-groupe">
                    <h4 class="nom-membre-groupe">Marc & Koda</h4>
                    <p class="description-membre-groupe">Spécialistes des pique-niques en nature</p>
                </div>
       
                <div class="carte-membre">
                    <img src="https://placehold.co/100x100/d1fae5/065f46?text=Membre3" alt="Image d'un membre du groupe" class="photo-membre-groupe">
                    <h4 class="nom-membre-groupe">Chloé & Pixel</h4>
                    <p class="description-membre-groupe">Découvreuses de nouveaux chemins</p>
                </div>
              
                <div class="carte-membre">
                    <img src="https://placehold.co/100x100/ecfdf5/065f46?text=Membre4" alt="Image d'un membre du groupe" class="photo-membre-groupe">
                    <h4 class="nom-membre-groupe">David & Shadow</h4>
                    <p class="description-membre-groupe">Experts en balades relaxantes</p>
                </div>
            </div>
            <div class="action-membres-groupe">
                <a href="#" class="bouton-secondaire">Voir tous les membres</a>
            </div>
        </section>

    >
        <section class="section-conditions-groupe">
            <h2 class="titre-section">Chiens acceptés et conditions</h2>
            <div class="contenu-conditions-groupe">
                <p class="texte-conditions-groupe">
                    Pour que nos balades restent un plaisir pour tous, voici les conditions concernant nos compagnons à quatre pattes :
                </p>
                <ul class="liste-conditions-groupe">
                    <li>**Tous les chiens sont les bienvenus :** Petits, grands, jeunes, seniors, stérilisés ou non. L'important est leur sociabilité et leur capacité à suivre le groupe sur des parcours faciles.</li>
                    <li>**Sociabilité :** Votre chien doit être à l'aise avec les autres chiens et les humains.</li>
                    <li>**Contrôle :** Maîtrise du rappel essentielle ou tenue en laisse si nécessaire pour la sécurité de tous.</li>
                    <li>**Équipement de base :** Laisse, harnais/collier, gamelle d'eau portable, sacs à déjections.</li>
                    <li>**Santé :** Les chiens doivent être à jour de leurs vaccins et vermifuges.</li>
                    <li>**Respect de l'environnement :** Ramassage systématique des déjections.</li>
                </ul>
                <p class="texte-contact-conditions">
                    N'hésitez pas à nous contacter si vous avez des questions spécifiques concernant votre chien.
                </p>
            </div>
        </section>

   
        <section class="section-randonnees-groupe">
            <h2 class="titre-section">Nos Prochaines Balades</h2>
            <div class="liste-randonnees-groupe">

                
                <div class="carte-randonnee">
                    <img src="https://placehold.co/400x250/d1fae5/065f46?text=Campagne+Verte" alt="Image d'un chien marchant sur un chemin vert à la campagne" class="image-randonnee">
                    <h3 class="titre-randonnee">Boucle des Champs Dorés</h3>
                    <p class="details-randonnee">
                        <span class="details-randonnee-label">Date:</span> Samedi 3 Août 2025<br>
                        <span class="details-randonnee-label">Lieu:</span> Campagne près de Dax (Rendez-vous à la ferme du Chêne)<br>
                        <span class="details-randonnee-label">Niveau:</span> Facile (6 km, D+ 30m)
                    </p>
                    <p class="description-randonnee">
                        Une agréable balade à travers champs et petits bois, parfaite pour tous les chiens.
                    </p>
                    <a href="#section-contact" class="bouton-inscription-rando">S'inscrire à cette rando</a>
                </div>


                <div class="carte-randonnee">
                    <img src="https://placehold.co/400x250/ecfdf5/065f46?text=Bord+de+Rivière" alt="Image d'un chien près d'une rivière calme" class="image-randonnee">
                    <h3 class="titre-randonnee">Chemin de la Rivière Paisible</h3>
                    <p class="details-randonnee">
                        <span class="details-randonnee-label">Date:</span> Dimanche 11 Août 2025<br>
                        <span class="details-randonnee-label">Lieu:</span> Bord de l'Adour (Parking du Moulin)<br>
                        <span class="details-randonnee-label">Niveau:</span> Facile (8 km, D+ 10m)
                    </p>
                    <p class="description-randonnee">
                        Une promenade apaisante le long de l'eau, avec des points d'eau pour nos compagnons.
                    </p>
                    <a href="#section-contact" class="bouton-inscription-rando">S'inscrire à cette rando</a>
                </div>

  
                <div class="carte-randonnee">
                    <img src="https://placehold.co/400x250/a7f3d0/065f46?text=Sentier+Boisé" alt="Image d'un chien sur un sentier forestier" class="image-randonnee">
                    <h3 class="titre-randonnee">Sentier des Chênes Centenaires</h3>
                    <p class="details-randonnee">
                        <span class="details-randonnee-label">Date:</span> Samedi 24 Août 2025<br>
                        <span class="details-randonnee-label">Lieu:</span> Forêt des Landes (Entrée du Parc)<br>
                        <span class="details-randonnee-label">Niveau:</span> Facile (7 km, D+ 50m)
                    </p>
                    <p class="description-randonnee">
                        Une immersion douce dans la forêt, avec des chemins larges et ombragés, idéal pour l'été.
                    </p>
                    <a href="#section-contact" class="bouton-inscription-rando">S'inscrire à cette rando</a>
                </div>

            </div>
        </section>

        <section class="section-galerie-groupe">
            <h2 class="titre-section">Nos Aventures en Images</h2>
            <div class="liste-photos-groupe">
                <img src="https://placehold.co/300x200/d1fae5/065f46?text=Exp+Photo+1" alt="Image d'un chien et de son propriétaire marchant dans un champ" class="photo-galerie-groupe">
                <img src="https://placehold.co/300x200/ecfdf5/065f46?text=Exp+Photo+2" alt="Image d'un petit chien profitant d'une promenade" class="photo-galerie-groupe">
                <img src="https://placehold.co/300x200/a7f3d0/065f46?text=Exp+Photo+3" alt="Image d'un groupe de chiens jouant dans une prairie" class="photo-galerie-groupe">
                <img src="https://placehold.co/300x200/d1fae5/065f46?text=Exp+Photo+4" alt="Image d'un grand chien sur un large sentier" class="photo-galerie-groupe">
                <img src="https://placehold.co/300x200/ecfdf5/065f46?text=Exp+Photo+5" alt="Image d'un chien buvant dans un ruisseau" class="photo-galerie-groupe">
                <img src="https://placehold.co/300x200/a7f3d0/065f46?text=Exp+Photo+6" alt="Image d'un chien heureux et de son propriétaire en promenade" class="photo-galerie-groupe">
            </div>
            <div class="action-galerie-groupe">
                <a href="#" class="bouton-secondaire">Voir toutes les photos des Explorateurs</a>
            </div>
        </section>

        
        <section id="section-contact" class="section-contact-groupe">
            <h2 class="titre-section">Nous Contacter pour Participer</h2>
            <div class="contenu-contact-groupe">
                <p class="texte-contact-groupe">
                    Pour vous inscrire à une de nos prochaines balades ou pour rejoindre le groupe des Explorateurs Canins, veuillez envoyer un message directement à notre chef de meute, Jean-Luc. Il se fera un plaisir de répondre à toutes vos questions et de vous guider.
                </p>
                <p class="info-contact-groupe">
                    <span class="info-contact-label">Email :</span> jeanluc.explorateurs@canirando.fr <br>
                    <span class="info-contact-label">Téléphone :</span> 06 XX XX XX XX (sur demande)
                </p>
            </div>
            <div class="action-contact-groupe">
               
                <a href="mailto:jeanluc.explorateurs@canirando.fr" class="bouton-primaire">Envoyer un message à Jean-Luc</a>
            </div>
        </section>

    </main>


        <script src="<?php echo js_dir; ?>theme.js?<?=time();?>" defer></script>
</body>

</html>