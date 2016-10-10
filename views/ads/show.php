<!--Page for single advertisement -->
<div class="container">


<?php foreach ($products as $product) : ?>

    <div class="col-sm-8">

    <section>
        <div class="imageHolder">

            <img class="show-item-img" src="<?= $product['image_url'] ?>">

        </div>

        <h4 class="show-item-header"><?= $product['product_name'] ?></h4>

        <p><?= $product ['description'] ?></p>

    </section>
    </div>



    <div class="col-sm-4">
    <section>

        <p><span class="bold">Price:</span> $ <?= $product ['price'] ?></p>
        
        <p><span class="bold">Contact:</span> <?= $products->getUserInfo()->username ?></p>

        <p><span class="bold">Posted By:</span> <?= $products->getUserInfo()->name ?></p>

        <!-- <div id="buttonHolder" class="button-center">

            <button class="btn">edit ad</button>

            <button class="btn">delete ad</button>
        
        </div> -->
    </section>

    </div>

<?php if (isset($_SESSION['IS_LOGGED_IN']) && $_SESSION['LOGGED_IN_ID'] === $product['user_id']) {
    
    $showdiv = 'buttonHolder';

    echo "<script type=\"text/javascript\">document.getElementById('".$showdiv."').style.display = 'block';</script>";
} ?>

<?php endforeach ?>


</div>