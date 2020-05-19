<?php
include "connection.php";
include "header.php";
      include "functions.php";

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
        <a href="settings.php" class="list-group-item list-group-item-action active waves-effect">
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
          <span>Settings</span>
        </h4>

    </div>

    <?php
      $currentDate = date('d/m/Y');

     ?>

<div class="d-flex justify-content-center">
    <div class="col-md-9">
      <div class="card">
          <div class="card-body">
              <div class="row">
                  <div class="col-md-12">
                      <h4>School Year</h4>
                      <hr>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <form method="post">
                      <!--<div class="form-group row">
                          <label class="col-4 col-form-label" for="Birthdate">Current date</label>
                            <div class="col-8">
                              <input   type="" name="current" onfocus="(this.type='date')"  required class="form-control" value="<?php /*echo "$currentDate"*/?>"  disabled>
                            </div>
                        </div>-->

                        <div class="form-group row">
                          <label class="col-4 col-form-label" for="Birthdate">Start</label>
                            <div class="col-8">
                              <input type="date"   name="start_year"   required class="form-control date" required>
                            </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-4 col-form-label" for="Birthdate">Selected Start Date</label>
                            <div class="col-8">
                              <?php
                                  $result=mysqli_query($link, "select * , DATE_FORMAT(start_year, '%d/%m/%Y') as formatted from school_year");
                                  $row=mysqli_fetch_array($result);
                                  $currentDate = date('d/m/Y');
                              ?>
                              <input name="end" onfocus="(this.type='date')"  required class="form-control" value="<?php echo $row['formatted']; ?>"  disabled>
                            </div>
                          </div>


                        <div class="form-group row">
                          <label class="col-4 col-form-label" for="Birthdate">End</label>
                            <div class="col-8">
                              <input type="date"   name="end_year"   required class="form-control date" required>
                            </div>
                        </div>


                        <div class="form-group row">
                          <label class="col-4 col-form-label" for="Birthdate">Selected End Date</label>
                            <div class="col-8">

                              <?php
                              $result=mysqli_query($link, "select * , DATE_FORMAT(end_year, '%d/%m/%Y') as formatted from school_year");
                              $row=mysqli_fetch_array($result);
                              $currentDate = date('d/m/Y');
                              ?>

                              <input name="end" onfocus="(this.type='date')"  required class="form-control" value="<?php echo $row['formatted']; ?>"  disabled>
                            </div>
                          </div>

                          <div class="form-group row">
                            <div class="offset-4 col-8">
                              <button name="start" type="submit"
                               <?php

                                     $end_year = '';
                                     if(isset($_POST['end_year'])){
                                       $end_year  = $_POST['end_year'];
                                     }

                                     $start_year = '';
                                     if(isset($_POST['start_year'])){
                                       $start_year  = $_POST['start_year'];
                                     }
                               if($currentDate < $row['formatted'] ) {?> disabled <?php }?>class="btn btn-primary">Start</button>
                            </div>
                          </div>
                       </form>

                  </div>
              </div>
            </div>
          </div>
        </div>
          </div>

          <br>
          <br>


          <div class="d-flex justify-content-center">
              <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Registration Date</h4>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <form method="post">

                                  <div class="form-group row">
                                    <label class="col-4 col-form-label" for="Birthdate">Start</label>
                                      <div class="col-8">
                                        <input  type="date"  name="start_reg"   required class="form-control date" required>
                                      </div>
                                  </div>

                                  <div class="form-group row">
                                    <label class="col-4 col-form-label" for="Birthdate">Selected Start Date</label>
                                      <div class="col-8">

                                <?php

                                      $result=mysqli_query($link, "select * , DATE_FORMAT(start_reg, '%d/%m/%Y') as formatted from reg_date");
                                      $row=mysqli_fetch_array($result);

                                      $result1=mysqli_query($link, "select * from school_year");
                                      $row1=mysqli_fetch_array($result1);

                                          $currentDate = date('d/m/Y');


                                      ?>



                                        <input name="selected_end_reg" onfocus="(this.type='date')"  required class="form-control" value="<?php echo $row['formatted']; ?>"  disabled>
                                      </div>
                                    </div>


                                  <div class="form-group row">
                                    <label class="col-4 col-form-label" for="Birthdate">End</label>
                                      <div class="col-8">
                                        <input  type="date"  name="end_reg"   required class="form-control date" required>
                                      </div>
                                  </div>


                                  <div class="form-group row">
                                    <label class="col-4 col-form-label" for="Birthdate">Selected End Date</label>
                                      <div class="col-8">

                                <?php

                                      $result=mysqli_query($link, "select * , DATE_FORMAT(end_reg, '%d/%m/%Y') as formatted from reg_date");
                                      $row=mysqli_fetch_array($result);

                                      $result1=mysqli_query($link, "select * from school_year");
                                      $row1=mysqli_fetch_array($result1);

                                          $currentDate = date('d/m/Y');


                                      ?>



                                        <input name="selected_end_reg" onfocus="(this.type='date')"  required class="form-control" value="<?php echo $row['formatted']; ?>"  disabled>
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <div class="offset-4 col-8">


                                          <button name="submit_reg" type="submit" <?php if($currentDate < $row['formatted']) {?> disabled <?php }?>class="btn btn-primary">Start</button>
                                      </div>
                                    </div>
                                 </form>

                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
  </div>
</main>
<!--Main layout-->

<?php


$connection = mysqli_connect("localhost", "root", "");
      $db = mysqli_select_db($connection, 'dataadventurers');

               $end_year = '';
               if(isset($_POST['end_year'])){
                 $end_year  = $_POST['end_year'];
               }
               $start_year = '';
               if(isset($_POST['start_year'])){
                 $start_year  = $_POST['start_year'];
               }

               $currentDate = date('d/m/Y');


         if(isset($_POST['start'])) {



            if($end_year >= $start_year){

             $query = "UPDATE school_year SET start_year='$start_year', end_year='$_POST[end_year]' ;";
             $query_run = mysqli_query($connection, $query);

             if($query_run){

               echo '<script type="text/javascript"> alert ("School year updated!")</script>';

             } else {

               echo '<script type="text/javascript"> alert ("Error Occured")</script>';
             }
            }else {

               echo '<script type="text/javascript"> alert ("Invalid date! Please select an end date greater than the start date. ")</script>';
             }

?>


             <script> location.replace("settings.php"); </script>
<?php
       }

       $result=mysqli_query($link, "select * , DATE_FORMAT(end_year, '%d/%m/%Y') as formatted from school_year");
       $row=mysqli_fetch_array($result);



           $currentDate = date('d/m/Y');

           if($currentDate >= $row['formatted']){

                 $query = "UPDATE users set activation_status = 'deactivated' where role = 'admin' || role = 'member'";
                  $query_run = mysqli_query($connection, $query);

                  
               }

?>

<?php


$connection = mysqli_connect("localhost", "root", "");
      $db = mysqli_select_db($connection, 'dataadventurers');


               $end_reg = '';
               if(isset($_POST['end_reg'])){
                 $end_reg  = $_POST['end_reg'];
               }

               $start_reg = '';
               if(isset($_POST['start_reg'])){
                 $start_reg  = $_POST['start_reg'];
               }

               $result=mysqli_query($link, "select *  from school_year");
               $row=mysqli_fetch_array($result);





               if(isset($_POST['submit_reg'])) {


             if($start_reg <= $row['start_year'] OR $end_reg > $row['end_year']){
                 echo '<script type="text/javascript"> alert ("Invalid date! Please select a registration period within the school year.")</script>';


           }else if($start_reg > $end_reg){

             echo '<script type="text/javascript"> alert ("Invalid date! Please select an end date greater than the start date.")</script>';
           }else{
             $query = "UPDATE reg_date SET start_reg='$_POST[start_reg]', end_reg='$_POST[end_reg]' ;";
             $query_run = mysqli_query($connection, $query);

             if($query_run){

             echo '<script type="text/javascript"> alert ("Registration Date updated!")</script>';

           } else {

             echo '<script type="text/javascript"> alert ("Error Occured")</script>';
           }

             }?>



              <script> location.replace("settings.php"); </script>
             <?php
           }
?>








  <?php
  include "footer.php";
  ?>
