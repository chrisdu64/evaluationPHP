<?php

require '../../../config.php';

    $id = explode('=', $_SERVER['HTTP_REFERER'])[1];

if (!empty($_GET['reservation_message'])) {
    $reservation_message = htmlspecialchars(trim($_GET['reservation_message']));     
} else {
    $reservation_message = null;
}
    
try {
    $reqReservation = 'UPDATE advert SET reserved = :reserved,reservation_message = :reservation_message WHERE id =:id';
    $editReservation = $connexion->prepare($reqReservation);
    $editReservation->bindValue(':reserved', true);
    $editReservation->bindValue(':reservation_message', $reservation_message, PDO::PARAM_STR);
    $editReservation->bindValue(':id', $id);

$editReservation->execute();
header("Location:{$_SERVER['HTTP_REFERER']}?success=modifAnnonce");

} catch (PDOException $erreur) {    
    echo $erreur->getMessage();
    
    exit();
}
   