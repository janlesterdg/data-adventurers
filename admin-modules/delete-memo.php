<?php
include "functions.php";
$id = $_GET['id'];

$query = "DELETE FROM memo WHERE memo.id = $id;";
if(performQuery($query)){
   echo '<script type="text/javascript"> alert ("Successfully deleted!")</script>';

}else{
  echo "Error occured";
}
?>



<script type="text/javascript">
  window.location="memo.php";
</script>
