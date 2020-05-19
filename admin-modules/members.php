<?php
include "header.php";
 ?>

      <div class="list-group list-group-flush">
        <a href="dashboard.php" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-chart-pie mr-3"></i>Dashboard</a>
        <a href="members.php" class="list-group-item list-group-item-action active waves-effect">
          <i class="fas fa-users-cog mr-3"></i>Members</a>
        <a href="page-information.php" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-table mr-3"></i>Page Information</a>
        <a href="user-registration.php" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-users mr-3"></i>User Registration</a>
        <a href="announcements.php" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-bullhorn mr-3"></i>Announcements</a>
        <a href="activities.php" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-snowboarding mr-3"></i>Activities</a>
        <a href="memo.php" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-sticky-note mr-3"></i>Memo</a>
        <a href="polls.php" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-poll-h mr-3"></i>Polls</a>
        <a href="profile.php" class="list-group-item list-group-item-action waves-effect">
     <i class="fas fa-user-circle mr-3"></i>Profile</a>
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
          <span>Members</span>
        </h4>

    </div>



      <br>
      <br>
      <br>

            <?php
            $result=mysqli_query($link, "select * from users where role='member'");
              echo "<table class='table table-striped table-bordered mydatatable'  cellspacing='0' style='width: 100%'>";
              echo  "<thead>";
              echo  "<tr>";
              echo  "<th>"; echo "ID"; echo "</th>";
              echo  "<th>"; echo "First Name"; echo "</th>";
              echo  "<th>"; echo "Last Name"; echo "</th>";
              echo  "<th>"; echo "Middle Initial"; echo "</th>";
              echo  "<th>"; echo "ID Number"; echo "</th>";
              echo  "<th>"; echo "Birthdate"; echo "</th>";
              echo  "<th>"; echo "Course"; echo "</th>";
              echo  "<th>"; echo "Year"; echo "</th>";
              echo  "<th>"; echo "Contact No."; echo "</th>";
              echo  "<th>"; echo "Email Address"; echo "</th>";
              echo  "<th>"; echo "Activation Status"; echo "</th>";
              echo  "</tr>";
              echo "</thead>";

              echo "<tbody>";
              while($row=mysqli_fetch_array($result))
              {

                  echo "<tr>";
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
                  echo "<td>"; echo $row["activation_status"]; echo "</td>";




                }
              echo "</tbody>";
              echo "</table>";
              ?>
            </div>
  </div>
</main>
<!--Main layout-->
?>

  <?php
  include "footer.php";
  ?>
