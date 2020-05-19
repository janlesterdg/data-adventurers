<?php
include "connection.php";
include('../functions.php');

if (!isLoggedIn()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: ../login.php');
}

if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['user']);
  header("location: ../login.php");
  exit;
}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Data Adventurers</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="../css/style.min.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">

  <body class="grey lighten-5">

    <!--Main Navigation-->
    <header>

      <!-- Navbar -->
      <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
        <div class="container-fluid">

          <!-- Brand -->
          <a class="navbar-brand waves-effect" href="about.php" target="_blank">
            <strong class="blue-text">Data Adventurers</strong>
          </a>

          <!-- Collapse -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Links -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Left -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right -->
            <div class="content">
              <!-- notification message -->
              <?php if (isset($_SESSION['success'])) : ?>
                <div class="error success" >
                  <h3>
                    <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                  </h3>
                </div>
              <?php endif ?>

              <!-- logged in user information -->
              <div class="profile_info">
                <div>
                  <?php  if (isset($_SESSION['user'])) : ?>
                    <strong>
                      <?php echo
                      $_SESSION['user']['first_name'];
                      ?>
                    </strong>

                    <small>
                      <i>(<?php echo ucfirst($_SESSION['user']['role']); ?>)</i>
                      <br>

                      <!-- Right -->
                      <ul class="navbar-nav nav-flex-icons">
                        <li class="nav-item">
                          <a href="header.php?logout='1'">logout</a>
                          &nbsp;
                        </li>
                      </ul>
                    </small>

                  <?php endif ?>
                </div>
              </div>
            </div>


          </div>

        </div>
      </nav>
      <!-- Navbar -->

      <!-- Sidebar -->
      <div class="sidebar-fixed position-fixed">
        <?php

              $result=mysqli_query($link, "select * from page_info");
              $row=mysqli_fetch_array($result);
              ?>

        <a class="logo-wrapper waves-effect">
          <img src=" <?php echo $row['image']; ?>" class="img-fluid" height="200" width="200" alt="">
        </a>




  <style>

.map-container{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-container iframe{
left:0;
top:0;
height:100%;
width:100%;
position:absolute;
}
  </style>
</head>
