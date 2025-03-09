<?php
// back/creeremploye.php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récupérer les données envoyées
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $poste = $_POST['poste'];
    $departement = $_POST['departement'];
    $date_embauche = $_POST['date_embauche'];

    // Connexion à la base de données et insertion
    $conn = new mysqli('localhost', 'root', 'passer', 'smarttech');
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO employes (prenom, nom, email, telephone, poste, departement, date_embauche) 
            VALUES ('$prenom', '$nom', '$email', '$telephone', '$poste', '$departement', '$date_embauche')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Nouvel employé créé avec succès!";
    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Méthode de requête invalide.";
}
?>
