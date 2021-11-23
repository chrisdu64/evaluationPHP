<?php

require '../../config.php';

include_once '../partials/_navbar.php';
include_once "../partials/_detail-annonce.php";

?>


<div class="card m-4" style="width:30%">
    <div class="card-body">
        <h3 class="card-title text-uppercase"><?php echo $annonce['title']; ?></h3>
        <p class="fw-bold">Description :</p>
        <p><?php echo $annonce['description']; ?></p>
        <p><?php echo $annonce['type']; ?> situé :</p>
        <p>A : <?php echo $annonce['city']; ?></p>
        <p>Code Postal : <?php echo $annonce['postal_code']; ?></p>
        <hr>        
        <p>Le prix est de : <?php echo $annonce['price']; ?>€.</p>
        <hr>

        <form action="post/reservation_post.php" method="post">
            <p class="text-bold">Message de réservation :</p>
            <textarea name="reservation_message" class="form-control" rows=3><?php echo $annonce['reservation_message']; ?></textarea>
            <hr>
            <?php
                if ($annonce['reserved']) {
                    echo '<button class="btn btn-secondary col-5">Réservé</button>';
                } else {
                    ?>               
            <input type="hidden" name="id" value="<?php echo $annonce['id']; ?>">
            <button type="submit" class="btn btn-warning col-2">Je réserve</button>
            <?php
                }
            ?>
        </form>        
        
    </div>
</div>

<?php
include_once '../partials/_footer.php';
?>