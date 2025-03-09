<?php
require_once '../base-donnees/connexion.php'; 

if (!isset($_GET['id'])) {
    die("Paramètre 'id' manquant !");
}

$client_id = intval($_GET['id']);

try {
    $stmt = $pdo->prepare("DELETE FROM clients WHERE client_id = :id");
    $stmt->execute([':id' => $client_id]);
    header("Location: index.php");
    exit;
} catch (PDOException $e) {
    die("Erreur lors de la suppression : " . $e->getMessage());
}
