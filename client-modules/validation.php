<?php

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'dataadventurers');

	// variable declaration
	$first_name = "";
	$last_name = "";
	$middle_initial = "";
	$id_number = "";
	$email_add = "";
	$Birthdate = "";
	$contact_num = "";
	$errors   = array();

	// call the register() function if register_btn is clicked
	if (isset($_POST['submit1'])) {
		register();
	}

	function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
	}
	// REGISTER USER
	function register(){
		global $db, $errors;

		$first_name = e($_POST['first_name']);
		    $last_name = e($_POST['last_name']);
		    $middle_initial = e($_POST['middle_initial']);
		    $id_number = e($_POST['id_number']);
		    $email_add = e($_POST['email_add']);
		    $password = e($_POST['password']);
		    $cpassword = e($_POST['cpassword']);
		    $Birthdate = e($_POST['Birthdate']);
		    $course = e($_POST['course']);
		    $Year = e($_POST['Year']);
		    $contact_num = e($_POST['contact_num']);

		    // form validation: ensure that the form is correctly filled
		    if (empty($first_name)) {
		      array_push($errors, "Firstname is required");
		    } else {
				$first_name = test_input($_POST["first_name"]);
					if (!preg_match("/^[a-zA-Z ]*$/",$first_name)) {
						array_push($errors, "Firstname: Only letters and white space allowed");
					}
				}

		    if (empty($last_name)) {
		      array_push($errors, "Lastname is required");
		    } else {
				$last_name = test_input($_POST["last_name"]);
					if (!preg_match("/^[a-zA-Z ]*$/",$last_name)) {
						array_push($errors, "Lastname: Only letters and white space allowed");
					}
				}

		    if (empty($middle_initial)) {
		      array_push($errors, "Middle Initial is required");
		    }

		    if (empty($id_number)) {
		      array_push($errors, "ID number is required");
		    } else {
				$id_number = test_input($_POST["id_number"]);
					if (!preg_match("/^[0-9]*$/",$id_number)) {
						array_push($errors, "ID Number: Please input seven digits");
					}
				}

		    if (empty($email_add)) {
		      array_push($errors, "Email Address is required");
		    } else {
				$email_add = test_input($_POST["email_add"]);
					if (!preg_match("/([w-]+@[w-]+.[w-]+)/",$email_add)) {
						array_push($errors, "Invalid email address format");
					}
				}

				if (empty($Birthdate)) {
					array_push($errors, "Birthdate is required");
				}

				if (empty($contact_num)) {
					array_push($errors, "Contact Number is required");
				} else {
				$contact_num = test_input($_POST["contact_num"]);
					if (!preg_match("/^[0-9]{6, 12}*$/",$contact_num)) {
						array_push($errors, "ID Number: Please at least seven digits");
					}
				}

		    if ($password != $cpassword) {
		      array_push($errors, "The two passwords do not match");
		    }

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password1 = md5($password);
      $password2 = md5($cpassword);

      $query = "INSERT INTO requests(id_number, first_name, last_name, middle_initial, email_add, password, cpassword, Birthdate, course, Year, contact_num, date)
      values ('$id_number', '$first_name', '$last_name', '$middle_initial', '$email_add', '$password1', '$password2', '$Birthdate', '$course', '$Year', '$contact_num', CURRENT_TIMESTAMP)";
      $query_run = mysqli_query($connection, $query);

        if($query_run){
          echo '<script type="text/javascript"> alert ("Form submitted! Registration pending.")</script>';
          header("location: ../login.php");
        } else {
          echo '<script type="text/javascript"> alert ("Registration unsuccessful!")</script>';
          header("location: ../user-registration.php");
        }
		}

	}

	// escape string
	function e($val){
		global $db;
		return mysqli_real_escape_string($db, trim($val));
	}

	function display_error() {
		global $errors;

		if (count($errors) > 0){
			echo '<div class="error">';
				foreach ($errors as $error){
					echo $error .'<br>';
				}
			echo '</div>';
		}
	}

?>
