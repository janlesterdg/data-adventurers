<?php
include "functions.php";
$id = $_GET['id'];

$query = "DELETE FROM requests WHERE requests.id = $id;";
if(performQuery($query)){
  echo "Account has been declined";

}else{
  echo "Error occured";
}
?>

<script type="text/javascript">
  window.location="user-registration.php";
</script>
