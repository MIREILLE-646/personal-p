<?php
session_start();
?>
<!DOCTYPE html>
<html>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<head>
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
    @media only screen and (max-width: 991px) {
      nav {
        background: black !important;
        padding-left: 20px !important;
      }
    }
  </style>
</head>

<body class="body">
  <nav class="navbar navbar-expand-lg  fixed-top" id="nav">
    <div class="container">
      <a href="" alt="" class="ms-5 navbar-brand">
        <img src="img/13.png" alt="" class="navbar-brand">
      </a>
      <button class="navbar-toggler border" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon bg-primary"></span>
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
              <li><a class="dropdown-item" href="register.php" id="reg"><i
                    class="fa-solid fa-users pe-2"></i>Register</a>
              </li>
              <li><a class="dropdown-item" href="login.php"><i class="fa-solid fa-user pe-2"></i>Login</a></li>
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

  <!-- main div -->
  <!-- hero img section -->
  <div class="bg">
    <div class="bg-image mask banner-image vh-100 w-100 d-flex justify-content-center bg-fixed
align-items-center mb-5">
      <div class="mask" style="background-color: rgba(0, 0, 0, 1.0);">
      </div>
      <!-- hero text -->
      <div class="container d-flex h-100 
   container d-flex justify-content-center align-items-center">
        <div class="text-center text-white" id="hero-txt">
          <h1 class="text-white display-3 mb-4">Build your portfolio with <u>PorfolioBuild</u></h1>
          <p class="display-6 mb-5">Craft your story, showcase your brilliance.</p>
          <a href="creat.php"><button class="btn btn-primary btn-rounded fs-5" role="button">Create portfolio
            </button></a>
        </div>
      </div>
      <!-- hero text end -->
    </div>

    <!-- hero section ends -->
  </div>


  <!-- mai div close -->

  <!-- main layout -->
  <section class="">
    <main>
      <div class="container mx-auto text-center text-white">
        <p class="display-6">Create Your Portfolio To showcase Your Work To The World </p>
        <p class="fs-4">You don't know HTML or CSS don't worry, We help you build your experience</p>
      </div>
      <!-- some examples of porfolio -->
      <div class="container mb-3" data-aos="fade-left" data-aos-duration="2000">
        <div class="row command">
          <div class="col-sm-12 col-md-6 col-lg-3 mb-5">
            <div class="card h-100">
              <img src="img/e1.jpeg" alt="" class="card-image-top">
              <a href="creat.php" class="btn btn-primary mt-auto">Pass command</a>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3 mb-5">
            <div class="card h-100  ">
              <img src="img/e2.png" alt="" class="card-image-top  ">
              <a href="creat.php" class="btn btn-primary mt-auto">Pass command</a>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3 mb-5 ">
            <div class="card h-100 mb-5">
              <img src="img/e3.jpg" alt="" class="card-image-top  ">
              <a href="creat.php" class="btn btn-primary mt-auto">Pass command</a>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3 mb-5 ">
            <div class="card h-100">
              <img src="img/e5.png" alt="" class="card-image-top">
              <a href="creat.php" class="btn btn-primary mt-auto ">Pass command</a>
            </div>
          </div>

        </div>
      </div>
    </main>
  </section>

  <section>
    <!-- defferent proffession porfolio -->
    <h2 class="text-center text-white">Build Your Portfolio</h2>
    <p class="text-center fs-4 text-white">No matter Your proffession</p>
    <div class="container mb-5" data-aos="fade-right" data-aos-duration="2000">
      <div class="row mx-auto">
        <div class="card mb-3 mx-auto" style="max-width:1000px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="img/d.jfif" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8 my-auto px-5">
              <div class="card-body">
                <h3 class="card-title">Designer</h3>
                <p class="card-text"><i class='fa-solid fa-quote-left pe-2 pb-2 fs-3' style='color: gainsboro'></i>
                  Build your portfolio as a
                  designer
                  to show your experience to the world through your porfolio
                </p>
                <a href="creat.php" class="btn btn-primary">Pass command</a>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>

    <div class="container mb-5" data-aos="fade-left" data-aos-duration="2000">
      <div class="row mx-auto">
        <div class="card mb-3 mx-auto" style="max-width:1000px;">
          <div class="row g-0">
            <div class="col-md-4 col-sm-6 col-lg-3">
              <img src="img/download.jfif" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8 my-auto px-5">
              <div class="card-body">
                <h3 class="card-title">Artist</h3>
                <p class="card-text"><i class='fa-solid fa-quote-left pe-2 pb-2 fs-3' style='color: gainsboro'></i>
                  Build your portfolio as an Artist
                  to show your experience to the world through your porfolio
                </p>
                <a href="creat.php" class="btn btn-primary">Pass command</a>
              </div>
            </div>
          </div>
        </div>

        <div class="container mb-5" data-aos="fade-right" data-aos-duration="2000">
          <div class="row mx-auto">
            <div class="card mb-3 mx-auto" style="max-width:1000px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="img/m1.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8 my-auto px-5">
                  <div class="card-body">
                    <h3 class="card-title">MakeUp Designer</h3>
                    <p class="card-text"><i class='fa-solid fa-quote-left pe-2 pb-2 fs-3' style='color: gainsboro'></i>
                      Build your portfolio as a MameUp Designer
                      to show your experience to the world through your porfolio
                    </p>
                    <a href="creat.php" class="btn btn-primary">Pass command</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="container mb-5" data-aos="fade-left" data-aos-duration="2000">
              <div class="row mx-auto">
                <div class="card mb-3 mx-auto" style="max-width:1000px;">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="img/p1.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 my-auto px-5">
                      <div class="card-body">
                        <h3 class="card-title">Photographer</h3>
                        <p class="card-text"><i class='fa-solid fa-quote-left pe-2 pb-2 fs-3'
                            style='color: gainsboro'></i>
                          Build your portfolio as a Photographer
                          to show your experience to the world through your porfolio
                        </p>
                        <a href="creat.php" class="btn btn-primary">Pass command</a>
                      </div>
                    </div>
                  </div>
                </div>


              </div>
            </div>


            <div class="container mb-5 h-100  justify-content-center">
              <p class="text-white text-center fs-5 ">
                Don't Worry if your proffession was not mentioned <br> just click on the
                button bellow to make your command on a specific proffession. <br>
                <a href="creat.php" class=" btn btn-primary " type="button" style="line-height:10px;">Command Here </a>
              </p>
            </div>
  </section>
  <!-- carousel -->
  <p class="display-6 mb-1 text-center text-white">Be A Member Of Our Community</p>
  <section class="w-100 mb-5 mx-auto bg-primary">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner w-100 mx-auto">
        <!--  -->
        <div class="carousel-item active">
          <div class="row mt-5 g-0">
            <div class="col-sm-12 col-md-12 col-lg-6">
              <img src="img/g2-removebg-preview.png" alt="image" width="80%" class="ms-5">
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
              <div class="carousel-caption pb-5 mb-5 text-white">
                <h1>Join PorfolioBuild</h1>
                <p class="fs-4">Register now!!!</p>
                <a href="register.php" class="btn btn-dark btn-lg">Get Stated</a>
              </div>
            </div>
          </div>
        </div>
        <!--  -->
        <!--  -->
        <div class="carousel-item">
          <div class="row mt-5 g-0">
            <div class="col-sm-12 col-md-12 col-lg-6">
              <img src="img/devices.png" alt="image" width="80%" class="ms-5">
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
              <div class="carousel-caption pb-5 mb-5 text-white">
                <h1>Join PorfolioBuild</h1>
                <p class="fs-4">Get an optimised portfolio for used on all devices</p>
                <a href="register.php" class="btn btn-dark btn-lg">Get Stated</a>
              </div>
            </div>
          </div>
        </div>
        <!--  -->
        <!--  -->
        <div class="carousel-item">
          <div class="row mt-5 g-0">
            <div class="col-sm-12 col-md-12 col-lg-6">
              <img src="img/photo.png" alt="image" width="80%" class="ms-5">
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
              <div class="carousel-caption pb-5 mb-5 text-white">
                <h1>Join PorfolioBuild</h1>
                <p class="fs-4">show your brilliance in few clicks</p>
                <a href="register.php" class="btn btn-dark btn-lg">Get Stated</a>
              </div>
            </div>
          </div>
        </div>
        <!--  -->

      </div>
      <!-- Navigation buttons -->
      <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only"></span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only"></span>
      </a>
    </div>
  </section>
  <!-- ==================================== -->
  <!-- BADGES -->
  <div class="container bg-light mb-4" data-aos="fade-up" data-aos-duration="2000">
    <div class="row text-center">
      <div class="  col-sm-6 col-md-4 col-lg-3 mt-3" style="border-right:5px solid gainsboro">
        <img src="img/3.png" class="w-25 mb-3">
        <h5>Edit images</h5>
        <i class='fa-solid fa-quote-right fs-3 float-end' style="color: gainsboro"></i>
        <p>Easily add or delete an image from your gallery.
        </p>

      </div>

      <div class="  col-sm-6 col-md-4 col-lg-3 mt-3" style="border-right:5px solid gainsboro">
        <img src="img/6.png" class="w-25 mb-3">
        <h5>Domain Name</h5>
        <i class='fa-solid fa-quote-right fs-3 float-end' style="color: gainsboro"></i>
        <p>Help people and companies discover what you can do through your porfolio
          using your unique domain Name.</p>
      </div>

      <div class="  col-sm-6 col-md-4 col-lg-3 mt-3" style="border-right:5px solid gainsboro">
        <img src="img/4.png" class="w-25 mb-3">
        <h5>Secured payment</h5>
        <i class='fa-solid fa-quote-right fs-3 float-end' style="color: gainsboro"></i>
        <p>100% secure payment, pay through our different payment method
          safely.
        </p>
      </div>

      <div class="  col-sm-6 col-md-4 col-lg-3 mt-3">
        <img src="img/52.png" class="w-25 mb-3">
        <h5>Optimized for all divices</h5>
        <i class='fa-solid fa-quote-right fs-3 float-end' style="color: gainsboro"></i>
        <p>You will received from us a porfolio looking good (Responsive)
          on defferent width of any device.
        </p>
      </div>

    </div>

  </div>

  <!-- Badges ends -->

  <!-- Testimonial div starts -->
  <section class="">
    <p class=" display-6 text-center pb-0 text-white"><i>Our clients</i></p>
    <p class=" display-3 text-primary text-center">TESTIMONIALS</p>
    <div class="row mb-5">
      <!--  -->
      <div class="shadow text-white bg-dark col-lg-4 col-sm-12 col-md-6">
        <div class="mx-auto  text-center"> <img src="image/providence.png" alt="" class="rounded-circle mt-3 w-25">
          <div class="text-white pt-3 text-justify px-3" style="">
            <h5 class="text-center">Providence N.</h5>
            <p class="pb-4"> <i class='fa-solid fa-quote-left float-start text-muted display-5 rounded-pill'
                style="color: white"></i>
            </p>
            <i> This portfolio-building application has been a
              game-changer for me.
              It provided an intuitive and user-friendly platform to showcase my work and skills.
              Thanks to this app, I landed my dream job!</i>
            <div style="display:flex !important; text-align:center;">
              <p class="text-center pt-2 ps-5 ms-5"><i class="fa-sharp fa-solid fa-star"></i></p>
              <p class="text-center pt-2"><i class="fa-sharp fa-solid fa-star"></i></p>
              <p class="text-center pt-2"><i class="fa-sharp fa-solid fa-star"></i></p>
              <p class="text-center pt-2"><i class="fa-sharp fa-solid fa-star"></i></p>
              <p class="text-center pt-2"><i class="fa-sharp fa-solid fa-star"></i></p>
            </div>
          </div>
        </div>
      </div>
      <!--  -->
      <div class="shadow text-white bg-dark col-sm-12 col-md-6 col-lg-4">
        <div class="mx-auto  text-center"> <img src="image/esther.png" alt="" class="rounded-circle mt-3 w-25">
          <div class="text-white pt-3 text-justify px-3" style="">
            <h5 class="text-center">Esther N.</h5>
            <p class="pb-4"> <i class='fa-solid fa-quote-left float-start text-muted display-5 rounded-pill'
                style="color: white"></i>
            </p>
            <i>As a creative professional, having a visually appealing and engaging portfolio
              is crucial. This application made it incredibly simple for me to showcase my
              work in a stunning way. It's a must-have tool for anyone in the creative
              industry.</i>
            <div style="display:flex !important; text-align:center;">
              <p class="text-center pt-2 ps-5 ms-5"><i class="fa-sharp fa-solid fa-star"></i></p>
              <p class="text-center pt-2"><i class="fa-sharp fa-solid fa-star"></i></p>
              <p class="text-center pt-2"><i class="fa-sharp fa-solid fa-star"></i></p>
              <p class="text-center pt-2"><i class="fa-sharp fa-solid fa-star"></i></p>
              <p class="text-center pt-2"><i class="fa-sharp fa-solid fa-star"></i></p>
            </div>
          </div>
        </div>
      </div>
      <!--  -->
      <div class="shadow text-white bg-dark col-sm-12 col-md-6 col-lg-4 ">
        <div class="mx-auto  text-center"> <img src="image/valery.png" alt="" class="rounded-circle mt-3 w-25">
          <div class="text-white pt-3 text-justify px-3" style="">
            <h5 class="text-center">Valery F.</h5>
            <p class="pb-4"> <i class='fa-solid fa-quote-left float-start text-muted display-5 rounded-pill'
                style="color: white"></i>
            </p>
            <i>I've been using this portfolio-building application for a while now,
              and I couldn't be happier with the results. It helped me organize and present
              my projects effectively, and I received great feedback from potential employers.
              I owe a big part of my career success to this app!</i>
            <div style="display:flex !important; text-align:center;">
              <p class="text-center pt-2 ps-5 ms-5"><i class="fa-sharp fa-solid fa-star"></i></p>
              <p class="text-center pt-2"><i class="fa-sharp fa-solid fa-star"></i></p>
              <p class="text-center pt-2"><i class="fa-sharp fa-solid fa-star"></i></p>
              <p class="text-center pt-2"><i class="fa-sharp fa-solid fa-star"></i></p>
              <p class="text-center pt-2"><i class="fa-sharp fa-solid fa-star"></i></p>
            </div>
          </div>
        </div>
      </div>
      <!--  -->
    </div>

  </section>
  <!-- Testimonial div ends -->

  <?php
  include "footer.php";
  ?>