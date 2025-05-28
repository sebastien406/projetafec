<?php
require_once("config/setting.php");

// récupère le paramètre
$keywords = isset($_GET['keywords']) ? trim($_GET['keywords']) : '';

if ($keywords !== '') {
    $sql = "SELECT * FROM randonnees WHERE title LIKE :kw OR description LIKE :kw";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['kw' => '%' . $keywords . '%']);
    $results = $stmt->fetchAll();
} else {
    $results = [];
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Canirando - L'aventure à quatre pattes</title>
    <meta name="description"
        content="Découvrez les meilleures randonnées à faire avec votre chien en montagne, à la plage, en campagne et à l'océan." />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="<?php echo css_dir ?>theme.css?<?php echo time(); ?>">
    <link rel="shortcut icon" href="<?php echo images_dir ?>logo bulma.png">
</head>

<body>
<?php include ('layout/header.php'); ?>
    <div class="fil-ariane">
		<ul>
		   <li><a href="index.php">Accueil</a></li> 
	</ul>
   <?php //include ('layout/menuFiltre.php'); ?>
    

    <section id="apropos" class="a-propos">
        <h2>Votre recherche pour <?=$keywords;?></h2>
            <?php if ($results): ?>
                <?php foreach ($results as $row): ?>
                    <div style="margin-bottom: 20px;">
                        <h2><?= htmlspecialchars($row['title']) ?></h2>
                        <p><?= nl2br(htmlspecialchars($row['description'])) ?></p>
                        <img src="<?= htmlspecialchars($row['image']) ?>" alt="<?= htmlspecialchars($row['title']) ?>" style="max-width:300px;">
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Aucune randonnée trouvée pour « <?= htmlspecialchars($keywords) ?> ».</p>
            <?php endif; ?>
       
    </section>
    <?php include ('layout/footer.php'); ?>
    <script src="<?php echo js_dir; ?>theme.js?<?=time();?>" defer></script>

</body>

</html>