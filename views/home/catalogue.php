<h1>Catalogue</h1>
<?php foreach ($medias as $media): ?>
  <p><?= $media['titre'] ?> (<?= $media['type'] ?>)</p>
<?php endforeach; ?>