<!--Page for creating new advertisement listings-->
<?php


// if user is logged in
if (Auth::check()) {

    $user_id = Auth::id();
    
    //check if all inputs are filled out
    if (Input::has('product_name') && Input::has('price') && Input::has('description') && Input::has('image_file')) {
        
        //validate uploaded file & save file name in variable
        $input_name = Input::getImage('image_file');
        echo $input_name;
        saveUploadedImage($input_name);

        // set the info from post requests to variables
        if (! empty($_POST)) {

            $product_name = Input::get('product_name');
            $price = Input::get('price');
            $description = Input::get('description');

            $newProduct = new Product();
            $newProduct->user_id = $user_id;
            $newProduct->product_name = $product_name;
            $newProduct->price = $price;
            $newProduct->description = $description;
            $newProduct->image_file = $image_url;

            $newProduct->save();

            $message = "your ad has been successfully created";
        }

    } else {

        $message = "your ad was not created, try again";

    }

} else {

    $message = "you must be logged in to create an ad, log in first then try again";

}


?>


<div class="container">

    <section id="login">

        <div class="row">

            <h1 class="section-title">Create A New Item</h1>

            <div class="col-md-6 col-md-offset-6">

                <p>Please fill out the information below to create an ad</p>

                <form method="POST" action="/ads/create" enctype="multipart/form-data" data-validation data-required-message="This field is required">

                    <div class="form-group">
                        <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Item Name" data-required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="price" name="price" placeholder="Item Price $" data-required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="description" rows="3" placeholder="Description of item" name='description'></textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Item image</label>
                        <input type="file" class="form-control-file" id="image_file" name="image_file" enctype="multipart/form-data" aria-describedby="fileHelp">
                        <small id="fileHelp" class="form-text text-muted">Add a picture of your Item!</small>
                    </div>
        <div class="row">
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>

                </form>

            </div>

        </div>

    </section>

</div>