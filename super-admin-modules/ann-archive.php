<?php
include "functions.php";
$id=$_GET["id"];
$query = "select * from announcements where id = $id";

if(count(fetchAll($query)) > 0) {
  foreach(fetchAll($query) as $row) {
    $title = $row['title'];
    $content = $row['content'];
    $author = $row['author'];
    $date = $row['date'];


    $query = "INSERT INTO ann_archive(title, content, author, date)
              values ('$title', '$content', '$author', '$date');";

  }

  $query .= "DELETE FROM announcements WHERE id = $id;";
  if(performQuery($query)){
    echo '<script type="text/javascript"> alert ("Announcement has been archived!")</script>';

  }else{
    echo "Error occured";
  }
}else{
  echo "Error occured.";
}



?>

<script type="text/javascript">
  window.location="announcements.php";
</script>
