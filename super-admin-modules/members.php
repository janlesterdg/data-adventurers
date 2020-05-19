<?php
include "header.php";
 ?>

 <div class="list-group list-group-flush">
   <a href="dashboard.php" class="list-group-item list-group-item-action waves-effect">
     <i class="fas fa-chart-pie mr-3"></i>Dashboard</a>
   <a href="members.php" class="list-group-item list-group-item-action active waves-effect">
     <i class="fas fa-users-cog mr-3"></i>User Management</a>
   <a href="page-information.php" class="list-group-item list-group-item-action waves-effect">
     <i class="fas fa-table mr-3"></i>Page Information</a>
   <a href="user-registration.php" class="list-group-item list-group-item-action waves-effect">
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
          <span>Manage Users</span>
        </h4>

    </div>


        <div class="btn-group btn-group-toggle" data-toggle="buttons">
          <button class="btn btn-primary active"  onclick="window.location.href = 'members.php'">
            Members
          </button>
          <button class="btn btn-primary"  onclick="window.location.href = 'admins.php'">
            Admins
          </button>
        </div>
      <br>
      <br>
      <br>

            <form class="form1" method="post">
            <?php
            $result=mysqli_query($link, "select * from users where role='member'");
              echo "<table class='table table-striped table-bordered mydatatable'  cellspacing='0' style='width: 100%'>";
              echo  "<thead>";
              echo  "<tr>";
              echo  "<th>"; echo "<input type='checkbox' class='select-all'/>"; echo "</th>";
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
              echo  "<th>"; echo "Activate"; echo "</th>";
              echo  "<th>"; echo "Deactivate"; echo "</th>";
              echo  "</tr>";
              echo "</thead>";

              echo "<tbody>";
              while($row=mysqli_fetch_array($result))
              {
                ?>

                  <tr>
                    <td><input type="checkbox" id="select-all" value="<?=$row['id']?>" name="id[]"></td>
                    <td><?= $row["first_name"]; ?></td>
                    <td><?= $row["last_name"]; ?> </td>
                    <td><?= $row["middle_initial"]; ?></td>
                    <td><?= $row["id_number"]; ?></td>
                    <td><?= $row["Birthdate"]; ?></td>
                    <td><?= $row["course"]; ?></td>
                    <td><?= $row["Year"]; ?></td>
                    <td><?= $row["contact_num"]; ?></td>
                    <td><?= $row["email_add"]; ?></td>
                    <td><?= $row["activation_status"]; ?></td>
                    <td><button class="btn btn-primary btn-sm"  onclick="window.location.href =
                                  'members-activate.php?id=<?php echo $row["id"]; ?>'">
                                   Activate</button> </td>
                  <td> <button class="btn btn-dark btn-sm" onclick="window.location.href =
                                  'members-deactivate.php?id=<?php echo $row["id"]; ?>'">
                                   Deactivate</button> <?php echo "</td>";



                }
              echo "</tbody>";
              echo "</table>";
              ?>
              <div class="d-flex justify-content-center">
                <input type="submit" name="activate" value="activate" onclick="return confirm('Are you sure
                you want to activate the selected accounts?')" class="btn btn-primary">
                <input type="submit" name="deactivate" value="deactivate" onclick="return confirm('Are you sure
                you want to activate the selected accounts?')" class="btn btn-dark">
              </div>
            </form>
            </div>
  </div>
</main>
<!--Main layout-->

<?php
  if(isset($_POST['activate'])){
    if(isset($_POST['id'])){
      foreach($_POST['id'] as $id){
        mysqli_query($link, "update users set activation_status='activated' where id=$id");
      }
    }
     ?><script> location.replace("members.php"); </script>
<?php  }
  if(isset($_POST['deactivate'])){
    if(isset($_POST['id'])){
      foreach($_POST['id'] as $id){
        mysqli_query($link, "update users set activation_status='deactivated' where id=$id");
      }
    }
    ?> <script> location.replace("members.php"); </script> <?php
  }


 ?>


  <?php
  include "footer.php";
  ?>
