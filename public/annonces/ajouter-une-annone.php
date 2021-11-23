<?php

require 'includes/config.php';

include_once '_navbar.php';

$alert = false;
if (isset($_GET["error"])) {
    $alert = true;
    if ($_GET['error'] == "missingInput") {
        $type = "secondary";
        $message = "Les champs requis sont vides";
    }
    if ($_GET['error'] == "pastAvailablity") {
        $type = "secondary";
        $message = "La date de réservation est trop proche.";
    }
    if ($_GET['error'] == "wrongFormat") {
        $type = "warning";
        $message = "L'image est au mauvais format : Les formats acceptés sont jpg,png,jpeg";
    }
    if ($_GET['error'] == "unknownError") {
        $type = "warning";
        $message = "Une erreur s'est produite, nous nous excusons de la gêne occasionnée. Veuillez contacter l'administrateur du site, merci.";
    }
}
?>

<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ps ps--active-y">
    <form action="ajouter-une-annonce_post.php" method="post" class="container" enctype="multipart/form-data">
        <?php echo $alert ? "<div class='alert alert-{$type} mt-2'>{$message}</div>" : ''; ?>
        <div class="mb-3">
            <label for="title" class="form-label">Titre *</label>
            <input type="text" class="form-control" id="title" name="title" required>    
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description *</label>
            <textarea class="form-control" id="description" rows="3" name="description" required></textarea>
        </div>
        <div class="mb-3">
            <label for="postal_code" class="form-label">Code postal du bien *</label>
            <input type="number" class="form-control" id="postal_code" name="postal_code" required>    
        </div>
        <div class="mb-3">
            <label for="city" class="form-label">Ville du bien *</label>
            <input type="text" class="form-control" id="city" name="city">    
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type de bien *</label>
            <input type="text" class="form-control" id="type" name="type" required>    
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prix *</label>
            <input type="number" min="1" step="0.1" class="form-control" id="price" name="price" required>
        </div>
        
        <div class="mb-3">
            <button type="submit" class="btn btn-outline-success btn-lg">Ajouter votre annonce</button>
        </div>

    </form>

</main>
<?php
include_once '_footer.php';
?>