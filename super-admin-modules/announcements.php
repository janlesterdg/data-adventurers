<?php
include "connection.php";
include "header.php";
 ?>

 <?php

      if (isset($_POST['add'])) {
          # code...
        require 'phpmailer/PHPMailerAutoLoad.php';

      // Instantiation and passing `true` enables exceptions
      $mail = new PHPMailer(true);

          //Server settings
          $mail->SMTPDebug = 4;                      // Enable verbose debug output
          $mail->isSMTP();                                            // Send using SMTP
          $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
          $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
          $mail->Username   = 'dataadventurer@gmail.com';                     // SMTP username
          $mail->Password   = 'd@t@12345';                               // SMTP password
          $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
          $mail->Port       = 587;                                    // TCP port to connect to
          $mail->setFrom('dataadventurer@gmail.com', 'Data Adventurer');
          $mail->addAddress('dataadventurer@gmail.com', 'Lestie User');     // Add a recipient
          //$mail->addAddress('ellen@example.com');               // Name is optional
          $mail->addReplyTo('dataadventurer@gmail.com', 'Data Adventurer');
          // Content
          $mail->isHTML(true);                                  // Set email format to HTML
          $mail->Subject = 'New Announcement Posted';
          $mail->Body    = 'New Announcement Posted';
          $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

      if (!$mail->send()) {
          echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      }else{
          echo '<script type="text/javascript">'; 
          echo 'alert("Announcement added!. Thank You!");'; 
          echo 'window.location.href = "announcements.php";';
          echo '</script>';
      }
      }
?>

<?php

$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'dataadventurers');

   if(isset($_POST['add'])) {
     $title = $_POST['title'];
     $content = $_POST['content'];
     $author = $_SESSION['user']['first_name'];



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
        <a href="dashboard.php" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-chart-pie mr-3"></i>Dashboard</a>
        <a href="members.php" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-users-cog mr-3"></i>User Management</a>
        <a href="page-information.php" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-table mr-3"></i>Page Information</a>
        <a href="user-registration.php" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-users mr-3"></i>User Registration</a>
        <a href="announcements.php" class="list-group-item active waves-effect">
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
          <span>Announcements</span>
        </h4>

    </div>

        <div class="d-flex justify-content-center">
          <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
              aria-hidden="true">
              <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header text-center">
                  <h4 class="modal-title w-100 font-weight-bold">Add Annoucement</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body mx-3">
                  <form action="announcements.php" method="POST">
                  <div class="form-group">
                    <input type="text"  class="form-control validate" name="title" placeholder="Title" required>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" rows="7" name="content" placeholder="Content" required></textarea>
                  </div>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                  <button class="btn btn-primary" name="add">Add Annoucement</button>
                </div>
              </div>
            </form>
            </div>
          </div>

          <div class="text-center">
          <a href="" class="btn btn-primary btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm">
          Add Annoucement +</a>
          </div>
         </div>





      <br>

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
                echo "<div class='card flex-md-row mb-4 shadow-sm h-md-250' style='background-color:#f7eec3;'>";
                echo "<div class='card-body d-flex flex-column align-items-start'>";
                echo "<h3 class='mb-0' style='font-weight:bold; color:#4a000a'>";
                echo $row["title"];
                echo "</h3>";
                echo "<div class='mb-1 text-muted'>";
                echo $row["date"];
                echo "</div>";
                echo "<p>";
                echo $row["content"];
                echo "<h5  style='font-weight:bold; color:#4a000a'>";
                echo "Author:";
                echo "<br>";
                echo $row["author"];
                echo "</h5";



                  echo "</div>";




                  echo "</div>";
                  echo "</div>";?>
                  <div class="float-right">

                  <button class="btn btn-info btn-sm" onclick="window.location.href =
                                 'ann-archive.php?id=<?php echo $row["id"]; ?>'">
                                  Archive</button>
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
  </div>
</main>
<!--Main layout-->


  <?php
  include "footer.php";
  ?>
