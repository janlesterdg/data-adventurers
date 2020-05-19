<?php
include "connection.php";
include "header.php";
 ?>

<?php
if (isset($_POST['update'])) {



mysqli_query($link, "UPDATE page_info SET about='$_POST[about]',
  mission='$_POST[mission]',
  vision = '$_POST[vision]',
  address = '$_POST[address]',
  contact= '$_POST[contact]',
  email = '$_POST[email]'
    ");
       header('location:page-information.php');

}


 ?>
 <?php
 if (isset($_POST['upload'])) {

   $tm =md5(time());
   $fnm=$_FILES["f1"]["name"];
   $dst="../img/".$tm.$fnm;
   $dst1="../img/".$tm.$fnm;



   move_uploaded_file($_FILES["f1"]["tmp_name"],$dst);
   mysqli_query($link, "UPDATE page_info SET   image='$dst1'");
     header('location:page-information.php');

 }

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

        <h4 class="mb-2 mb-sm-0 pt-1">
          <span>Page Information</span>
        </h4>

    </div>
      <div class="card">
        <br>
        <br>


    <div class="container">

    <div class="form-sec">

      <?php
      $result=mysqli_query($link, "select * from page_info");
      $row=mysqli_fetch_array($result);

       ?>



     <form name="qryform" id="qryform" method="post" enctype="multipart/form-data" action="">

       <div class="text-center">
      <img src=" <?php echo $row['image']; ?>" height="300" width="300" class="avatar img-thumbnail" alt="avatar">
        <br>
        <br>
        <div class="text-center">
         <input type="file" name="f1" class="text-center center-block file-upload"/>
         <br><br><br>
           <button type="submit" class="btn btn-default" name="upload">Upload</button>
       </div>
     </div>

        <div class="form-group">
          <h3 style='color: #712d8c; font-weight: bold';>About</h3>
            <textarea name="about" class="form-control" rows="5" cols="120"><?php echo $row['about']; ?></textarea>
        </div>
        <div class="form-group">
          <h3 style='color: #712d8c; font-weight: bold';>Mission</h3>
            <textarea name="mission" class="form-control" rows="7" cols="120"><?php echo $row['mission']; ?></textarea>
        </div>

        <div class="form-group">
          <h3 style='color: #712d8c; font-weight: bold';>Vision</h3>
            <textarea name="vision" class="form-control" rows="7" cols="120"><?php echo $row['vision']; ?></textarea>
        </div>
        <h3 style='color: #712d8c; font-weight: bold';>
        <div class="form-group">
            <h3 style='color: #712d8c; font-weight: bold';>Address</h3>
            <input type="text" class="form-control" id="address" placeholder="" value="<?php echo $row['address']; ?>" name="address">
          </div>

    	<div class="form-group">
          <h3 style='color: #712d8c; font-weight: bold';>Contact</h3>
          <input type="text" class="form-control" id="contact" placeholder="" value="<?php echo $row['contact']; ?>" name="contact">
        </div>

    	<div class="form-group">
          <h3 style='color: #712d8c; font-weight: bold';>Email</h3>
            <input type="text" class="form-control" id="email" placeholder="" value="<?php echo $row['email']; ?>" name="email">
        </div>

      <div class="float-right">
        <button type="submit" class="btn btn-default" name="update">Save</button>
        <br>
        <br>
        <br>
      </div>


      </form>
      </div>


    </div>






  </div>
</main>
<!--Main layout-->
?>

  <?php
  include "footer.php";
  ?>
