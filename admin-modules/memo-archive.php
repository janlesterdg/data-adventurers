<?php
include "functions.php";
$id=$_GET["id"];
$query = "select * from memo where id = $id";

if(count(fetchAll($query)) > 0) {
  foreach(fetchAll($query) as $row) {
    $title = $row['title'];
    $file_name = $row['file_name'];
    $uploaded_on = $row['uploaded_on'];



    $query = "INSERT INTO memo_archive(title, file_name, uploaded_on)
              values ('$title', '$file_name', '$uploaded_on');";

  }

  $query .= "DELETE FROM memo WHERE id = $id;";
  if(performQuery($query)){
   echo '<script type="text/javascript"> alert ("Memo has been archived!")</script>';

  }else{
    echo "Error occured";
  }
}else{
  echo "Error occured.";
}



?>

<script type="text/javascript">
  window.location="memo.php";
</script>
