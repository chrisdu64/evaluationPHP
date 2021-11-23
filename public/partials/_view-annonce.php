<?php
$viewAnnonce = 'SELECT * from advert';
$reqViewAnnonce = $connexion->query($viewAnnonce);
$annonces = $reqViewAnnonce->fetchAll();
?>