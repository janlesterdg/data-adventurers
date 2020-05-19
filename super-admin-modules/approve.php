<?php
include "functions.php";
$id=$_GET["id"];
$query = "select * from requests where id = $id";

if(count(fetchAll($query)) > 0) {
  foreach(fetchAll($query) as $row) {
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    $middle_initial = $row['middle_initial'];
    $id_number = $row['id_number'];
    $email_add = $row['email_add'];
    $password = $row['password'];
    $cpassword = $row['cpassword'];
    $Birthdate = $row['Birthdate'];
    $course = $row['course'];
    $Year = $row['Year'];
    $contact_num = $row['contact_num'];

    $query = "INSERT INTO users(id_number, first_name, last_name, middle_initial, email_add, password, cpassword, Birthdate, course, Year, contact_num)
              values ('$id_number', '$first_name', '$last_name', '$middle_initial', '$email_add', '$password', '$cpassword', '$Birthdate', '$course', '$Year', '$contact_num');";

  }

  $query .= "DELETE FROM requests WHERE id = $id;";
  if(performQuery($query)){
    echo "Account has been accepted";

  }else{
    echo "Error occured";
  }
}else{
  echo "Error occured.";
}



?>

<script type="text/javascript">
  window.location="user-registration.php";
</script>
