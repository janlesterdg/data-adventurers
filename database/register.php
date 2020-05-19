<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Adventurers | Registration</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
	<div class="row">
	   <div class="col-md-4 col-md-offset-4 well">
	       <form role="form" name="signupform" method="post" action="register.php">
	          <fieldset>

            <?php include('errors.php'); ?>

             <legend>Registration</legend>

	            <div class="form-group">
	                <label for="idnumber"><b>ID Number</b></label>
	                <input type="text" name="idnumber" placeholder="#######" required class="form-control" value="<?php echo $reg_id; ?>">
	            </div>

	            <div class="form-group">
	                <label for="firstname"><b>First Name</b></label>
	                <input type="text" name="firstName" placeholder="John" required class="form-control" value="<?php echo $first_name; ?>">
	            </div>

	            <div class="form-group">
	                <label for="lastname"><b>Last Name</b></label>
	                <input type="text" name="lastName" placeholder="Doe" required class="form-control" value="<?php echo $last_name; ?>">
	            </div>

	            <div class="form-group">
	                <label for="middleName"><b>Middle Name</b></label>
	                <input type="text" name="middleName" placeholder="Middle Name" required class="form-control" value="<?php echo $middle_initial; ?>">
	            </div>

	             <div class="form-group">
	                <label for="middleName"><b>Age</b></label>
	                <input type="number" name="age" placeholder="Age" required class="form-control" value="<?php echo $age; ?>">
	            </div>

	            <div class="form-group">
	                <label for="email"><b>Email</b></label>
	                <input type="email" name="email" placeholder="i.e. 123@gmail.com" required class="form-control" value="<?php echo $email_add; ?>">
	            </div>

	            <div class="form-group">
	                <label for="email"><b>Birthdate</b></label>
	                <input type="date" name="birthdate" placeholder="Birthdate" required class="form-control" value="<?php echo $birthdate; ?>">
	            </div>

	            <div class="form-group">
	                <label for="phonenumber"><b>Phone Number</b></label>
	                <input type="text" name="phonenumber" placeholder="i.e. 0912 345 6789" required class="form-control" value="<?php echo $contact_num; ?>">
	            </div>

	            <div class="form-group">
	                <label for="phonenumber"><b>Password</b></label>
	                <input type="password" name="password" placeholder="Password" required class="form-control" value="<?php echo $password; ?>">
	            </div>

	            <div class="form-group">
	                <label for="phonenumber"><b>Confirm Password</b></label>
	                <input type="password" name="confirmPass" placeholder="Confirm Password" required class="form-control">
	            </div>

	            <hr class="mb-3">
	            <div class="form-group">
	            	<input type="submit" name="create" value="Register" class="btn btn-primary btn-lg center-block" />
	            </div>

			</fieldset>
		</form>
	</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">
		 Are you really registered? <a href="">Check Here</a>
		</div>
	</div>
	</div>

</body>
</html>
