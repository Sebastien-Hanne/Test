<?php
require_once("db.php");
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $titre = $_POST["titre"];
    $type = $_POST["type"];
    $stock = $_POST["stock"];
    // 🐞 Aucun contrôle ni requête préparée
    $pdo->exec("INSERT INTO media (titre, type, stock) VALUES ('$titre', '$type', $stock)");
    echo "Média ajouté !";
}
?>
<form method="POST">
    <input name="titre" placeholder="Titre">
    <input name="type" placeholder="Type">
    <input name="stock" type="number" placeholder="Stock">
    <button type="submit">Ajouter</button>
</form>