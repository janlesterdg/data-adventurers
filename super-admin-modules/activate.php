<?php
include "connection.php";
$reg_id=$_GET["reg_id"];
mysqli_query($link, "update member_registration set activation_status='activated' where reg_id=$reg_id");
?>


<script type="text/javascript">
  window.location="user-management.php";

</script>
