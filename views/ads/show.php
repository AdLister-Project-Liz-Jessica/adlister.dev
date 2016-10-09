<!--Page for single advertisement -->
<div class="container">

<?php foreach ($products as $product) : ?>

    <div class="show col-sm-8">

        <div class="imageHolder">

            <img class="show-item-img" src="<?= $product['image_url'] ?>">

        </div>

        <h4 class="show-item-header"><?= $product['product_name'] ?></h4>

        <p><?= $product ['description'] ?></p>

    </div>

    <div class="show col-sm-4">

        <p><span class="bold">Price:</span> $ <?= $product ['price'] ?></p>
        
        <p><span class="bold">Contact:</span> <?= $products->getUserInfo()->username ?></p>

        <p><span class="bold">Posted By:</span> <?= $products->getUserInfo()->name ?></p>

    </div>

<?php endforeach ?>

    <div class="row">
    
        <div class="col-sm-6 button-center">

            <button class="btn">edit ad</button>

        </div>

        <div class="col-sm-6 button-center">

            <button class="btn">delete ad</button>

        </div>



</div>