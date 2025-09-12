<?php
require_once("db.php");

function getAllMedia() {
    global $pdo;
    $result = $pdo->query("SELECT * FROM media");
    return $result->fetchAll();
}
?>