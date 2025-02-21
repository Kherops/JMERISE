<?php
// Inclure le fichier de configuration pour établir la connexion à la base de données
include 'config.php';

// Tester la connexion avec un message
if ($pdo) {
    echo "Connexion à la base de données réussie!";
} else {
    echo "Échec de la connexion à la base de données.";
}
?>
