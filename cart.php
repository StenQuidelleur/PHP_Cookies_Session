<?php
session_start();
require 'inc/head.php';
require 'inc/data/products.php';

?>
<?php if(isset($_COOKIE['cookies']) && !empty($_COOKIE['cookies'])) {
    $cookies = $_COOKIE['cookies'];
?>
<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($catalog as $id[$cookies] => $cookie) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $cookies; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>
                    </figcaption>
                </figure>
            </div>
        <?php break; } ?>
    </div>
</section>
<?php } else { echo "";} ?>
<?php require 'inc/foot.php'; ?>
