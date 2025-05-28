<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Canirando</title>
    <meta name="description" content="site de randonne canine" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="dist/css/theme.css">
    <link rel="shortcut icon" href="images/logo bulma.png">
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
            <li><a href="groupe.html">Connection groupe</a></li>
            <li><a href="creationgroupe.html">Création groupe</a></li>
        </ul>
    </div>

    <body>
        <section class="groupe">
            <div class="admin">
                <h2>Administrateur</h2>
                <div class="contact-form">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn">création administrateur</button>
                        </div>
                </div>
            </div>
            </form>
            </div>
            <div class="contact-form">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name" class="text-form">Nom du groupe:</label>
                        <input type="text" name=" Nom du groupe" >
                    </div>
                    <div class="form-group">
                        <label for="name" class="text-form">Choix des rando:</label>
                        <input type="text" name="Choix des rando ">
                    </div>
                    <div class="form-group">
                        <label for="name" class="text-form">Choix des chiens:</label>
                        <input type="password" name="Choix des chiens">
                    </div>
                    <div class="form-group">
                        <label for="name" class="text-form">Choix des difficultés:</label>
                        <input type="text" name="Choix des difficultés">
                    </div>
                    <div class="form-group">
                        <label for="name" class="text-form">Image du profil:</label>
                        <input type="text" name=" Votre nom et prénom" >
                    <div class="form-group">
                        <input type="hidden" value="50" name="id-article">
                    </div>
                    <div class="form-group">
                        <a href="grouperando.html"><button type="submit"class="btn" >Créer le groupe</button></a>	
                    </div>
                </form>
            </div>
        </section>
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