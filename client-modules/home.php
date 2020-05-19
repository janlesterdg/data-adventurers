<?php
include "header.php";
 ?>

<?php

$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'dataadventurers');

   if(isset($_POST['add'])) {
     $title = $_POST['title'];
     $content = $_POST['content'];
     $author = $_SESSION['user'];



       $query = "INSERT INTO announcements(title, content, author, date) values ('$title', '$content', '$author', CURRENT_TIMESTAMP);";
       $query_run = mysqli_query($connection, $query);

       if($query_run){

         echo '<script type="text/javascript"> alert ("Announcement added!")</script>';

       } else {

         echo '<script type="text/javascript"> alert ("Annoucement not added")</script>';
       }

   }




 ?>
   <div class="list-group list-group-flush">
     <a href="home.php" class="list-group-item list-group-item-action active waves-effect">
       <i class="fas fa-home mr-3"></i>Home</a>
     <a href="memo.php" class="list-group-item list-group-item-action waves-effect">
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
          <span>Hello, <?php echo $_SESSION ['user']['first_name'] ?> !</span>
        </h4>
      </div>

            <?php
            $result=mysqli_query($link, "SELECT * from announcements order by id DESC");
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
                  echo " <div class='col-lg-9'>";
                  echo "<div class='card flex-md-row mb-4 shadow-sm h-md-250' style='background-color:#d7c1e3;'>";
                  echo "<div class='card-body d-flex flex-column align-items-start'>";
                  echo "<h3 class='mb-0' style='font-weight:bold; color:#2e0066'>";
                  echo $row["title"];
                  echo "</h3>";
                  echo "<div class='mb-1 text-muted'>";
                  echo $row["date"];
                  echo "</div>";
                  echo "<p>";
                  echo $row["content"];
                  echo "<h5 style='font-weight:bold; color: #2e0066'>";
                  echo "Author:";
                  echo "<br>";
                  echo $row["author"];   echo "</h5";


                  echo "</div>";




                  echo "</div>";
                  echo "</div>";


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


  <?php
  include "footer.php";
  ?>
