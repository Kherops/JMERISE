<?php
// Définir les constantes de connexion à la base de données
define('DB_SERVER', 'localhost'); // Serveur de la base de données
define('DB_USERNAME', 'root'); // Utilisateur de la base de données
define('DB_PASSWORD', ''); // Mot de passe de la base de données (vide par défaut pour root)
define('DB_NAME', 'bricoleurs_du_dimanche'); // Nom de la base de données

// Créer la connexion à la base de données
try {
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Gestion des erreurs
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>
