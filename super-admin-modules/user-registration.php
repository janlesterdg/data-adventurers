<?php
include "header.php";
include "functions.php";
 ?>





 <div class="list-group list-group-flush">
   <a href="dashboard.php" class="list-group-item list-group-item-action waves-effect">
     <i class="fas fa-chart-pie mr-3"></i>Dashboard</a>
   <a href="members.php" class="list-group-item list-group-item-action waves-effect">
     <i class="fas fa-users-cog mr-3"></i>User Management</a>
   <a href="page-information.php" class="list-group-item list-group-item-action waves-effect">
     <i class="fas fa-table mr-3"></i>Page Information</a>
   <a href="user-registration.php" class="list-group-item list-group-item-action active waves-effect">
     <i class="fas fa-users mr-3"></i>User Registration</a>
   <a href="announcements.php" class="list-group-item list-group-item-action  waves-effect">
     <i class="fas fa-bullhorn mr-3"></i>Announcements</a>
   <a href="activities.php" class="list-group-item list-group-item-action waves-effect">
     <i class="fas fa-snowboarding mr-3"></i>Activities</a>
   <a href="memo.php" class="list-group-item list-group-item-action waves-effect">
     <i class="fas fa-sticky-note mr-3"></i>Memo</a>
   <a href="polls.php" class="list-group-item list-group-item-action waves-effect">
     <i class="fas fa-poll-h mr-3"></i>Polls</a>
   <a href="profile.php" class="list-group-item list-group-item-action waves-effect">
     <i class="fas fa-user-circle mr-3"></i>Profile</a>
   <a href="settings.php" class="list-group-item list-group-item-action waves-effect">
     <i class="fas fa-tools mr-3"></i>Settings</a>
 </div>

    </div>
    <!-- Sidebar -->

  </header>
  <!--Main Navigation-->

  <!--Main layout-->
<main class="pt-5 mx-lg-6">
  <div class="container-fluid mt-5">

    <div class="page-title">
      <br>
      <br>
        <h4 class="mb-2 mb-sm-0 pt-1">
          <span>User Registration</span>
        </h4>

    </div>

            <form class="form1" method="post">
            <?php

            $result=mysqli_query($link, "select * from requests");
              echo "<table class='table table-striped table-bordered mydatatable'  cellspacing='0' style='width: 100%'>";
              echo  "<thead>";
              echo  "<tr>";
              echo  "<th>"; echo "<input type='checkbox' class='select-all'/>"; echo "</th>";
              echo  "<th>"; echo "Registration ID"; echo "</th>";
              echo  "<th>"; echo "First Name"; echo "</th>";
              echo  "<th>"; echo "Last Name"; echo "</th>";
              echo  "<th>"; echo "Middle Initial"; echo "</th>";
              echo  "<th>"; echo "ID Number"; echo "</th>";
              echo  "<th>"; echo "Birthdate"; echo "</th>";
              echo  "<th>"; echo "Course"; echo "</th>";
              echo  "<th>"; echo "Year"; echo "</th>";
              echo  "<th>"; echo "Contact No."; echo "</th>";
              echo  "<th>"; echo "Email Address"; echo "</th>";
              echo  "<th>"; echo "Date"; echo "</th>";
              echo  "<th>"; echo "Approve"; echo "</th>";
              echo  "<th>"; echo "Decline"; echo "</th>";
              echo  "</tr>";
              echo "</thead>";

              echo "<tbody>";
              while($row=mysqli_fetch_array($result))
              {

                  echo "<tr>";?>
                 <td><input type="checkbox" id="select-all" value="<?=$row['id']?>" name="id[]"></td>
                  <?php
                  echo "<td>"; echo $row["id"]; echo "</td>";
                  echo "<td>"; echo $row["first_name"]; echo "</td>";
                  echo "<td>"; echo $row["last_name"]; echo "</td>";
                  echo "<td>"; echo $row["middle_initial"]; echo "</td>";
                  echo "<td>"; echo $row["id_number"]; echo "</td>";
                  echo "<td>"; echo $row["Birthdate"]; echo "</td>";
                  echo "<td>"; echo $row["course"]; echo "</td>";
                  echo "<td>"; echo $row["Year"]; echo "</td>";
                  echo "<td>"; echo $row["contact_num"]; echo "</td>";
                  echo "<td>"; echo $row["email_add"]; echo "</td>";
                  echo "<td>"; echo $row["date"]; echo "</td>";
                  echo "<td>"; ?> <button class="btn btn-primary btn-sm" data-toggle="button" aria-pressed="false" autocomplete="off" onclick="window.location.href =
                                  'approve.php?id=<?php echo $row["id"]; ?>'">
                                   Approve</button> <?php echo "</td>";
                  echo "<td>"; ?> <button class="btn btn-dark btn-sm" onclick="window.location.href =
                                  'decline.php?id=<?php echo $row["id"]; ?>'">
                                   Decline</button> <?php echo "</td>";



                }
              echo "</tbody>";
              echo "</table>";
              ?>
              <div class="d-flex justify-content-center">
                <input type="submit" name="aprrove" value="approve"  class="btn btn-primary">
                <input type="submit" name="decline" value="decline" class="btn btn-dark">
              </div>
            </form>
            </div>
  </div>
</main>
<!--Main layout-->
<?php

    $query = "select * from requests";
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

  if(isset($_POST['approve'])){
    if(isset($_POST['id'])){
      foreach($_POST['id'] as $id){

            $query = "INSERT INTO users(id_number, first_name, last_name, middle_initial, email_add, password, cpassword, Birthdate, course, Year, contact_num)
                      values ('$id_number', '$first_name', '$last_name', '$middle_initial', '$email_add', '$password', '$cpassword', '$Birthdate', '$course', '$Year', '$contact_num');";


          $query .= "DELETE FROM requests WHERE id = $id;";


      } }

     ?><script> location.replace("user-registration.php"); </script>
<?php  }
  if(isset($_POST['decline'])){
    if(isset($_POST['id'])){
      foreach($_POST['id'] as $id){
        mysqli_query($link, "delete from requests WHERE requests.id = $id");
      }
    }
    ?> <script> location.replace("user-registration.php"); </script> <?php
  }


 ?>

  <?php
  include "footer.php";
  ?>
