<?php

require_once '../../base-donnees/connexion.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    try {
        $sql = "DELETE FROM employes WHERE employe_id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id]);

        echo "Employé supprimé avec succès !";

    } catch (PDOException $e) {
        echo "Erreur lors de la suppression : " . $e->getMessage();
    }
} else {
    echo "Paramètre ID manquant !";
}
?>
