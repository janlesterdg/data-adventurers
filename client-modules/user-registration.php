<?php
session_start();
include "connection.php";
include "validation.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Data Adventurers | User Registration </title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/animate.min.css" rel="stylesheet">
    <link href="../css/custom.min.css" rel="stylesheet">
</head>

<br>
<br>
<br>

<?php
$result=mysqli_query($link, "select * , DATE_FORMAT(end_reg, '%d/%m/%Y') as formatted from reg_date");
$row=mysqli_fetch_array($result);


    $currentDate = date('d/m/Y');

      if($currentDate < $row['formatted']) {
?>


<?php
      $result=mysqli_query($link, "select * from page_info");
      $row=mysqli_fetch_array($result);
?>
<div class="col-lg-12 text-center ">
<img src=" <?php echo $row['image']; ?>" class="img-fluid" height="200" width="200" alt="">
</div>

<body class="login" style="margin-top: -20px;">
    <div class="login_wrapper">

            <section class="login_content" style="margin-top: -40px;">
                <form name="form1" action="user-registration.php" method="post">
                    <br>
                    <br>
                    <h2>Join us now!</h2><br>
                    <span style="color:red;"><?php echo display_error(); ?></span>
                    <div>
                        <input type="text" class="form-control" placeholder="First Name" minlength=2 pattern="[A-Za-z ]+" name="first_name" oninvalid="this.setCustomValidity('Firstname is required. Only letters and white space allowed')" oninput="setCustomValidity('')" value="<?php echo $first_name; ?>"/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="Last Name" minlength=4 pattern="[A-Za-z ]+" name="last_name" oninvalid="this.setCustomValidity('Lastname is required. Only letters and white space allowed')" oninput="setCustomValidity('')" value="<?php echo $last_name; ?>"/>
                    </div>
                    <div>
                        <input type="text" class="form-control" maxlength=1 pattern="[A-Za-z]" placeholder="Middle Initial" name="middle_initial" oninvalid="this.setCustomValidity('Please enter only letters')" oninput="setCustomValidity('')" value="<?php echo $middle_initial; ?>"/>
                    </div>
                    <div>
                        <input type="number" class="form-control" min="1000000" max="9999999"  oninvalid="this.setCustomValidity('Please enter seven digits')" oninput="setCustomValidity('')" placeholder="ID Number" name="id_number" value="<?php echo $id_number; ?>"/>
                    </div><br>
                    <div>
                        <input type="email" class="form-control" placeholder="Email Address" name="email_add" value="<?php echo $email_add; ?>"/>
                    </div>
                    <div>
                        <input type="password" class="form-control" minlength=6 placeholder="Password" name="password"/>
                    </div>
                    <div>
                        <input type="password" class="form-control" minlength=6 placeholder="Confirm Password" name="cpassword"/>
                    </div>
                    <div class="form-group">

              			<label class="float-left" for="Birthdate">Birthdate</label>
              			<input type="date" name="Birthdate"  class="form-control" value="<?php echo $Birthdate; ?>">
              		</div>
                  <div>
                      <select type="text" class="form-control" name="course">
                          <option value="BSIT">BSIT</option>
                          <option value="BSCS">BSCS</option>
                      </select><br>
                  </div>
                  <div>
                      <select name="Year" class="form-control" type="number">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                      </select>
                      <br>
                  </div>
                    <div>
                        <input type="number" class="form-control" min="100000" placeholder="Contact no." name="contact_num" value="<?php echo $contact_num; ?>"/>
                    </div>
                    <br>
                    <br>
                    <div class="d-flex justify-content-center">
                        <input class="btn btn-primary submit " type="submit" name="submit1" value="Register">
                    </div>

                </form>
            </section>
    </div>

</body>

<?php }else{?>
  <body class="login" style="margin-top: -20px;">
    <div class="col-lg-12 text-center ">
      <br>
      <br>
      <br>
    <img src=" <?php
    $result=mysqli_query($link, "select * from page_info");
    $row=mysqli_fetch_array($result);
     echo $row['image']; ?>" class="img-fluid" height="400" width="400" alt="">
     <br>
     <br>

     <div class="alert alert-dark" role="alert">
      The registration period has expired.
     </div>

    </div>
  </body>
<?php } ?>
</html>


</html>
