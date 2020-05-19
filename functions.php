<?php
	// connect to database
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'dataadventurers');

	// variable declaration
	$id_number = "";
	$email    = "";
	$errors   = array();

	// log user out if logout button clicked
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['user']);
		header("location: ../login.php");
	}

	// call the login() function if register_btn is clicked
	if (isset($_POST['login_btn'])) {
		login();
	}
	// log user out if logout button clicked
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['user']);
		header("location: ../login.php");
		exit;
	}

	// return user array from their id
	function getUserById($id){
		global $db;
		$query = "SELECT * FROM users WHERE id=" . $id;
		$result = mysqli_query($db, $query);

		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	// LOGIN USER
	function login(){
		global $db, $id_number, $errors;

		// grap form values
		$id_number = e($_POST['id_number']);
		$password = e($_POST['password']);

		// make sure form is filled properly
		if (empty($id_number)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		// attempt login if no errors on form
		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE id_number='$id_number' AND password='$password' AND activation_status='activated' LIMIT 1";
			$results = mysqli_query($db, $query);

			// user found
			if (mysqli_num_rows($results) == 1) {
				// check if user is super-admin, admin or user
				$logged_in_user = mysqli_fetch_assoc($results);
				if ($logged_in_user['role'] == 'superadmin') {
						$_SESSION['user'] = $logged_in_user;
						$_SESSION['success']  = "You are now logged in";
						header('location: super-admin-modules/dashboard.php');
				}
				if ($logged_in_user['role'] == 'admin') {
						$_SESSION['user'] = $logged_in_user;
						$_SESSION['success']  = "You are now logged in";
						header('location: admin-modules/dashboard.php');
				}
				if ($logged_in_user['role'] == 'member') {
						$_SESSION['user'] = $logged_in_user;
						$_SESSION['success']  = "You are now logged in";
						header('location: client-modules/home.php');
				}
			}else {
						array_push($errors, "Invalid username/password");
			}
		}
	}

  //prevent unregistered user to access the page
	function isLoggedIn(){
		if (isset($_SESSION['user']) && $_SESSION['user']['role'] == 'member' ) {
			return true;
		}else{
			return false;
		}
	}

	function isAdmin(){
		if (isset($_SESSION['user']) && $_SESSION['user']['role'] == 'admin' ) {
			return true;
		}else{
			return false;
		}
	}

	function isSuperAdmin(){
		if (isset($_SESSION['user']) && $_SESSION['user']['role'] == 'superadmin' ) {
			return true;
		}else{
			return false;
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
