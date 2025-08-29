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
        <li><a href="compte.php">Mon compte</a></li>
        <li><a href="modifier-profil.php">Modifier profil</a></li>
    </ul>
    </div>
<fieldset class="groupe-section">
    <legend> Gestion des Membres</legend>
    <p class="groupe-texte-info">Gérez les demandes d'adhésion et les membres actuels.</p>
    
    
<main class="page-gestion-groupe">
    <section class="entete-gestion-groupe">
        <h1>Options du Groupe</h1>
        <p>Gérez les paramètres, les membres et les randonnées de votre groupe.</p>
    </section>

    <form action="#" method="POST" class="formulaire-gestion-groupe" enctype="multipart/form-data">
        
        <div class="groupe-bloc-avatar-nom">
            <div class="groupe-bloc-telechargement-avatar">
                <img src="<?php echo images_dir ?>powers rangers.png" alt="Photo du groupe" class="groupe-avatar-actuel" id="photo-groupe-actuelle">
                <label for="photo-groupe" class="groupe-bouton-telechargement">
                     Changer la photo
                </label>
                <input type="file" id="photo-groupe" name="photo_groupe" accept="image/*" style="display: none;">
                <p class="groupe-texte-info">Photo de profil du groupe (max 2MB, JPG/PNG)</p>
            </div>
            
            <div class="groupe-form-champ nom-du-groupe">
                <label for="nom-groupe"> Nom du Groupe :</label>
                <input type="text" id="nom-groupe" name="nom_groupe" value="Les Powers Rangers" required>
            </div>
        </div>

        <fieldset class="groupe-section">
            <legend> Informations Générales</legend>
            <div class="groupe-form-champ">
                <label for="description-groupe">Description du groupe :</label>
                <textarea id="description-groupe" name="description_groupe" rows="4">Nous sommes un groupe de passionnés de canirando dans les Landes. Rejoignez-nous, viendez les gens !</textarea>
                <p class="groupe-texte-info">Parlez de votre groupe aux nouveaux membres.</p>
            </div>
        </fieldset>
        
        <fieldset class="groupe-section">
            <legend> Gestion des Membres</legend>
            <p class="groupe-texte-info">Gérez les demandes d'adhésion et les membres actuels.</p>
            
            <div class="groupe-liste-membres-attente">
                <h3>Demandes en attente</h3>
                <div class="groupe-membre-item">
                    <img src="<?php echo images_dir ?>/rando-dangeureuse.png" alt="Avatar Alice R." class="groupe-avatar-membre">
                    <div class="groupe-membre-info">
                        <span class="groupe-nom-membre">Alice R.</span>
                        <p class="groupe-bio-membre">Intéressée par les randonnées en forêt avec son labrador.</p>
                    </div>
                    <div class="groupe-actions">
                        <button type="button" class="bouton-action-groupe bouton-accepter"> Accepter</button>
                        <button type="button" class="bouton-action-groupe bouton-refuser"> Refuser</button>
                    </div>
                </div>
            </div>
            
            <div class="groupe-liste-membres">
                <h3>Membres actuels</h3>
                <div class="groupe-membre-item">
                    <img src="<?php echo images_dir ?>/image-randonneur.png" alt="Avatar Juste le BG" class="groupe-avatar-membre">
                    <div class="groupe-membre-info">
                        <span class="groupe-nom-membre">Juste le BG</span>
                        <span class="groupe-role">(Admin)</span>
                        <p class="groupe-bio-membre">Créateur du groupe. Randonne avec son chien PouicPouic.</p>
                    </div>
                    <div class="groupe-actions">
                        <button type="button" class="bouton-action-groupe bouton-exclure"> Exclure</button>
                    </div>
                </div>
                <div class="groupe-membre-item">
                    <img src="<?php echo images_dir ?>/randonneuse-folle.png" alt="Avatar Pauline D." class="groupe-avatar-membre">
                    <div class="groupe-membre-info">
                        <span class="groupe-nom-membre">Pauline D.</span>
                        <span class="groupe-role">(Membre)</span>
                        <p class="groupe-bio-membre">Participe aux randos de courte et moyenne durée.</p>
                    </div>
                    <div class="groupe-actions">
                        <button type="button" class="bouton-action-groupe bouton-exclure"> Exclure</button>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="groupe-section">
            <legend> Photos du Groupe</legend>
            <p class="groupe-texte-info">Partagez les photos des randonnées avec les membres du groupe.</p>
            <div class="groupe-galerie-photos">
                <img src="<?php echo images_dir ?>/foret-power.png" alt="Photo de la randonnée" class="groupe-photo-rando">
                <img src="<?php echo images_dir ?>/riviere-power.png" alt="Photo de la randonnée" class="groupe-photo-rando">
                <img src="<?php echo images_dir ?>/desert-power.png" alt="Photo de la randonnée" class="groupe-photo-rando">
                <img src="<?php echo images_dir ?>/espace-power.png" alt="Photo de la randonnée" class="groupe-photo-rando">
            </div>
            
            <div class="groupe-form-champ">
                <label for="upload-photos-rando" class="groupe-bouton-telechargement">
                     Ajouter des photos de rando
                </label>
                <input type="file" id="upload-photos-rando" name="photos_rando[]" accept="image/*" multiple style="display: none;">
                <p class="groupe-texte-info">Sélectionnez plusieurs images à la fois. (max 5MB par photo)</p>
            </div>
        </fieldset>

        <fieldset class="groupe-section">
            <legend> Gestion des Randonnées</legend>
            <p class="groupe-texte-info">Ajoutez ou modifiez les événements de randonnée du groupe.</p>
            
            <div class="groupe-liste-evenements">
                <h3>Prochaines Randonnées</h3>
                <div class="groupe-evenement-item">
                    <span class="groupe-titre-evenement">Rando du lac bleu - 2025-09-15</span>
                    <button type="button" class="bouton-action-groupe"> Modifier</button>
                    <button type="button" class="bouton-action-groupe"> Supprimer</button>
                </div>
            </div>
            
            <button type="button" class="groupe-bouton-ajouter-rando"> Ajouter une randonnée</button>
        </fieldset>
        
        <button type="submit" class="bouton-enregistrer-groupe">Enregistrer les modifications</button>
    </form>
</main>

<?php include ('layout/footer.php'); ?>
    <script src="<?php echo js_dir; ?>theme.js?<?=time();?>" defer></script>
</body>
</html>