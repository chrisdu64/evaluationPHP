<?php

require '../../../config.php';

    $id = explode('=', $_SERVER['HTTP_REFERER'])[1];
    
try {
    $reqReservation = 'UPDATE advert SET reserved = :reserved WHERE id =:id';
    $editReservation = $connexion->prepare($reqReservation);
    $editReservation->bindValue(':reserved', true);
    $editReservation->bindValue(':id', $id);

$editReservation->execute();
} catch (PDOException $erreur) {    
    echo $erreur->getMessage();
    
    exit();
}
   