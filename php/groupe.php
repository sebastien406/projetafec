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
		<li><a href="accueil">Accueil</a></li>
	</ul>
<body>
    <div class="connection">
		<h2>Se connecter au groupe</h2>
		<div class="contact-form">
			<form action="" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="name" class="text-form">Votre adresse e-mail:</label>
					<input type="text" name=" Votre adresse e-mail " >
				</div>
				<div class="form-group">
					<label for="name" class="text-form"> Votre mot de passe:</label>
					<input type="password" name=" password" >
				</div>
			</form>
			<div class="form-group">
					<a href="pageGroupe.php"><button type="submit"class="btn" >Se connecter</button></a>	
				</div>
		</div>
	</div> 
	<div class="inscription">
		<h2>Créer un groupe</h2>
		<div class="form-group">
			<a href="creationgroupe.php"><button type="submit"class="btn" >Créer</button></a>	
		</div>
	</div>
	 <?php include ('layout/footer.php'); ?>
    <script src="<?php echo js_dir; ?>theme.js?<?=time();?>" defer></script>
</body>
</html>