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
        <li><a href="inscription.php">Inscription</a></li>
	</ul>
	</div>
<body>
    <section>
        <div class="connection">
            
             <div>

                <label for="photo" class="drop-container" id="dropcontainer">
                  <span class="drop-title"></span>
                
                  <span class="btn">Choisir votre photo</span>
              <input
                type="file"
                id="photo"
                name="photo"
                />
                </label>
            </div>
                <div>
                <label for="photo" class="drop-container" id="dropcontainer">
                  <span class="drop-title"></span>
            
                  <span class="btn">Choisir la photo de votre compagnion</span>
              <input
                type="file"
                id="photo"
                name="photo"
                />
                </label>
            </div>
		</div>
    </section>
	<div class="contact-form">
		<form action="" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="name" class="text-form">Votre pseudo:</label>
				<input type="text" name=" Votre nom et prénom" required>
			</div>
			<div class="form-group">
				<label for="name" class="text-form">Votre adresse e-mail:</label>
				<input type="text" name=" Votre adresse e-mail " required>
			</div>
			<div class="form-group">
				<label for="name" class="text-form">Mot de passe:</label>
				<input type="password" name=" Votre numéro de téléphone" required>
			</div>
			<div class="form-group">
				<label for="name" class="text-form">Le nom de votre chien:</label>
				<input type="text" name=" Votre nom et prénom" required>
			</div>
			<div class="form-group">
				<label for="name" class="text-form">La race de votre chien:</label>
				<input type="text" name=" Votre nom et prénom" required>
			</div>
			<div class="form-group">
				<label for="name" class="text-form">L'age de votre chien:</label>
				<input type="text" name=" Votre nom et prénom" required>
			</div>
			<div class="form-group">
				<label for="name" class="text-form">Le caractère de votre chien:</label>
				<input type="text" name=" Votre nom et prénom" required>
			</div>
			
			<div class="form-group">
				<input type="hidden" value="50" name="id-article">
			</div>
			<div class="form-group">
				<button type="submit" name="submit" class="btn">Créer votre compte</button>
			</div>
		</form>
	</div>

		 
      <?php include ('layout/footer.php'); ?>
    <script src="<?php echo js_dir; ?>theme.js?<?=time();?>" defer></script>
</body>
</html>