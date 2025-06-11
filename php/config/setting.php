<?php
// define ('ENV', 'dev');
define ('ENV', 'local');

// Connexion à la base de données MySQL
// http://localhost/phpmyadmin/index.php?route=/sql&db=arroso'moi
include ('database.php');

// Si on est sur le serveur local (xampp)
if (ENV == "local") {
 define ("css_dir","http://filrouge.local/dist/css/");
define ("js_dir","http://filrouge.local/dist/js/");
define ("images_dir","http://filrouge.local/images/");

// Si on est sur afecdax.ovh
} else {
    define ("css_dir", "https://sebastien.afecdax.ovh/dist/css/");
    define ("js_dir", "https://sebastien.afecdax.ovh/dist/js/");
    define ("images_dir", "https://sebastien.afecdax.ovh/images/");
}
// Connexion à la base de données MySQL
// http://localhost/phpmyadmin/index.php?route=/sql&db=canirando
include ('database.php'); 
