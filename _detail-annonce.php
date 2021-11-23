<?php


$id = $_GET['id'];

$detailAnnonce = "SELECT * from advert WHERE id = :id";
$reqDetailAnnonce = $connexion->prepare($detailAnnonce);
$reqDetailAnnonce->bindValue(':id',$id);
$reqDetailAnnonce->execute();
$annonce = $reqDetailAnnonce->fetch();
if(empty($annonce)){
    header('Location:index.php?error=noId');
        exit();
}

?>