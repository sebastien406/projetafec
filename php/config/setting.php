
<?php
// Lire le fichier .env
function loadEnv($path)
{
    if (!file_exists($path)) {
        return;
    }

    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) {
            continue;
        }
        list($name, $value) = explode('=', $line, 2);
        $name = trim($name);
        $value = trim($value);
        if (!array_key_exists($name, $_SERVER) && !array_key_exists($name, $_ENV)) {
            putenv(sprintf('%s=%s', $name, $value));
            $_ENV[$name] = $value;
            $_SERVER[$name] = $value;
        }
    }
} 
loadEnv(DIR. '/../.env');
// On récupère l'environnement (local par défaut si non défini)
$env = getenv('APP_ENV') ?: 'local';



// Si on est sur le serveur local (xampp)
if ($env === "local") {
   define ("css_dir","http://filrouge.local/dist/css/");
   define ("js_dir","http://filrouge.local/dist/js/");
   define ("images_dir","http://filrouge.local/images/");


// Si on est sur afecdax.ovh
} elseif ($env === "prod") {
    define ("css_dir", "https://sebastien.afecdax.ovh/dist/css/");
    define ("js_dir", "https://sebastien.afecdax.ovh/dist/js/");
    define ("images_dir", "https://sebastien.afecdax.ovh/images/");
}

// Connexion à la base de données MySQL
/* // http://localhost/phpmyadmin/index.php?route=/sql&db=canirando */
include ('database.php');



