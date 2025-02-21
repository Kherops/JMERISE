// Exemple d'insertion d'un devis
$id_particulier = 1; // Remplacez par un ID valide de particulier dans la table 'particulier'
$type_travail = 'Pose de parquet';
$description = 'Pose de parquet dans le salon';
$etat = 'A FAIRE';
$date_creation = date('Y-m-d H:i:s'); // La date actuelle

$sql = "INSERT INTO devis (type_travail, description, etat, date_creation, id_particulier) 
        VALUES ('$type_travail', '$description', '$etat', '$date_creation', $id_particulier)";

if (mysqli_query($conn, $sql)) {
    echo "Devis ajouté avec succès!";
} else {
    echo "Erreur: " . mysqli_error($conn);
}
// Compare this snippet from JMERISE/submit_devis.php: