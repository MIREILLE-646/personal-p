<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>PorfolioBuild</title>
  <link rel="icon" sizes="32x32" href="img/title.png">
  <!-- Bootstrap CSS -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="css.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="jquery-ui/jquery-ui.min.css">

  <!-- Link to Aos Animation -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="jquery.js"></script>
  <style>
    footer a {
      color: white !important;
    }
  </style>

</head>

<body class="body">
  <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
    <div class="container">
      <a href="index.php" alt="" class="ms-5 navbar-brand">
        <img src="img/13.png" alt="" class="navbar-brand">
      </a>
      <button class="navbar-toggler border" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon  "></span>
      </button>
      <div class="collapse navbar-collapse text-white" id="navbarNav">
        <!-- nav links -->
        <div class="mx-auto" id="navbarNav"></div>
        <ul class="navbar-nav  ">
          <li class="nav-item">
            <a href="index.php" class="nav-link fs-4 text-white">HOME</a>
          </li>
          <li class="nav-item">
            <a href="creat.php" class="nav-link fs-4 text-white">Create</a>
          </li>
          <li class="nav-item">
            <a href="example.php" class="nav-link fs-4 text-white">Examples</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fs-4 text-white arrow-top" id="navbarDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Account
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="register.php" id="reg"> <i
                    class="fa-solid fa-users pe-2"></i>Register</a>
              </li>
              <li> <a class="dropdown-item" href="login.php"><i class="fa-solid fa-user pe-2"></i>Login</a></li>
              <!-- show Dashboard link on dropdown if user is login -->
              <?php
              if (isset($_SESSION['email'])) {
                ?>
                <li style=""> <a class="dropdown-item" href="user-dashboard/Dashboard.php"> <i
                      class="fas fa-fw fa-tachometer-alt"></i>Dashboard</a>
                </li>
              <?php } ?>
            </ul>
          </li>

        </ul>
      </div>
      <!-- navlink ends -->
    </div>
  </nav>
  <!-- navbar ends -->