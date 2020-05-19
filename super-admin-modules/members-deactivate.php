<?php
include "connection.php";
$id=$_GET["id"];
mysqli_query($link, "update users set activation_status='deactivated' where id=$id");
?>


<script type="text/javascript">
  window.location="members.php";
</script>
