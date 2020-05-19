<?php
include "connection.php";
$id=$_GET["id"];
mysqli_query($link, "DELETE FROM `memo` WHERE `id`");
unlink("memo-uploads/".$file_name);
?>
<script type="text/javascript">
  window.location="memo.php";
</script>