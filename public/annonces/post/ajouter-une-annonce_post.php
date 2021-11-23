<?php

require '../../../config.php';

echo '<pre>';
var_dump($_POST);
echo '</pre>';

if (empty($_POST['title']) || empty($_POST['description']) || empty($_POST['postal_code']) || empty($_POST['city']) || empty($_POST['type']) || empty($_POST['price'])) {
    header('Location:../ajouter-une-annonce.php?error=missingInput');
    exit();
} else {
    $title = htmlspecialchars(trim($_POST['title']));
    $description = htmlspecialchars(trim($_POST['description']));
    $postal_code = htmlspecialchars($_POST['postal_code']);
    $city = htmlspecialchars(trim($_POST['city']));
    $type = htmlspecialchars(trim($_POST['type']));
    $price = htmlspecialchars(floatval($_POST['price']));
    
    $reservation_message = null;

}


try {

$ajoutAnnonce = 'INSERT INTO advert (title,description,postal_code,city,type,price) VALUES(:title,:description,:postal_code,:city,:type,:price)';
$reqAjoutAnnonce = $connexion->prepare($ajoutAnnonce);
$reqAjoutAnnonce->bindValue(':title', $title, PDO::PARAM_STR);
$reqAjoutAnnonce->bindValue(':description', $description, PDO::PARAM_STR);
$reqAjoutAnnonce->bindValue(':postal_code', $postal_code);
$reqAjoutAnnonce->bindValue(':city', $city, PDO::PARAM_STR);
$reqAjoutAnnonce->bindValue(':type', $type, PDO::PARAM_STR);
$reqAjoutAnnonce->bindValue(':price', $price);

$reqAjoutAnnonce->execute();
    header('Location:../ajouter-une-annonce.php?success=addedAnnonce');

} catch (PDOException $erreur) {    
    echo $erreur->getMessage();
    
    exit();
}

?>