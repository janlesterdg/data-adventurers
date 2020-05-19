<?php
include "connection.php";
include "header.php";
 ?>

 <?php

 $connection = mysqli_connect("localhost", "root", "");
 $db = mysqli_select_db($connection, 'dataadventurers');

   if(isset($_POST['add'])) {
     $id_number = $_POST['id_number'];
     $first_name = $_POST['first_name'];
     $last_name = $_POST['last_name'];
     $middle_initial = "";
     if(isset($_POST['middle_initial'])){
     $middle_initial = $_POST['middle_initial'];
   }
    $role = "";
   if(isset($_POST['role'])){
     $role = $_POST['role'];
   }
     $email_add = $_POST['email_add'];
     $password = $_POST['password'];;
     $Birthdate = $_POST['Birthdate'];
     $contact_num = $_POST['contact_num'];
     $query = "SELECT * FROM users WHERE email_add = '$email_add'";
     $query_run = mysqli_query($connection, $query);

     $query2 = "SELECT * FROM users WHERE id_number = '$id_number'";
     $query_run2 = mysqli_query($connection, $query2);

     if(mysqli_num_rows($query_run) > 0)
     {

       echo '<script type="text/javascript"> alert ("Email already exists!")</script>';


     } else if(mysqli_num_rows($query_run2) > 0) {

       echo '<script type="text/javascript"> alert ("ID Number already exists!")</script>';


     } else {

       $password = md5($password);
       $query = "INSERT INTO users(first_name, last_name, middle_initial, id_number, email_add, role, password, cpassword, Birthdate, course, Year, contact_num)
       values ('$first_name', '$last_name', '$middle_initial', '$id_number', '$email_add', '$role', '$password','$password','$Birthdate','','', '$contact_num');";
       $query_run = mysqli_query($connection, $query);

       if($query_run){

         echo '<script type="text/javascript"> alert ("User added!")</script>';

       } else {

         echo '<script type="text/javascript"> alert ("User not added!")</script>';
       }
}
   }
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
          <button class="btn btn-primary"  onclick="window.location.href = 'members.php'">
            Members
          </button>
          <button class="btn btn-primary active"  onclick="window.location.href = 'admins.php'">
            Admins
          </button>
        </div>
      <br>
      <br>
      <br>
      <div class="d-flex justify-content-center">
        <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Add User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="modal-body mx-3">
                <form action="admins.php" method="POST">
                <div class="md-form mb-5">
                  <input type="number"  class="form-control validate" required="" name="id_number" min="1000000" max="9999999"  oninvalid="this.setCustomValidity('Please enter seven digits')" oninput="setCustomValidity('')" placeholder="ID Number">
                </div>
                <div class="md-form mb-5">
                  <input type="text"  class="form-control validate" required="" minlength=2 pattern="[A-Za-z ]+" name="first_name" placeholder="First Name" oninvalid="this.setCustomValidity('Firstname is required. Only letters and white space allowed')" oninput="setCustomValidity('')">
                </div>

                <div class="md-form mb-4">
                  <input type="text"  class="form-control validate" required="" minlength=4 pattern="[A-Za-z ]+" name="last_name"  placeholder="Last Name" oninvalid="this.setCustomValidity('Lastname is required. Only letters and white space allowed')" oninput="setCustomValidity('')">
                </div>

                <div class="md-form mb-4">
                  <input type="text"  class="form-control validate" required="" name="middle_initial" maxlength=1 pattern="[A-Za-z]" oninvalid="this.setCustomValidity('Please enter only letters')" oninput="setCustomValidity('')" placeholder="Middle Initial">
                </div>


                <div  class="md-form mb-4">
                    <select name="role" class="form-control" required="" type="text">
                        <option value="1">admin</option>
                        <option value="2">superadmin</option>
                    </select>
                    <br>
                </div>

                <div class="md-form mb-4">
                  <input type="email" class="form-control validate" name="email_add" required="" placeholder="Email Address" required>
                </div>

                <div class="md-form mb-4">
                  <input type="password" class="form-control validate" minlength=6 name="password" required="" placeholder="Password" >
                </div>

                <div class="form-group">
                <label class="float-left" for="Birthdate">Birthdate</label>
                <input type="date" name="Birthdate"  required class="form-control">
                </div>

                <div class="md-form mb-4">
                  <input type="text"  class="form-control validate" name="contact_num" min="100000" placeholder="Contact no." required="" name="contact_num" placeholder="Contact No." >
                </div>

              </div>
              <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-deep-orange" name="add">Add User</button>
              </div>
            </div>
          </form>
          </div>
        </div>

        <div class="text-center">
        <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm">
        Add User +</a>
        </div>
       </div>


              <form class="form1" method="post">

            <?php
            $result=mysqli_query($link, "select * from users where role = 'admin' || role = 'superadmin'");
              echo "<table class='table table-striped table-bordered mydatatable'  cellspacing='0' style='width: 100%'>";
              echo  "<thead>";
              echo  "<tr>";
              echo  "<th>"; echo "<input type='checkbox' class='select-all'/>"; echo "</th>";
              echo  "<th>"; echo "ID Number"; echo "</th>";
              echo  "<th>"; echo "First Name"; echo "</th>";
              echo  "<th>"; echo "Last Name"; echo "</th>";
              echo  "<th>"; echo "Middle Initial"; echo "</th>";
              echo  "<th>"; echo "Role"; echo "</th>";
              echo  "<th>"; echo "Email Address"; echo "</th>";
              echo  "<th>"; echo "Password"; echo "</th>";
              echo  "<th>"; echo "Birthdate"; echo "</th>";
              echo  "<th>"; echo "Contact No."; echo "</th>";
              echo  "<th>"; echo "Activation Status"; echo "</th>";
              echo  "<th>"; echo "Activate"; echo "</th>";
              echo  "<th>"; echo "Deactivate"; echo "</th>";
              echo  "</tr>";
              echo "</thead>";

              echo "<tbody>";
              while($row=mysqli_fetch_array($result))
              {

                  echo "<tr>";?>
                  <td><input type="checkbox" id="select-all" value="<?=$row['id']?>" name="id[]"></td>
                  <?php
                  echo "<td>"; echo $row["id_number"]; echo "</td>";
                  echo "<td>"; echo $row["first_name"]; echo "</td>";
                  echo "<td>"; echo $row["last_name"]; echo "</td>";
                  echo "<td>"; echo $row["middle_initial"]; echo "</td>";
                  echo "<td>"; echo $row["role"]; echo "</td>";
                  echo "<td>"; echo $row["email_add"]; echo "</td>";

                  echo "<td>"; echo $row["password"]; echo "</td>";
                  echo "<td>"; echo $row["Birthdate"]; echo "</td>";
                  echo "<td>"; echo $row["contact_num"]; echo "</td>";
                  echo "<td>"; echo $row["activation_status"]; echo "</td>";
                  echo "<td>"; ?> <button class="btn btn-primary btn-sm"  onclick="window.location.href =
                                  'admins-activate.php?id=<?php echo $row["id"]; ?>'">
                                   Activate</button> <?php echo "</td>";
                  echo "<td>"; ?> <button class="btn btn-dark btn-sm" onclick="window.location.href =
                                  'admins-deactivate.php?id=<?php echo $row["id"]; ?>'">
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
     ?><script> location.replace("admins.php"); </script>
<?php  }
  if(isset($_POST['deactivate'])){
    if(isset($_POST['id'])){
      foreach($_POST['id'] as $id){
        mysqli_query($link, "update users set activation_status='deactivated' where id=$id");
      }
    }
    ?> <script> location.replace("admins.php"); </script> <?php
  }


 ?>

  <?php
  include "footer.php";
  ?>
