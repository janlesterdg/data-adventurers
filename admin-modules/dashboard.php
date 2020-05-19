<?php
include "header.php"
 ?>


      <div class="list-group list-group-flush">
        <a href="dashboard.php" class="list-group-item list-group-item-action active waves-effect">
          <i class="fas fa-chart-pie mr-3"></i>Dashboard</a>
        <a href="members.php" class="list-group-item list-group-item-action waves-effect">
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

  <?php
  $connection = mysqli_connect("localhost", "root", "");
  $db = mysqli_select_db($connection, 'dataadventurers');

  $query = "SELECT * FROM requests";
   $result = mysqli_query($connection, $query);

   $total_requests = mysqli_num_rows($result);


   $query1 = "SELECT * FROM users WHERE activation_status='activated' and role='member'";
    $result1 = mysqli_query($connection, $query1);

    $total_members = mysqli_num_rows($result1);

    $query2 = "SELECT * FROM users WHERE activation_status='activated' and role='admin'";
     $result2 = mysqli_query($connection, $query2);

     $total_admins = mysqli_num_rows($result2);

     $query3 = "SELECT * FROM announcements";
      $result3 = mysqli_query($connection, $query3);

      $total_ann= mysqli_num_rows($result3);

      $query4 = "SELECT * FROM memo";
       $result4 = mysqli_query($connection, $query4);

       $total_memo= mysqli_num_rows($result4);

       $query5 = "SELECT * FROM activities";
        $result5 = mysqli_query($connection, $query5);

        $total_act= mysqli_num_rows($result5);


   ?>
  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
      <div class="container-fluid mt-5">

    <div class="page-title">

      <br>
      <br>
        <h4 class="mb-2 mb-sm-0 pt-1">
          <span>Dashboard</span>
        </h4>
        <br>
        <br>

      <div class="card-deck">
        <a href="user-registration.php"><div class="card text-white bg-primary mb-3" style="width: 300px;">
        <div class="card-header">Registration Requests</div>
        <div class="card-body">
          <h5 class="card-title">Total Count: </h5>
          <h1><?php  echo $total_requests;  ?></h1>
        </div>
      </div> </a>

        <a href="members.php">
        <div class="card text-white bg-secondary mb-3" style="width: 300px;">
          <div class="card-header">Members</div>
          <div class="card-body">
            <h5 class="card-title">Total Count:</h5>
            <h1><?php echo $total_members; ?></h1>
          </div>
        </div></a>


        <div class="card text-white bg-warning mb-3" style="max-width: 20rem;">
        <div class="card-header">Admins</div>
        <div class="card-body">
          <h5 class="card-title">Total Count:</h5>
          <h1><?php echo $total_admins; ?></h1>
        </div>
      </div>

        <a href="announcements.php">
      <div class="card text-white bg-success mb-3" style="width: 300px;">
        <div class="card-header">Announcements</div>
        <div class="card-body">
          <h5 class="card-title">Total Count:</h5>
          <h1><?php echo $total_ann; ?></h1>
        </div>

      </div>
    </a>
    </div>
    </div>
      <div class="card-deck">

  <a href="memo.php">
    <div class="card text-white bg-danger mb-3" style="width: 300px;">
    <div class="card-header">Memos</div>
    <div class="card-body">
      <h5 class="card-title">Total Count:</h5>
      <h1><?php echo $total_memo; ?></h1>
    </div>
  </div>
</a>


  <a href="activities.php">
  <div class="card text-white bg-info mb-3" style="width: 300px;">
  <div class="card-header">Activities</div>
  <div class="card-body">
    <h5 class="card-title">Total Count:</h5>
    <h1><?php echo $total_act; ?></h1>
  </div>
</div>
</a>

</div>
</div>
    </div>
  </main>
  <!--Main layout-->



<?php include "footer.php" ?>
