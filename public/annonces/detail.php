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
        <p class="text-bold">Message de réservation : <?php echo $annonce['reservation_message']; ?></p>
        <form action="post/reservation_post.php" method="get">

        <?php
        
        if ($annonce['reserved']) {
            echo '<button class="btn btn-secondary ">Réservé</button>';
        } else {
            ?>               
            <textarea name="reservation_message" class="form-control" rows=3><?php echo $annonce['reservation_message']; ?></textarea>
            <hr>
            <input type="hidden" name="id" value="<?php echo $annonce['id']; ?>">
            <button type="submit" class="btn btn-warning ">Je réserve</button>
        </form>        
            <?php
                }
            ?>
        
    </div>
</div>

<?php
include_once '../partials/_footer.php';
?>