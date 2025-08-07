<?php
require_once("db.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $mediaId = $_POST["media_id"];
    $userId = 1; // Simulé

    // 🐞 Logique métier ici : doit être déplacée
    $count = $pdo->query("SELECT COUNT(*) FROM emprunts WHERE user_id=$userId AND statut='En cours'")->fetchColumn();
    if ($count >= 3) {
        echo "Trop d'emprunts";
        exit;
    }

    $pdo->exec("INSERT INTO emprunts (user_id, media_id, date_emprunt, statut) VALUES ($userId, $mediaId, NOW(), 'En cours')");
    echo "Emprunt OK";
}
?>