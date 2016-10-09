<!--Page for an index of advertisements-->
<!-- index container -->
<div class="container">

    <section id="ads-index">

    <div class="index-head">

        <h1>Shop Kitchen Kingdom!</h1>

    </div>

    <!-- items row -->
    <div class="row">

        <?php foreach ($products->attributes as $product) : ?>

        <div class="col-sm-3">

            <a href="/ads/show?id=<?= $product['id'] ?>">

            <img class="allProducts" src="<?= $product['image_url'] ?>">

                <h4><?= $product['product_name'] ?></h4>

            </a>

            <p class="featured"><?= $product['description'] ?></p>
            <p><small>$ <?= $product['price'] ?></small></p>

        </div>

        <?php endforeach ?>

    </div>
    <!-- close items row -->
    </section>
    <!-- close index section -->
</div>
<!-- close index container -->
