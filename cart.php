<?php
session_start();
if (!isset($_SESSION['loginname'])) {
    header('Location: login.php');
    exit();
}

$articles = [ 46 => 'Pecan nuts', 36 => 'Chocolate chips', 58 =>'Chocolate cookie', 32 =>'M&M\'s&copy; cookies'];
?>
<?php require 'inc/head.php'; ?>
    <section class="cookies container">
        <div class="row">
            <table class="table table-striped">
                <tr>
                    <th>Image</th>
                    <th>Article</th>
                    <th>Quantity</th>
                </tr>
                <?php if(empty($_SESSION['cart'])) { echo "Votre panier est vide";}
                else
                    foreach($_SESSION['cart'] as $id => $quantity) { ?>
                    <tr>
                        <td><img src="assets/img/product-<?= $id ?>.jpg" alt=<?= $articles[$id] ?> class="img-responsive" style="height: 200px;"></td>
                        <td><?= $articles[$id] ?></td>
                        <td><?= $quantity ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </section>
<?php require 'inc/foot.php'; ?>