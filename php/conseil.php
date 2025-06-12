
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
	<link rel="stylesheet" href="<?php echo css_dir ?>theme.css">
    <link rel="shortcut icon" href="<?php echo images_dir ?>logo bulma.jpg">
	<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=menu" /> -->
</head>

<body>
	<?php include ('layout/header.php'); ?>
    <div class="fil-ariane">
		<ul>
		<li><a href="index.php">Accueil</a></li>
		<li><a href="">Conseil</a></li>
	</ul>
</div>
    <section>
    <div class="conseil">
        
        <h2>Avant de partir : </h2>
        <h3>La Préparation Essentielle</h3>
        <p>Partir en randonnée avec votre chien est une expérience enrichissante pour vous deux. Cependant, une bonne préparation est la clé d'une aventure réussie et en toute sécurité. Voici quelques conseils pour que vos sorties se passent au mieux !</p>
        <p>La sécurité et le confort de votre chien dépendent grandement de la préparation avant la randonnée.</p>
        <h3>Santé et Condition Physique</h3>
        <ul>
            <li>Vérifiez que votre chien est en bonne santé et apte à la randonnée. Une visite chez le vétérinaire est conseillée pour un check-up, surtout pour les longues distances ou les terrains difficiles.</li>
            <li>Assurez-vous qu'il est à jour sur ses vaccinations et traitements anti-parasitaires (tiques, puces, vers).</li>
            <li>Commencez par de courtes promenades et augmentez progressivement la distance et la difficulté pour l'habituer.</li>
        </ul>

        <h3>Équipement Indispensable</h3>
        <ul>
            <li>Laisse et harnais robustes : Optez pour un harnais bien ajusté qui ne frotte pas et une laisse solide. Une laisse de 2-3 mètres peut offrir plus de liberté tout en gardant le contrôle.</li>
            <li>Eau et gamelle portable : Indispensables ! Prévoyez toujours plus d'eau que nécessaire.</li>
            <li>Nourriture et friandises : Des collations énergétiques pour les efforts et des friandises pour les récompenses.</li>
            <li>Sac à dos pour chien (optionnel) : Si votre chien est habitué, il peut porter son propre eau ou ses croquettes. Ne surchargez pas !</li>
            <li>Trousse de premiers secours pour chien : Incluez des bandages, antiseptique, pince à tiques, ciseaux, etc.</li>
            <li>Sacs à déjections : Toujours les avoir en quantité suffisante pour ramasser les besoins de votre chien.</li>
            <li>Bottes de protection (si nécessaire) : Pour les terrains rocailleux ou par temps très chaud/froid, elles peuvent protéger les coussinets.</li>
        </ul>

        
        <h2>Pendant la Randonnée : Sécurité et Respect</h2>
        <p>Une fois sur les sentiers, quelques règles de bonne conduite s'imposent pour le bien-être de votre chien et celui des autres usagers.</p>
        <h3>Sur le Sentier</h3>
        <ul>
            <li>Gardez votre chien en laisse : Dans de nombreux parcs et réserves, la laisse est obligatoire. Cela protège la faune, la flore et les autres randonneurs.</li>
            <li>Surveillez les signes de fatigue : Halètement excessif, traînement des pattes, ralentissement. Faites des pauses régulières à l'ombre.</li>
            <li>Attention aux conditions météorologiques : Évitez les heures les plus chaudes en été et protégez votre chien du froid en hiver. Les coups de chaleur sont très dangereux.</li>
            <li>Hydratez-le fréquemment : Offrez de l'eau toutes les 20-30 minutes.</li>
            <li>Respectez la faune : Évitez que votre chien ne poursuive ou ne dérange les animaux sauvages.</li>
        </ul>

        <h3>Respect des Autres et de l'Environnement</h3>
        <ul>
            <li>Ramassez toujours les déjections : Laissez le sentier propre pour les autres et pour l'environnement.</li>
            <li>Maîtrisez votre chien : Assurez-vous qu'il ne saute pas sur les autres personnes ou ne dérange pas leurs animaux.</li>
            <li>Informez-vous sur les réglementations locales : Certains sentiers ou parcs peuvent avoir des restrictions spécifiques concernant les chiens.</li>
        </ul>

  
        <h2>Après la Randonnée : Récupération et Soins</h2>
        <p>La randonnée terminée, il est important de prendre soin de votre compagnon pour qu'il récupère bien.</p>
        <ul>
            <li>Vérifiez ses coussinets : Inspectez-les pour détecter coupures, épines, ampoules ou irritations. Nettoyez-les si nécessaire.</li>
            <li>Examinez son pelage : Cherchez les tiques, les épillets ou autres corps étrangers.</li>
            <li>Offrez-lui de l'eau fraîche et de la nourriture : Une fois à la maison, assurez-vous qu'il ait accès à une bonne ration d'eau et son repas habituel.</li>
            <li>Reposez-vous : Laissez votre chien se reposer et dormir, il a bien mérité sa sieste !</li>
        </ul>

        <p>En suivant ces conseils, vous et votre chien êtes prêts pour de nombreuses aventures en pleine nature ! Bonne randonnée !</p>
    </div>
    </section> 
            	 <?php include ('layout/footer.php'); ?>
    <script src="<?php echo js_dir; ?>theme.js?<?=time();?>" defer></script>
    </body>

</html>

