<?php
include "connection.php";
include "header.php";
 ?>

 <div class="list-group list-group-flush">
   <a href="home.php" class="list-group-item list-group-item-action waves-effect">
     <i class="fas fa-home mr-3"></i>Home</a>
   <a href="memo.php" class="list-group-item list-group-item-action active waves-effect">
     <i class="fas fa-sticky-note mr-3"></i>Memo</a>
   <a href="polls.php" class="list-group-item list-group-item-action waves-effect">
     <i class="fas fa-poll mr-3"></i>Polls</a>
   <a href="activities.php" class="list-group-item list-group-item-action waves-effect">
     <i class="fas fa-snowboarding mr-3"></i>Activities</a>
   <a href="profile.php" class="list-group-item list-group-item-action waves-effect">
     <i class="fas fa-user-circle mr-3"></i>Profile</a>
   <a href="about.php" class="list-group-item list-group-item-action waves-effect">
     <i class="fas fa-info-circle mr-3"></i>About Us</a>
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
            <span>Memos</span>
          </h4>

      </div>




        <?php
        $result=mysqli_query($link, "SELECT * from memo order by id DESC");
          echo "<table class='table table-borderless'  cellspacing='0' style='width: 100%'>";
          echo  "<thead>";
          echo  "<tr>";
          echo  "<th>";

          echo "</th>";
          echo  "</tr>";
          echo "</thead>";

          echo "<tbody>";
          while($row=mysqli_fetch_array($result))
          {

              echo "<tr>";
              echo "<td>";


          ?>



                          <!-- Jumbotron -->
              <div class="jumbotron text-center" style="background-color: #d7c1e3;">

                <!-- Title -->
                <h4 class="card-title h4 pb-2" style='font-weight:bold; color:#2e0066'><strong><?php echo $row['title'];?></strong></h4>
                <!-- Card image -->
                <div class="d-flex justify-content-center ">
                  <?php
                 echo " <img src='../super-admin-modules/memo-uploads/".$row['file_name']."' style='width: 800px; height: 1000px;'>";
                    ?>
                </div>
                <br>
                <br>
                <h6><?php echo $row['uploaded_on'];?></h6>


              <!-- Jumbotron -->

              <?php
              echo "</div>";
              echo "</td>";
              echo "</tr>";



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
