<!--Page for creating new advertisement listings-->

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
                        <input type="file" class="form-control-file" id="image_url" name="image_url" enctype="multipart/form-data"  aria-describedby="fileHelp">
                        <small id="fileHelp" class="form-text text-muted">Add a picture of your Item. Allowed file types are .jpeg, .jpg, .gif, and .png</small>
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