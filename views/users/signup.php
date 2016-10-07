<?php 
	//if there is something in all the inputs
	$message = "Please fill out the following so we can create your account:";
	if(Input::get('name') && Input::get('username') && Input::get('email') && Input::get('password')){


		if(!empty($_POST)){
			$name = Input::get('name');
			$username = Input::get('username');
			$email = Input::get('email');
			$password = Input::get('password');

			$newUser = new User();
			$newUser->name = $name;
			$newUser->username = $username;
			$newUser->email = $email;
			$newUser->password = $password;
			
			$newUser->save();

		$message = "Signup Succesful!";

		}else{
		 $message = "Try Again";
		}
		
	}


 ?>

<div class="container">

	<section id="login">

		<div class="row">

			<h1 class="section-title">Sign Up For Kitchen Kingdom</h1>

			<div class="col-md-6 col-md-offset-3">

				<!-- <p>Please fill out the information below so we can create your account.</p> -->
				<?php if (isset($_SESSION['ERROR_MESSAGE'])) : ?>
	                <div class="alert alert-danger">
	                    <p class="error"><?= $_SESSION['ERROR_MESSAGE']; ?></p>
	                </div>
	                <?php unset($_SESSION['ERROR_MESSAGE']); ?>
	            <?php endif; ?>
	            <?php if (isset($_SESSION['SUCCESS_MESSAGE'])) : ?>
	                <div class="alert alert-success">
	                    <p class="success"><?= $_SESSION['SUCCESS_MESSAGE']; ?></p>
	                </div>
	                <?php unset($_SESSION['SUCCESS_MESSAGE']); ?>
	            <?php endif; ?>

				<form method="POST" action="" data-validation data-required-message="This field is required">
				<h4> <?= $message ?> </h4>

					<div class="form-group">
					    <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" data-required>
					</div>
					<div class="form-group">
					    <input type="text" class="form-control" id="username" name="username" placeholder="Username" data-required>
					</div>
					<div class="form-group">
					    <input type="text" class="form-control" id="email" name="email" placeholder="Email" data-required>
					</div>
					<div class="form-group">
					    <input type="password" class="form-control" id="password" name="password" placeholder="Password" data-required>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<button type="submit" class="btn btn-primary">Sign Up</button>
						</div>
						<div class="col-sm-6 text-right">
							<a href="/users/login" class="btn btn-success">Go To Login</a>
						</div>
					</div>

				</form>

			</div>

		</div>

	</section>

</div>

