<?php
include "header.php";
 ?>

 <div class="list-group list-group-flush">
   <a href="dashboard.php" class="list-group-item list-group-item-action waves-effect">
     <i class="fas fa-chart-pie mr-3"></i>Dashboard</a>
   <a href="members.php" class="list-group-item list-group-item-action waves-effect">
     <i class="fas fa-users-cog mr-3"></i>User Management</a>
   <a href="page-information.php" class="list-group-item list-group-item-action active waves-effect">
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
          <span>Page Information</span>
        </h4>

    </div>

      <div class="card">
        <br>
        <br>


    <div class="container">

      <?php

            $result=mysqli_query($link, "select * from page_info");
            $row=mysqli_fetch_array($result);
            ?>
    <div class="form-sec">
      <div class="text-center">
        <img src=" <?php echo $row['image']; ?>" height="300" width="300" class="avatar img-thumbnail" alt="avatar">
        <br>
          <a href="update-page-information.php">Change logo</a>
      </div>
      <br>
      <br>


<?php

        echo "<div class='form-group'>";
        echo "<div class='text-center'>";
        echo "<h3 style='color: #712d8c; font-weight: bold';> About</h3>";
        echo "</div>";
        echo "<div class='container'>";
        echo $row["about"];
        echo "</div>";
        echo "</div>";
        echo "<br>";

        echo "<div class='form-group'>";
        echo "<div class='text-center'>";
        echo "<h3 style='color: #712d8c; font-weight: bold';>Mission</h3>";
        echo "</div>";
        echo "<div class='container'>";
        echo  $row["mission"];
        echo "</div>";
        echo "</div>";
        echo "<br>";

        echo "<div class='form-group'>";
        echo "<div class='text-center'>";
        echo "<h3 style='color: #712d8c; font-weight: bold';> Vision</h3>";
        echo "</div>";
        echo "<div class='container'>";
        echo  $row["vision"];
        echo "</div>";
        echo "</div>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";

        echo "<div class='form-group'>";
        echo "<h5 style='font-weight: bold';>Address</h5>";
        echo  $row["address"];
        echo "</div>";


    	  echo "<div class='form-group'>";
        echo "<h5 style='font-weight: bold';>Contact No:</h5>";
        echo  $row["contact"];
        echo "</div>";

    	  echo "<div class='form-group'>";
        echo "<h5 style='font-weight: bold';>Email</h5>";
        echo  $row["email"];
        echo "</div>";
        echo "<br>";
        echo "<br>";
        echo "<br>";

?>
      <div class="text-center">
        <a href="update-page-information.php">Update Page Information</a>
        <br>
        <br>
        <br>
      </div>



      </div>


    </div>






  </div>
</main>
<!--Main layout-->


  <?php
  include "footer.php";
  ?>
