<?php

require 'config.php';

include_once '_navbar.php';
include_once "_view-annonce.php";

?>


<div class="d-flex">
<?php
foreach($annonces as $annonce){
?>
<div class="card m-4" style="width:20%">    
    <div class="card-body">
        <h3 class="card-title text-uppercase text-center"><?php echo $annonce['title'];?></h3>                
        
        <p class="text-bold">Type d'annonce : <?php echo $annonce['type']; ?></p>
        <p class="text-bold">Prix : <?php echo $annonce['price']; ?>€.</p>
        <hr>
        <div class="text-center">
        <a href="detail.php?id=<?php echo $annonce['id']; ?>" class="btn btn-outline-warning col-10 mx-auto mt-2">Consulter en détail cette annonce</a>
        <?php
            if ($annonce['reserved']) {
                echo '<button class="btn btn-secondary col-10 mx-auto mt-2">Réservé</button>';
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
include_once "_footer.php";
?>