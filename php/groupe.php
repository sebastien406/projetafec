
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8" />
	<title>Canirando</title>
	<meta name="description" content="site de randonne canine" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="dist/css/theme.css">
	<link rel="shortcut icon" href="images/logo bulma.jpg">
</head>

<body>
	<header>
		<div class="header">
			<div class="logo">
				<img src="images/logo bulma.jpg" alt="joli chien avec une laisse dans la gueule"
					style="height: 70px; width: 80px;border-radius: 90px;">
			</div>
			<div class="icon">
				<div class="icon-profil">
					<a href="compte.html"><img src="images/iconprofil.png" alt="icon de mon profil" srcset=""></a>
				</div>
				<div class="icon-groupe">
					<a href="groupe.html"><img src="images/groupe.png" alt="icon deprofil pour le groupe" srcset=""></a>
				</div>
			</div>
			<div class="nom-du-site">
				<h1>CANIRANDO</h1>
			</div>
		</div>
		</div>
	</header>
    <div class="fil-ariane">
		<ul>
		<li><a href="index.html">Accueil</a></li>
        <li><a href="creationgroupe.html">Connection groupe</a></li>
	</ul>
	</div>
<body>
    <div class="connection">
		<h2>Se connecter au groupe</h2>
		<div class="contact-form">
			<form action="" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="name" class="text-form">Votre adresse e-mail:</label>
					<input type="text" name=" Votre adresse e-mail " required>
				</div>
				<div class="form-group">
					<label for="name" class="text-form"> Votre mot de passe:</label>
					<input type="password" name=" password" required>
				</div>
				<div class="form-group">
					<button type="submit" name="submit" class="btn">Se connecter</button>
				</div>
			</form>
		</div>
	</div> 
	<div class="inscription">
		<h2>Créer un groupe</h2>
		<div class="form-group">
			<a href="creationgroupe.html"><button type="submit"class="btn" >Créer</button></a>	
		</div>
	</div>
	<footer>
		<div class="logo-footer">
			<a href=""><img src="images/logo bulma.jpg" alt="logo avec une tête de chien"
					style="height: 70px; width: 80px;border-radius: 90px;"></a>
		</div>
		<div class="info-footer">
			<div class="a-propos">
				<h2>A propos</h2>
				<p><a href="">Trouver une randonnée</a></p>
				<p><a href="">Groupes de randonneurs</a></p>
				<p><a href="">Mes messages</a></p>
				<p><a href="">Mon compte</a></p>
				<a href="">Se déconnecter</a>
			</div>
			<div class="informations">
				<h2>Informations</h2>
				<p><a href="">A propos</a></p>
				<p><a href="">Mentions légales</a></p>
				<p><a href="">Politique de confidentialité</a></p>
				<p><a href="">Nous contacter</a></p>
			</div>
		</div>
	</footer>
</body>
</html>