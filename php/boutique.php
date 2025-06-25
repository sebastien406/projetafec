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
		<li><a href="">Compte</a></li>
	</ul>
</div>
<body>
    
 <main class="container">
        <h2>Equipez-vous pour des randonnées mémorable avec votre fidèle compagnon.</h2>
        <section id="product-list">
            <?php
            $products = [
                [
                    'id' => 1,
                    'name' => 'Sac à dos de ballade pour chien',
                    'price' => 45.99,
                    'image' => <img src="images/sac a dos chien" alt="" srcset="images/sac a dos chien">,
                    'description' => 'Idéal pour transporter ses affaires lors de longues randonnées.'
                ],
                [
                    'id' => 2,
                    'name' => 'Gourde portable pour chien',
                    'price' => 12.50,
                    'image' => 'https://via.placeholder.com/200x200?text=Gourde+chien',
                    'description' => 'Assure l\'hydratation de votre compagnon partout.'
                ],
                [
                    'id' => 3,
                    'name' => 'Trousse de premiers secours canine',
                    'price' => 28.00,
                    'image' => 'https://via.placeholder.com/200x200?text=Trousse+secours',
                    'description' => 'Indispensable pour les petits bobos en chemin.'
                ],
                [
                    'id' => 4,
                    'name' => 'Laisse de rando mains-libres',
                    'price' => 19.99,
                    'image' => 'https://via.placeholder.com/200x200?text=Laisse+mains-libres',
                    'description' => 'Profitez de votre randonnée en toute liberté.'
                ]
            ];

            foreach ($products as $product) {
                echo '<div class="product-card">';
                echo '<img src="' . htmlspecialchars($product['image']) . '" alt="' . htmlspecialchars($product['name']) . '">';
                echo '<h3>' . htmlspecialchars($product['name']) . '</h3>';
                echo '<p class="description">' . htmlspecialchars($product['description']) . '</p>';
                echo '<p class="price">' . number_format($product['price'], 2, ',', ' ') . ' €</p>';
                echo '<button class="add-to-cart" data-id="' . $product['id'] . '" data-name="' . htmlspecialchars($product['name']) . '" data-price="' . $product['price'] . '">Ajouter au panier</button>';
                echo '</div>';
            }
            ?>
        </section>
    </main>

    <div id="cart-modal" class="modal">
        <div class="modal-content">
            <span class="close-button">&times;</span>
            <h2>Votre Panier</h2>
            <ul id="cart-items">
                </ul>
            <p>Total: <span id="cart-total">0.00 €</span></p>
            <button id="checkout-button">Procéder au paiement</button>
        </div>
    </div>
      <?php include ('layout/footer.php'); ?>
    <script src="<?php echo js_dir; ?>theme.js?<?=time();?>" defer></script>
</body>
</html>