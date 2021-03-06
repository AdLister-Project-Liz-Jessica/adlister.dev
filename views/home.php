<div class="container">

    <section id="welcome">

        <div class="row">

            <div class="col-lg-12">

                <div class="jumbotron">

                    <h1>Welcome to Kitchen Kweendom!</h1>

                    <p>Your source for all the unique kitchen gadgets you never knew you needed</p>

                </div>

            </div>

        </div>

    </section>

</div>
<!-- close welcome container -->

<!-- features container -->
<div class="container">

    <section id="features">

        <div class="features-head">

            <h3>Featured Items</h3>

        </div>

        <!-- featured items row -->

        <div class="row">

            <?php foreach ($features as $feature) : ?>

                <div class="col-sm-4">

                    <img class="features" src="<?= $feature['image_url'] ?>">

                    <h4><?= $feature['product_name'] ?></h4>

                    <p class="featured"><?= $feature['description'] ?></p>

                </div>

            <?php endforeach; ?>

        </div>
        <!-- close featured items row -->
    </section>
    <!-- close features section -->
</div>
<!-- close features container -->
