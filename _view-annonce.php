<?php
$viewAnnonce = 'SELECT * from advert ORDER BY id DESC';
$reqViewAnnonce = $connexion->query($viewAnnonce);
$annonces = $reqViewAnnonce->fetchAll();
?>


