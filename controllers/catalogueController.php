<?php
require_once("model/mediaModel.php");

$medias = getAllMedia(); // 🐞 Le modèle contient trop de logique !

include("view/catalogue.php");
?>