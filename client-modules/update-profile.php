<?php
$connection = mysqli_connect("localhost", "root", "");
mysqli_select_db($connection, 'dataadventurers');

if (isset($_POST['update'])){
  $id = '';
  if (isset($_SESSION['user']['id'])){
  $id = $_SESSION['user']['id'];}

  $first = $_POST['first'];
  $last = $_POST['last'];
  $middle = $_POST['middle'];


  $email = $_POST['email'];
  $Birthdate = $_POST['Birthdate'];
  $contact = $_POST['contact'];


  $sql = "UPDATE users SET id=$id,
    first_name='$first',
    last_name='$last',
    middle_initial='$middle',
    email='$email',
    Birthdate='$Birthdate',
    contact='$contact'

    WHERE id = '$id'";

    //Execute the $query
    if(mysqli_query($connection, $sql)){
        header("refresh:1; url=profile.php");
    }
    else {
      echo "Not Updated";
    }
  }

 ?>
