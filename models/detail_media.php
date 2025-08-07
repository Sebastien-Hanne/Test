<?php
require_once("db.php");
$id = $_GET['id'];
$media = $pdo->query("SELECT * FROM media WHERE id = $id")->fetch(); // 🐞 Pas de vérif + SQL direct
?>
<h2>Détails</h2>
<p><?= $media['titre'] ?> (<?= $media['type'] ?>)</p>
<?php if ($media['stock'] > 0): ?>
  <button>Emprunter</button>
<?php endif; ?>