<!--Page that includes the form to edit an existing ad-->

<div class="container">

	<section id="login">

		<div class="row">

			<h1 class="section-title">Edit A New Item</h1>

			<div class="col-md-6 col-md-offset-3">

				<p>Please fill out the information below to edit a product item</p>

				<form method="POST" action="" data-validation data-required-message="This field is required">

					<div class="form-group">
					    <input type="text" class="form-control" id="item_name" name="item_name" placeholder="Item Name" data-required>
					</div>
					<div class="form-group">
					    <input type="text" class="form-control" id="item_price" name="item_price" placeholder="Item Price $" data-required>
					</div>
					<div class="form-group">
    					<textarea class="form-control" id="item_description" rows="3" placeholder="Description of item"></textarea>
  					</div>
					<div class="row">
						<div class="col-sm-6">
							<button type="submit" class="btn btn-primary">Update</button>
						</div>
					</div>

				</form>

			</div>

		</div>

	</section>

</div>