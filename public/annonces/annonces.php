<?php

require '../../config.php';

include_once '../partials/_navbar.php';
include_once "../partials/_view-annonce.php";

?>


<div class="d-flex">
<?php
foreach($annonces as $annonce){
?>
<div class="card m-4" style="width:20%">    
    <div class="card-body">
        <h3 class="card-title text-uppercase"><?php echo $annonce['title'];?></h3>                
        
        <p>Type d'annonce : <?php echo $annonce['type']; ?></p>
        <p>Prix : <?php echo $annonce['price']; ?>€.</p>
        <hr>
        <div class="d-flex justify-content-around">
        <a href="#" class="btn btn-outline-success col-5">Choisir ce séjour</a>     
        <a href="detail.php?id=<?php echo $annonce['id']; ?>" class="btn btn-outline-warning col-5">Consulter en détail cette annonce</a>
        <?php
            if ($annonce['reserved']) {
                echo '<button class="btn btn-secondary col-5">Réservé</button>';
            }
        ?>  
        </div>     
    </div>
</div>

<?php
}
?>
</div>

<?php
include_once "../partials/_footer.php";
?>