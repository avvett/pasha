<?php require_once("navbar.php"); ?>

<div class="row">

	<?php require_once("products_sidebar.php"); ?>

	<div class="col-sm-8 col-md-9">

	<div class="row">

		<?php for ($i=1; $i <= 16; $i++) : ?>
		<div class="col-xs-12 col-sm-4 col-md-3">

			<span class="text-center">

				<img src="http://placehold.it/400x400" alt="product" class="img-responsive img-rounded" />
				<h4>Brand type, name</h4>
				<p>Vehicle type</p>

				<p class="price_label">Price per day</p>
				<p class="fontsize40">&euro; 888.88</p>

				<p class="bmarg25"><a href="#" class="btn btn-success">Reserve now</a><p>

			</span>
			
		</div>	

		<?php if ($i%4 === 0) : ?>

		<div class="col-xs-12">
			
			<hr />

		</div>

		<?php endif; ?>

		<?php endfor; ?>

	</div>

	</div>

</div>

<?php require_once("default_footer.php"); ?>