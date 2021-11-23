<?php
require 'config.php';

include_once "_navbar.php";
include_once "_view-annonce.php";
?>


<?php
    foreach($annonces as $annonce){        
?>
<div  class="mt-4">

   
        <ul>
    <li class="card-title text-uppercase"><?php echo $annonce['title'];?></li>
    </ul>
    
</div>

<?php
}
?>

<?php
include_once "_footer.php";
?>