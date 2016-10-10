<!--Page for user account home-->
<?php 

if(!Auth::check()){
    header("Location: /users/login");
    die;
}

$currentUser = Auth::user();


?>
<div class="container">

    <section id="userInfo">

        <div class="row">

            <h2 class="text-center">User Info</h2>

            <p class="text-center">Name: <?php echo $currentUser->name; ?></p>

            <p class="text-center">Username: <?php echo $currentUser->username; ?> </p>

            <p class="text-center">Email: <?php echo $currentUser->email; ?></p>


            <div class="col-sm-12 text-center">

                <a href="/users/account/edit?id=1" class="btn btn-primary">

                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit Profile

                </a>

            </div>

        </div>

    </section>

    <section id="for-sale">

        <div class="row">

            <div class="col-xs-12">

                <h2 class="section-title text-center">Items You Have For Sale</h2>

            </div>

        </div>

        <div class="row">

            <div class="col-sm-4">

                <?php foreach ($users_ads as $users_ad) : ?>

                <h5 class="text-center"><?= $users_ad['product_name'] ?></h4>

                <img src="<?= $users_ad['image_url'] ?>" class="features center-block">

                <p><?= $users_ad['description'] ?></p>

                <?php endforeach ?>

                <!-- <a href="/ads/edit" class="text-center">Edit this listing</a> -->

            </div>

        </div>

        <div class="row text-center">

            <a href="/ads/create" class="btn btn-success">Create Ad</a>

        </div>

    </section>

</div>