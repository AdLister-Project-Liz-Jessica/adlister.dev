<!--Page for creating new advertisement listings-->
<?php

// if user is logged in
if (Auth::check()) {

	$user_id = Auth::id();
	
	//check if all inputs are filled out
	if (Input::has('product_name') && Input::has('price') && Input::has('description') ) {

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

			$newProduct->save();
		}
	}
}

?>


<div class="container">

	<section id="login">

		<div class="row">

			<h1 class="section-title">Create A New Item</h1>

			<div class="col-md-6 col-md-offset-6">

				<p>Please fill out the information below to create a new item to sell</p>

				<form method="POST" action="" data-validation data-required-message="This field is required">

					<div class="form-group">
					    <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Item Name" data-required>
					</div>
					<div class="form-group">
					    <input type="text" class="form-control" id="price" name="price" placeholder="Item Price $" data-required>
					</div>
					<div class="form-group">
    					<textarea class="form-control" id="description" rows="3" placeholder="Description of item" name='description'></textarea>
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