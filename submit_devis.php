<?php

include 'config.php'; // Inclure le fichier de configuration pour établir la connexion à la base de données

require_once 'config.php';


// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs du formulaire
    $type_travail = $_POST['type_travail'];
    $description_travail = $_POST['description_travail'];
    $departements = $_POST['departements'];

    // Connexion à la base de données
    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    
    // Vérifier la connexion
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Insérer les données dans la table "devis"
    $sql = "INSERT INTO devis (type_travail, description, etat, date_creation)
            VALUES ('$type_travail', '$description_travail', 'A FAIRE', NOW())";
    
    if (mysqli_query($conn, $sql)) {
        echo "Demande de devis envoyée avec succès.";
    } else {
        echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
    }

    // Fermer la connexion
    mysqli_close($conn);
}
?>
