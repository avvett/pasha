<?php require_once("navbar.php"); ?>

<div class="row">
	
	<div class="col-xs-12">
		
		<form class="form-horizontal" role="form">

			<div class="form-group">
				<label for="gender" class="col-sm-2 control-label">Gender</label>
				<div class="col-sm-10">
					<div class="radio">
					  <label>
					    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
					    Male
					  </label>

					  <label class="lmarg20">
					    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
					    Female
					  </label>
					</div>
				</div>
			</div>

			<div class="form-group">
				<label for="inputFirstName" class="col-sm-2 control-label">First name</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" id="inputFirstName" placeholder="First Name">
				</div>
			</div>

			<div class="form-group">
				<label for="inputLastName" class="col-sm-2 control-label">Last name</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" id="inputLastName" placeholder="Last Name">
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" id="inputEmail" placeholder="Email">
				</div>
			</div>

			<div class="form-group">
				<label for="inputStreet" class="col-sm-2 control-label">Street</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" id="inputStreet" placeholder="Street">
				</div>
			</div>

			<div class="form-group">
				<label for="inputCity" class="col-sm-2 control-label">City</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" id="inputCity" placeholder="City">
				</div>
			</div>

			<div class="form-group">
				<label for="inputZipcode" class="col-sm-2 control-label">Zipcode</label>
				<div class="col-sm-4">
					<input type="email" class="form-control" id="inputZipcode" placeholder="Zipcode">
				</div>
				<div class="col-sm-2">
					<input type="email" class="form-control" id="inputZipcode" placeholder="Zipcode">
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Country</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Phone no</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Date of birth</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
				</div>
			</div>

			<div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
				</div>
			</div>

			<div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Repeat password</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="pull-right btn btn-default btn-lg btn-success">Submit</button>
				</div>
			</div>
		</form>

	</div>

</div>

<?php require_once("default_footer.php"); ?>