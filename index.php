<?php
require 'config.php';

include_once "public/partials/_navbar.php";
include_once "public/partials/_view-annonce.php";




?>



<?php
foreach($annonces as $annonce){
?>

<ul>
    <li class="card-title text-uppercase"><?php echo $annonce['title'];?></li>
</ul>

<?php
}
?>


<?php
include_once "public/partials/_footer.php";
?>