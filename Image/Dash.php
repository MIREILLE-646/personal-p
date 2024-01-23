<?php
session_start();
include "dbc/dbc.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>
    <link rel="icon" type="image/jpg" sizes="32x32" href="img/13.jpg">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"></script>
    <script src="jquery.js"></script>
</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>My Profile</h3>
            </div>

            <ul class="list-unstyled">
                <li style="color: #0c1432;background: #fff;">
                    <a href="Dashboard.php">
                        <i class="fa-sharp fa-solid fa-comment-dots"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="Index.php" target="_blank">
                        <i class="fa-sharp fa-solid fa-comment-dots"></i>
                        Home
                    </a>
                </li>
                <li>
                    <a href="creat.php" target="_blank">
                        <i class="fa-solid fa-users"></i>
                        Pass Command
                    </a>
                </li>
                <li>
                    <a href="example.php" target="_blank">
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                        See Examples
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                        Messages
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                        LogOut
                    </a>
                </li>
            </ul>
        </nav>

        <style>
            p {
                margin: 0;
                color: white;
            }

            .text-col {
                border-bottom: 2px solid rgb(176, 175, 175);
            }
        </style>
        <!-- Page Content  -->
        <div id="content">
            <nav class="navbar navbar-expand-lg" style="margin-bottom:4px !important;">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info mb-2">
                        <svg class="svg-inline--fa fa-align-left fa-w-14" aria-hidden="true" data-prefix="fas"
                            data-icon="align-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                            data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M288 44v40c0 8.837-7.163 16-16 16H16c-8.837 0-16-7.163-16-16V44c0-8.837 7.163-16 16-16h256c8.837 0 16 7.163 16 16zM0 172v40c0 8.837 7.163 16 16 16h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16zm16 312h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm256-200H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16h256c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16z">
                            </path>
                        </svg>
                    </button>
                    <div class="user text-end text-white">
                        hey
                        <?php //echo $_SESSION['email'] ?>
                        <span class="btn update-img-btn"><img class="rounded-circle " src="image/mireille.png"
                                width="40" alt="profile" title="Edit Profile"></span>
                    </div>
                </div>
            </nav>
            <!--  ========================Upload profile form==============================-->
            <div class="update-img-form w-100 position-fixed mt-3" style="display:none">
                <div class="" style="z-index:400;margin-right:35vh">
                    <form class="w-25 mx-auto  bg-light p-3 rounded" action="" method="post"
                        enctype="multipart/form-data">
                        <div class="text-end"><button type="button" class="btn-close btn-close-dark btn-close-form"
                                aria-label="Close"></button>
                        </div>
                        <div class="mb-3 fs-5 text-muted">Uploads Picture</div>
                        <div class="input-group mb-3">
                            <input type="file" name="uploadpicture" class="form-control" required>
                        </div>
                        <button type="submit" name="update-img" id="update-img"
                            class="btn btn-primary text-white">Upload</button>
                    </form>
                </div>
            </div>
            <!--  ========================Upload profile form ends==============================-->


            <div class="row mb-5">
                <div class="col-12 col-sm-6 mt-4 col-md-6 col-lg-4 box">
                    <div class="mx-2 border rounded">
                        <p class="p-2 text-center fw-bold text-col" style="background-color: 0c1432;font-size:40px;">
                            0
                        </p>
                        <p class="p-4 text-center fw-bold" style="font-size:25px;">Command Pending</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 mt-4 col-md-6 col-lg-4 box">
                    <div class="mx-2 border rounded">
                        <p class="p-2 text-center fw-bold text-col" style="background-color: 0c1432;font-size:40px;">
                            1
                        </p>
                        <p class="p-4 text-center fw-bold" style="font-size:25px;">Command Process</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 mt-4 col-md-6 col-lg-4 box">
                    <div class="mx-2 border rounded">
                        <p class="p-2 text-center fw-bold text-col" style="background-color: 0c1432;font-size:40px;">
                            5
                        </p>
                        <p class="p-4 text-center fw-bold" style="font-size:25px;">Messages</p>
                    </div>
                </div>
            </div>


            <!-- =================================================================== -->
            <!-- ==============================Table of processes===================================== -->
            <div class="container-fluid mt-5">
                <table class="table border py-2 text-white text-center">
                    <thead>
                        <th>Command date</th>
                        <th>Delivery date</th>
                        <th>Payment method</th>
                        <th>Status</th>
                        <th>Amount paid</th>
                    </thead>
                    <tr class="text-white">
                        <td>15/05/2023</td>
                        <td>19/05/2023</td>
                        <td>Paypal</td>
                        <td>processing</td>
                        <td>$23</td>
                    </tr>
                </table>
            </div>
            <!-- =================================================================== -->

        </div>
    </div>


    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            var t = 0;
            var v = 0;
            $('#sidebarCollapse').on('click', function () {
                // $('#sidebar').show();
                $('#sidebar').toggleClass('active');
            });
            $("#sidebarCollapse").click(function () {
                if (t == 0) {
                    $(".box").removeClass("col-sm-6");
                    t = 1;
                } else {
                    $(".box").addClass("col-sm-6");
                    t = 0;
                }
            })

            // upload profile picture form shows onclick
            var m = 0;
            $(".update-img-btn").click(function () {
                $(".update-img-form").toggle("slow");
            })

            $(".btn-close-form").click(function () {
                $(".update-img-form").hide("slow");
            })
            $('#update-img').click(function () {
            });
        });

    </script>
</body>

</html>