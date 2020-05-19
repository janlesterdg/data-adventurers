<?php
include "connection.php";
$id=$_GET["actID"];
mysqli_query($link, "DELETE FROM `activities` WHERE `actID`");
unlink("activities-uploads/".$fileName);
?>
<script type="text/javascript">
  window.location="activities.php";
</script>