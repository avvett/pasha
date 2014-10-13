<?php require_once("default_header.php"); ?>

<div class="row tmarg40">

	<div class="col-xs-12 bmarg15">
		<img src="http://placehold.it/350x100" alt="logo" class="img-responsive" />
	</div>

	<div class="col-xs-12">

		<!-- NAVBAR -->
		<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
		<div class="navbar-header">

			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="http://athena.fhict.nl/users/i253687/Pasha/">Pasha</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Reservations</a></li>
				<li><a href="product_overview.php">Products</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Locations <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
						<li class="divider"></li>
						<li><a href="#">One more separated link</a></li>
					</ul>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">

				<li class="dropdown">

					<a href="#" class="login_link dropdown-toggle" data-toggle="dropdown">Log in</a>
					<ul class="dropdown-menu login_form_dropdown" role="menu">
						<li>
							
					<form role="form" class="login_form">
					<div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
						<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox"> Remember me
						</label>
					</div>
					<a href="#" class="btn btn-default">Forgot your password?</a>
					<button type="submit" class="btn btn-default btn-success pull-right">Submit</button>
				</form>

						</li>
					</ul>
					</li>

				
				<li><a href="registration.php">Register</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
		</div>
		</nav>

	</div>

</div>