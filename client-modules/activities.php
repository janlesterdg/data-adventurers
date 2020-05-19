<?php
include "connection.php";
include "header.php";
 ?>

   <!--a class="logo-wrapper waves-effect"-->
           <!--img src="../img/logo.png" class="img-fluid" alt="">
        </a-->

         <div class="list-group list-group-flush">
           <a href="home.php" class="list-group-item list-group-item-action waves-effect">
             <i class="fas fa-home mr-3"></i>Home
           </a>
           <a href="memo.php" class="list-group-item list-group-item-action waves-effect">
             <i class="fas fa-sticky-note mr-3"></i>Memo</a>
           <a href="polls.php" class="list-group-item list-group-item-action waves-effect">
             <i class="fas fa-poll mr-3"></i>Polls</a>
           <a href="activities.php" class="list-group-item list-group-item-action active waves-effect">
             <i class="fas fa-snowboarding mr-3"></i>Activities</a>
           <a href="profile.php" class="list-group-item list-group-item-action waves-effect">
             <i class="fas fa-user-circle mr-3"></i>Profile</a>
           <a href="about.php" class="list-group-item list-group-item-action waves-effect ">
             <i class="fas fa-info-circle mr-3"></i>About Us</a>
         </div>
              </div>

            </div>
    <!-- Sidebar -->

  </header>
  <!--Main Navigation-->

  <!--Main layout-->
<main class="pt-5 mx-lg-6">
    <div class="container-fluid mt-5">

      <div class="page-title">

          <h4 class="mb-2 mb-sm-0 pt-1">
            <span>Actvities</span>
          </h4>

      </div>


         <?php

         $connection = mysqli_connect("localhost", "root", "");
         $db = mysqli_select_db($connection, 'dataadventurers');

            if(isset($_POST['submit-act'])) {
              $title = $_POST['title'];
              $details  = $_POST['details'];
              $date = $_POST['date'];
              $time = $_POST['time'];
              $place = $_POST['place'];


                $query = "INSERT INTO activities(title, details, date, time, place) values ('$title', '$details', '$date', '$time', '$place');";
                $query_run = mysqli_query($connection, $query);

                if($query_run){

                  echo '<script type="text/javascript"> alert ("Activity added!")</script>';

                } else {

                  echo '<script type="text/javascript"> alert ("Acitivity not added")</script>';
                }

            }




          ?>

          <?php
          $result=mysqli_query($link, "SELECT * from activities order by id DESC");
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
                echo  "<div class='d-flex justify-content-center'>";
                echo " <div class='col-md-6'>";
                echo "<div class='card flex-md-row mb-4 shadow-sm h-md-250' style='background-color:#b80d65;'>";
                echo "<div class='card-body d-flex flex-column align-items-start'>";
                echo "<h1 class='mb-0' style='font-weight:bold; color:white'>";
                echo $row["title"];
                echo "</h1>";
                echo "<h3 style='color:white'>";
                echo $row["details"];
                  echo "</h3>";
                        echo "<br>";
                echo "<h5 class='mb-0' style='font-weight:bold; color:white'>";
                echo "Date:";
                echo "<span>"; echo $row["date"];   echo "</span>";
                echo "</h5>";
                echo "<h5 class='mb-0' style='font-weight:bold; color:white'>";
                echo "Time:";
                echo "<a>"; echo $row["time"];   echo "</a>";
                echo "</h5>";
                echo "<h5 class='mb-0' style='font-weight:bold; color:white'>";
                echo "Place:";
                echo "<a>"; echo $row["place"];   echo "</a>";
                echo "</h5>";






                echo "</div>";

                echo "</div>";?>
                <div class="text-center">

                <button class="btn btn-success" onclick="window.location.href =
                               'delete-act.php?id=<?php echo $row["id"]; ?>'">
                                Join</button>
                </div>
                <?php
                echo "</div>";
                echo "</td>";
                echo "</tr>";



             }
            echo "</tbody>";
            echo "</table>";
            ?>
          </div>

        <br>



  </div>
</main>

<!--Main layout-->


  <?php
  include "footer.php";
  ?>
