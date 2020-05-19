<?php
include "functions.php";
$id=$_GET["id"];
$query = "select * from activities where id = $id";

if(count(fetchAll($query)) > 0) {
  foreach(fetchAll($query) as $row) {
    $title = $row['title'];
    $details = $row['details'];
    $date = $row['date'];
    $time = $row['time'];
    $place= $row['place'];


    $query = "INSERT INTO act_archive(title, details, date, time, place)
              values ('$title', '$details', '$date', '$time', '$place');";

  }

  $query .= "DELETE FROM activities WHERE id = $id;";
  if(performQuery($query)){
    echo '<script type="text/javascript"> alert ("Activity has been archived!")</script>';

  }else{
    echo "Error occured";
  }
}else{
  echo "Error occured.";
}



?>

<script type="text/javascript">
  window.location="activities.php";
</script>
