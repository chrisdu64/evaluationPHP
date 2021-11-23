<?php

$id = $_GET['id'];

$detailDeLAnnonce = "SELECT * from advert WHERE id = :id";
$reqDetailDeLAnnonce = $connexion->prepare($detailDeLAnnonce);
$reqDetailDeLAnnonce->bindValue(':id',$id);
$reqDetailDeLAnnonce->execute();
$annonce = $reqDetailDeLAnnonce->fetch();
if(empty($annonce)){
    header('Location:../../index.php?error=noId');
        exit();
}

?>