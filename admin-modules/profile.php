<?php
include "connection.php";
include "header.php";


 ?>


      <div class="list-group list-group-flush">
        <a href="dashboard.php" class="list-group-item list-group-item-action waves-effect">
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
        <a href="profile.php" class="list-group-item list-group-item-action active waves-effect">
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
          <span>Edit Profile</span>
        </h4>

    </div>

    <?php

    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, 'dataadventurers');



         $id_number = $_SESSION['user']['id_number'];
         $first_name = $_SESSION['user']['first_name'];
         $last_name = $_SESSION['user']['last_name'];
         $middle_initial = $_SESSION['user']['middle_initial'];
         $role = $_SESSION['user']['role'];
         $email = $_SESSION['user']['email_add'];
         $password = $_SESSION['user']['password'];
         $Birthdate = $_SESSION['user']['Birthdate'];
         $contact = $_SESSION['user']['contact_num'];


     ?>

     <?php
     if (isset($_POST['update'])){
       $id = '';
       if (isset($_SESSION['user']['id'])){
       $id = $_SESSION['user']['id'];}

       $first = $_POST['first'];
       $last = $_POST['last'];
       $middle = $_POST['middle'];

       if (isset($POST['role'])) {
       $role = $_POST['role']; }

       $email = $_POST['email'];
       $newpass = $_POST['newpass'];
       $cnewpass = $_POST['cnewpass'];
       $Birthdate = $_POST['Birthdate'];
       $contact = $_POST['contact'];


       mysqli_query($link, "UPDATE users SET id=$id,
         first_name='$first',
         last_name='$last',
         middle_initial='$middle',
         role='$role',
         email='$email',
         password='$newpass',
         cpassword='$cnewpass',
         Birthdate='$Birthdate',
         contact='$contact'

         WHERE id = '$id'
           ");



       }







      ?>



<div class="d-flex justify-content-center">
    <div class="col-md-9">
      <div class="card">
          <div class="card-body">
              <div class="row">
                  <div class="col-md-12">
                      <h4>Your Profile</h4>
                      <hr>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <form method="post">
                            <div class="form-group row">
                              <label for="id" class="col-4 col-form-label">ID Number</label>
                              <div class="col-8">
                                <input id="id" name="id" value="<?php echo $id_number; ?>" class="form-control here" required="required" type="text" disabled>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="first" class="col-4 col-form-label">First Name</label>
                              <div class="col-8">
                                <input id="first" name="first" value="<?php echo $first_name; ?>" class="form-control here" type="text">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="last" class="col-4 col-form-label">Last Name</label>
                              <div class="col-8">
                                <input id="last" name="last" value="<?php echo $last_name; ?>" class="form-control here" type="text">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="middle" class="col-4 col-form-label">Middle Initial</label>
                              <div class="col-8">
                                <input id="middle" name="middle" value="<?php echo $middle_initial; ?>" class="form-control here" required="required" type="text">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="role" class="col-4 col-form-label">Role</label>
                              <div class="col-8">
                                <input id="role" name="role" value="<?php echo $role; ?>" class="form-control here" required="required" type="text" disabled>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="email" class="col-4 col-form-label">Email Address</label>
                              <div class="col-8">
                                <input type= "email" id="email" name="email" value="<?php echo $email; ?>" class="form-control here" required="required">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="pass" class="col-4 col-form-label">Password</label>
                              <div class="col-8">
                                <input id="pass" name="pass" value="<?php echo $password; ?>" class="form-control here" type="password">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="newpass" class="col-4 col-form-label">New Password</label>
                              <div class="col-8">
                                <input id="newpass" name="newpass" value="New Password" class="form-control here" type="password">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="cnewpass" class="col-4 col-form-label">Confirm New Password</label>
                              <div class="col-8">
                                <input id="cnewpass" name="cnewpass" value="Confirm New Password" class="form-control here" type="password">
                              </div>
                            </div>
                            <div class="form-group row">
                            <label class="col-4 col-form-label" for="Birthdate">Birthdate</label>
                            <div class="col-8">
                      			<input type="text" name="Birthdate" onfocus="(this.type='date')"  required class="form-control" value="<?php echo $Birthdate; ?> ">
                          </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-4 col-form-label" for="contact">Contact No.</label>
                        <div class="col-8">
                          <input type="number" class="form-control" minlength=11 maxlength="11" value="<?php echo $contact; ?>" name="contact" required=""/>
                      </div>
                    </div>


                            <div class="form-group row">
                              <div class="offset-4 col-8">
                                <button name="update" type="submit" class="btn btn-primary">Update My Profile</button>
                              </div>
                            </div>
                          </form>
                  </div>
              </div>
</div>
  </div>
</main>
<!--Main layout-->



  <?php
  include "footer.php";
  ?>
