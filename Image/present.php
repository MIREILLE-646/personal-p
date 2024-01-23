<?php
include "dbc/dbc.php";
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Function to sanitize and validate input
function sanitizeInput($data)
{
    // Implement your sanitation and validation logic here
    return $data;
}

// Get the section ID and content from the POST request
$sectionId = $_POST['sectionId'];
$content = sanitizeInput($_POST['content']);

// perform proper sanitation and validation on $content before saving it to the database

// Save the content to the database
$sql = "UPDATE `content-editable` SET `section_id`='$sectionId', `content`='$content' WHERE section_id = '$sectionId'";

if ($con->query($sql) !== TRUE) {
    echo "Error updating content: " . $con->error;
}

$con->close();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PorfolioBuild</title>
    <!-- Link to Aos Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap5.css">
    <link rel="stylesheet" href="icons.css">
    <link rel="stylesheet" href="cs/mdb.min.css">
    <!-- Include custom CSS for styling -->

    <!-- include camanJS library -->
    <style>
        /* Page loader starts*/
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .loader {
            --duration: 3s;
            --primary: rgba(39, 94, 254, 1);
            --primary-light: #2f71ff;
            --primary-rgba: rgba(39, 94, 254, 0);
            width: 200px;
            height: 320px;
            position: relative;
            transform-style: preserve-3d;
        }

        @media (max-width: 480px) {
            .loader {
                zoom: 0.44;
            }
        }

        .loader:before,
        .loader:after {
            --r: 20.5deg;
            content: "";
            width: 320px;
            height: 140px;
            position: absolute;
            right: 32%;
            bottom: -11px;
            /* change the back groung color on switching from light to dark mood */
            background: #e8e8e8;
            transform: translateZ(200px) rotate(var(--r));
            -webkit-animation: mask var(--duration) linear forwards infinite;
            animation: mask var(--duration) linear forwards infinite;
        }

        .loader:after {
            --r: -20.5deg;
            right: auto;
            left: 32%;
        }

        .loader .ground {
            position: absolute;
            left: -50px;
            bottom: -120px;
            transform-style: preserve-3d;
            transform: rotateY(-47deg) rotateX(-15deg) rotateZ(15deg) scale(1);
        }

        .loader .ground div {
            transform: rotateX(90deg) rotateY(0deg) translate(-48px, -120px) translateZ(100px) scale(0);
            width: 200px;
            height: 200px;
            background: var(--primary);
            background: linear-gradient(45deg, var(--primary) 0%, var(--primary) 50%, var(--primary-light) 50%, var(--primary-light) 100%);
            transform-style: preserve-3d;
            -webkit-animation: ground var(--duration) linear forwards infinite;
            animation: ground var(--duration) linear forwards infinite;
        }

        .loader .ground div:before,
        .loader .ground div:after {
            --rx: 90deg;
            --ry: 0deg;
            --x: 44px;
            --y: 162px;
            --z: -50px;
            content: "";
            width: 156px;
            height: 300px;
            opacity: 0;
            background: linear-gradient(var(--primary), var(--primary-rgba));
            position: absolute;
            transform: rotateX(var(--rx)) rotateY(var(--ry)) translate(var(--x), var(--y)) translateZ(var(--z));
            -webkit-animation: ground-shine var(--duration) linear forwards infinite;
            animation: ground-shine var(--duration) linear forwards infinite;
        }

        .loader .ground div:after {
            --rx: 90deg;
            --ry: 90deg;
            --x: 0;
            --y: 177px;
            --z: 150px;
        }

        .loader .box {
            --x: 0;
            --y: 0;
            position: absolute;
            -webkit-animation: var(--duration) linear forwards infinite;
            animation: var(--duration) linear forwards infinite;
            transform: translate(var(--x), var(--y));
        }

        .loader .box div {
            background-color: var(--primary);
            width: 48px;
            height: 48px;
            position: relative;
            transform-style: preserve-3d;
            -webkit-animation: var(--duration) ease forwards infinite;
            animation: var(--duration) ease forwards infinite;
            transform: rotateY(-47deg) rotateX(-15deg) rotateZ(15deg) scale(0);
        }

        .loader .box div:before,
        .loader .box div:after {
            --rx: 90deg;
            --ry: 0deg;
            --z: 24px;
            --y: -24px;
            --x: 0;
            content: "";
            position: absolute;
            background-color: inherit;
            width: inherit;
            height: inherit;
            transform: rotateX(var(--rx)) rotateY(var(--ry)) translate(var(--x), var(--y)) translateZ(var(--z));
            filter: brightness(var(--b, 1.2));
        }

        .loader .box div:after {
            --rx: 0deg;
            --ry: 90deg;
            --x: 24px;
            --y: 0;
            --b: 1.4;
        }

        .loader .box.box0 {
            --x: -220px;
            --y: -120px;
            left: 58px;
            top: 108px;
        }

        .loader .box.box1 {
            --x: -260px;
            --y: 120px;
            left: 25px;
            top: 120px;
        }

        .loader .box.box2 {
            --x: 120px;
            --y: -190px;
            left: 58px;
            top: 64px;
        }

        .loader .box.box3 {
            --x: 280px;
            --y: -40px;
            left: 91px;
            top: 120px;
        }

        .loader .box.box4 {
            --x: 60px;
            --y: 200px;
            left: 58px;
            top: 132px;
        }

        .loader .box.box5 {
            --x: -220px;
            --y: -120px;
            left: 25px;
            top: 76px;
        }

        .loader .box.box6 {
            --x: -260px;
            --y: 120px;
            left: 91px;
            top: 76px;
        }

        .loader .box.box7 {
            --x: -240px;
            --y: 200px;
            left: 58px;
            top: 87px;
        }

        .loader .box0 {
            -webkit-animation-name: box-move0;
            animation-name: box-move0;
        }

        .loader .box0 div {
            -webkit-animation-name: box-scale0;
            animation-name: box-scale0;
        }

        .loader .box1 {
            -webkit-animation-name: box-move1;
            animation-name: box-move1;
        }

        .loader .box1 div {
            -webkit-animation-name: box-scale1;
            animation-name: box-scale1;
        }

        .loader .box2 {
            -webkit-animation-name: box-move2;
            animation-name: box-move2;
        }

        .loader .box2 div {
            -webkit-animation-name: box-scale2;
            animation-name: box-scale2;
        }

        .loader .box3 {
            -webkit-animation-name: box-move3;
            animation-name: box-move3;
        }

        .loader .box3 div {
            -webkit-animation-name: box-scale3;
            animation-name: box-scale3;
        }

        .loader .box4 {
            -webkit-animation-name: box-move4;
            animation-name: box-move4;
        }

        .loader .box4 div {
            -webkit-animation-name: box-scale4;
            animation-name: box-scale4;
        }

        .loader .box5 {
            -webkit-animation-name: box-move5;
            animation-name: box-move5;
        }

        .loader .box5 div {
            -webkit-animation-name: box-scale5;
            animation-name: box-scale5;
        }

        .loader .box6 {
            -webkit-animation-name: box-move6;
            animation-name: box-move6;
        }

        .loader .box6 div {
            -webkit-animation-name: box-scale6;
            animation-name: box-scale6;
        }

        .loader .box7 {
            -webkit-animation-name: box-move7;
            animation-name: box-move7;
        }

        .loader .box7 div {
            -webkit-animation-name: box-scale7;
            animation-name: box-scale7;
        }

        @-webkit-keyframes box-move0 {
            12% {
                transform: translate(var(--x), var(--y));
            }

            25%,
            52% {
                transform: translate(0, 0);
            }

            80% {
                transform: translate(0, -32px);
            }

            90%,
            100% {
                transform: translate(0, 188px);
            }
        }

        @keyframes box-move0 {
            12% {
                transform: translate(var(--x), var(--y));
            }

            25%,
            52% {
                transform: translate(0, 0);
            }

            80% {
                transform: translate(0, -32px);
            }

            90%,
            100% {
                transform: translate(0, 188px);
            }
        }

        @-webkit-keyframes box-scale0 {
            6% {
                transform: rotateY(-47deg) rotateX(-15deg) rotateZ(15deg) scale(0);
            }

            14%,
            100% {
                transform: rotateY(-47deg) rotateX(-15deg) rotateZ(15deg) scale(1);
            }
        }

        @keyframes box-scale0 {
            6% {
                transform: rotateY(-47deg) rotateX(-15deg) rotateZ(15deg) scale(0);
            }

            14%,
            100% {
                transform: rotateY(-47deg) rotateX(-15deg) rotateZ(15deg) scale(1);
            }
        }

        @-webkit-keyframes box-move1 {
            16% {
                transform: translate(var(--x), var(--y));
            }

            29%,
            52% {
                transform: translate(0, 0);
            }

            80% {
                transform: translate(0, -32px);
            }

            90%,
            100% {
                transform: translate(0, 188px);
            }
        }

        @keyframes box-move1 {
            16% {
                transform: translate(var(--x), var(--y));
            }

            29%,
            52% {
                transform: translate(0, 0);
            }

            80% {
                transform: translate(0, -32px);
            }

            90%,
            100% {
                transform: translate(0, 188px);
            }
        }

        @-webkit-keyframes box-scale1 {
            10% {
                transform: rotateY(-47deg) rotateX(-15deg) rotateZ(15deg) scale(0);
            }

            18%,
            100% {
                transform: rotateY(-47deg) rotateX(-15deg) rotateZ(15deg) scale(1);
            }
        }

        @keyframes box-scale1 {
            10% {
                transform: rotateY(-47deg) rotateX(-15deg) rotateZ(15deg) scale(0);
            }

            18%,
            100% {
                transform: rotateY(-47deg) rotateX(-15deg) rotateZ(15deg) scale(1);
            }
        }

        @-webkit-keyframes box-move2 {
            20% {
                transform: translate(var(--x), var(--y));
            }

            33%,
            52% {
                transform: translate(0, 0);
            }

            80% {
                transform: translate(0, -32px);
            }

            90%,
            100% {
                transform: translate(0, 188px);
            }
        }

        @keyframes box-move2 {
            20% {
                transform: translate(var(--x), var(--y));
            }

            33%,
            52% {
                transform: translate(0, 0);
            }

            80% {
                transform: translate(0, -32px);
            }

            90%,
            100% {
                transform: translate(0, 188px);
            }
        }

        @-webkit-keyframes box-scale2 {
            14% {
                transform: rotateY(-47deg) rotateX(-15deg) rotateZ(15deg) scale(0);
            }

            22%,
            100% {
                transform: rotateY(-47deg) rotateX(-15deg) rotateZ(15deg) scale(1);
            }
        }

        @keyframes box-scale2 {
            14% {
                transform: rotateY(-47deg) rotateX(-15deg) rotateZ(15deg) scale(0);
            }

            22%,
            100% {
                transform: rotateY(-47deg) rotateX(-15deg) rotateZ(15deg) scale(1);
            }
        }

        @-webkit-keyframes box-move3 {
            24% {
                transform: translate(var(--x), var(--y));
            }

            37%,
            52% {
                transform: translate(0, 0);
            }

            80% {
                transform: translate(0, -32px);
            }

            90%,
            100% {
                transform: translate(0, 188px);
            }
        }

        @keyframes box-move3 {
            24% {
                transform: translate(var(--x), var(--y));
            }

            37%,
            52% {
                transform: translate(0, 0);
            }

            80% {
                transform: translate(0, -32px);
            }

            90%,
            100% {
                transform: translate(0, 188px);
            }
        }

        @-webkit-keyframes box-scale3 {
            18% {
                transform: rotateY(-47deg) rotateX(-15deg) rotateZ(15deg) scale(0);
            }

            26%,
            100% {
                transform: rotateY(-47deg) rotateX(-15deg) rotateZ(15deg) scale(1);
            }
        }

        @keyframes box-scale3 {
            18% {
                transform: rotateY(-47deg) rotateX(-15deg) rotateZ(15deg) scale(0);
            }

            26%,
            100% {
                transform: rotateY(-47deg) rotateX(-15deg) rotateZ(15deg) scale(1);
            }
        }

        @-webkit-keyframes box-move4 {
            28% {
                transform: translate(var(--x), var(--y));
            }

            41%,
            52% {
                transform: translate(0, 0);
            }

            80% {
                transform: translate(0, -32px);
            }

            90%,
            100% {
                transform: translate(0, 188px);
            }
        }

        @keyframes box-move4 {
            28% {
                transform: translate(var(--x), var(--y));
            }

            41%,
            52% {
                transform: translate(0, 0);
            }

            80% {
                transform: translate(0, -32px);
            }

            90%,
            100% {
                transform: translate(0, 188px);
            }
        }

        @-webkit-keyframes box-scale4 {
            22% {
                transform: rotateY(-47deg) rotateX(-15deg) rotateZ(15deg) scale(0);
            }

            30%,
            100% {
                transform: rotateY(-47deg) rotateX(-15deg) rotateZ(15deg) scale(1);
            }
        }

        @keyframes box-scale4 {
            22% {
                transform: rotateY(-47deg) rotateX(-15deg) rotateZ(15deg) scale(0);
            }

            30%,
            100% {
                transform: rotateY(-47deg) rotateX(-15deg) rotateZ(15deg) scale(1);
            }
        }

        @-webkit-keyframes box-move5 {
            32% {
                transform: translate(var(--x), var(--y));
            }

            45%,
            52% {
                transform: translate(0, 0);
            }

            80% {
                transform: translate(0, -32px);
            }

            90%,
            100% {
                transform: translate(0, 188px);
            }
        }

        @keyframes box-move5 {
            32% {
                transform: translate(var(--x), var(--y));
            }

            45%,
            52% {
                transform: translate(0, 0);
            }

            80% {
                transform: translate(0, -32px);
            }

            90%,
            100% {
                transform: translate(0, 188px);
            }
        }

        @-webkit-keyframes box-scale5 {
            26% {
                transform: rotateY(-47deg) rotateX(-15deg) rotateZ(15deg) scale(0);
            }

            34%,
            100% {
                transform: rotateY(-47deg) rotateX(-15deg) rotateZ(15deg) scale(1);
            }
        }

        @keyframes box-scale5 {
            26% {
                transform: rotateY(-47deg) rotateX(-15deg) rotateZ(15deg) scale(0);
            }

            34%,
            100% {
                transform: rotateY(-47deg) rotateX(-15deg) rotateZ(15deg) scale(1);
            }
        }

        @-webkit-keyframes box-move6 {
            36% {
                transform: translate(var(--x), var(--y));
            }

            49%,
            52% {
                transform: translate(0, 0);
            }

            80% {
                transform: translate(0, -32px);
            }

            90%,
            100% {
                transform: translate(0, 188px);
            }
        }

        @keyframes box-move6 {
            36% {
                transform: translate(var(--x), var(--y));
            }

            49%,
            52% {
                transform: translate(0, 0);
            }

            80% {
                transform: translate(0, -32px);
            }

            90%,
            100% {
                transform: translate(0, 188px);
            }
        }

        @-webkit-keyframes box-scale6 {
            30% {
                transform: rotateY(-47deg) rotateX(-15deg) rotateZ(15deg) scale(0);
            }

            38%,
            100% {
                transform: rotateY(-47deg) rotateX(-15deg) rotateZ(15deg) scale(1);
            }
        }

        @keyframes box-scale6 {
            30% {
                transform: rotateY(-47deg) rotateX(-15deg) rotateZ(15deg) scale(0);
            }

            38%,
            100% {
                transform: rotateY(-47deg) rotateX(-15deg) rotateZ(15deg) scale(1);
            }
        }

        @-webkit-keyframes box-move7 {
            40% {
                transform: translate(var(--x), var(--y));
            }

            53%,
            52% {
                transform: translate(0, 0);
            }

            80% {
                transform: translate(0, -32px);
            }

            90%,
            100% {
                transform: translate(0, 188px);
            }
        }

        @keyframes box-move7 {
            40% {
                transform: translate(var(--x), var(--y));
            }

            53%,
            52% {
                transform: translate(0, 0);
            }

            80% {
                transform: translate(0, -32px);
            }

            90%,
            100% {
                transform: translate(0, 188px);
            }
        }

        @-webkit-keyframes box-scale7 {
            34% {
                transform: rotateY(-47deg) rotateX(-15deg) rotateZ(15deg) scale(0);
            }

            42%,
            100% {
                transform: rotateY(-47deg) rotateX(-15deg) rotateZ(15deg) scale(1);
            }
        }

        @keyframes box-scale7 {
            34% {
                transform: rotateY(-47deg) rotateX(-15deg) rotateZ(15deg) scale(0);
            }

            42%,
            100% {
                transform: rotateY(-47deg) rotateX(-15deg) rotateZ(15deg) scale(1);
            }
        }

        @-webkit-keyframes ground {

            0%,
            65% {
                transform: rotateX(90deg) rotateY(0deg) translate(-48px, -120px) translateZ(100px) scale(0);
            }

            75%,
            90% {
                transform: rotateX(90deg) rotateY(0deg) translate(-48px, -120px) translateZ(100px) scale(1);
            }

            100% {
                transform: rotateX(90deg) rotateY(0deg) translate(-48px, -120px) translateZ(100px) scale(0);
            }
        }

        @keyframes ground {

            0%,
            65% {
                transform: rotateX(90deg) rotateY(0deg) translate(-48px, -120px) translateZ(100px) scale(0);
            }

            75%,
            90% {
                transform: rotateX(90deg) rotateY(0deg) translate(-48px, -120px) translateZ(100px) scale(1);
            }

            100% {
                transform: rotateX(90deg) rotateY(0deg) translate(-48px, -120px) translateZ(100px) scale(0);
            }
        }

        @-webkit-keyframes ground-shine {

            0%,
            70% {
                opacity: 0;
            }

            75%,
            87% {
                opacity: 0.2;
            }

            100% {
                opacity: 0;
            }
        }

        @keyframes ground-shine {

            0%,
            70% {
                opacity: 0;
            }

            75%,
            87% {
                opacity: 0.2;
            }

            100% {
                opacity: 0;
            }
        }

        @-webkit-keyframes mask {

            0%,
            65% {
                opacity: 0;
            }

            66%,
            100% {
                opacity: 1;
            }
        }

        @keyframes mask {

            0%,
            65% {
                opacity: 0;
            }

            66%,
            100% {
                opacity: 1;
            }
        }

        /* ====================================================== */
        .page-loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 255, 1.0);
            /* Adjust the background color and opacity as needed */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .loaders {
            border: 8px solid #f3f3f3;
            border-top: 8px solid #3498db;
            /* Adjust the loader colors as needed */
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
        }

        .loading-text {
            margin-top: 20px;
            font-size: 18px;
            color: #333;
            /* Adjust the text color as needed */
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Page loader ends */

        /* hero positioning */
        .box {
            position: absolute;
        }

        .box1 {
            top: 100px;
            left: -100px;
            z-index: 3;
        }

        .box3 {
            top: 25%;
            left: 73%;
            overflow: hidden;
            z-index: -1;
        }
    </style>
    <script src="jquery.js"></script>
</head>

<body class="bg-dark text-white backgroundStyle " id="">
    <!-- Page Loading Animation -->
    <div class="page-loader">
        <div class="loaders"></div>
        <div class="loading-text text-white">applying changes...</div>
        <div class="loader">
            <div class="box box0">
                <div></div>
            </div>
            <div class="box box1">
                <div></div>
            </div>
            <div class="box box2">
                <div></div>
            </div>
            <div class="box box3">
                <div></div>
            </div>
            <div class="box box4">
                <div></div>
            </div>
            <div class="box box5">
                <div></div>
            </div>
            <div class="box box6">
                <div></div>
            </div>
            <div class="box box7">
                <div></div>
            </div>
            <div class="ground">
                <div></div>
            </div>
        </div>
    </div>
    <!-- Loading animation content ends -->

    <!-- <section class="editable mt-2 text-white" id="section-header"> -->
    <div data-aos="fade-up" data-aos-duration="2000" class="container-fluid editable mt-2 text-white"
        id="section-header">
        <div class="row">
            <!-- hero text -->
            <div class="col-sm-12 col-md-6 col-lg-6 pt-5 text-center">
                <h1 class="fw-bold pt-5 text-center">I'm Malaloum Mireille</h1>
                <h3 class="text-center">Web developers</h3>
                <h5 class="text-center">Bringing your ideas to lives</h2>
                    <a href="#section-contact"><button class="btn btn-outline-primary mt-2 me-3">Hire Me</button></a>
            </div>
            <!-- end of hero text -->
            <!--=============================================== -->
            <!-- image hero-->
            <div class="col-sm-12 col-md-6 col-lg-6 " id="hero-image box">
                <svg width="200" height="200" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="box box3">
                    <g clip-path="url(#clip0_105_323)">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M106.973 87.6003C103.915 93.0385 96.0852 93.0385 93.027 87.6003L50.4686 11.9213C47.4696 6.58851 51.3234 7.97602e-06 57.4416 5.67316e-06L142.558 0C148.677 -5.34872e-07 152.53 6.58849 149.531 11.9213L106.973 87.6003ZM87.6003 106.973C93.0385 103.915 93.0385 96.0851 87.6003 93.0269L11.9213 50.4685C6.58848 47.4696 -1.12708e-05 51.3233 -1.15382e-05 57.4415L-1.52588e-05 142.558C-1.55262e-05 148.677 6.58849 152.53 11.9213 149.531L87.6003 106.973ZM106.973 112.4C103.915 106.961 96.0852 106.962 93.027 112.4L50.4686 188.079C47.4697 193.412 51.3234 200 57.4416 200H142.558C148.677 200 152.53 193.411 149.531 188.079L106.973 112.4ZM112.4 93.027C106.961 96.0853 106.961 103.915 112.4 106.973L188.079 149.531C193.412 152.53 200 148.677 200 142.558V57.4417C200 51.3235 193.411 47.4697 188.079 50.4687L112.4 93.027Z"
                            fill="url(#paint0_linear_105_323)" />
                    </g>
                    <defs>
                        <linearGradient id="paint0_linear_105_323" x1="100" y1="0" x2="100" y2="200"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#DF99F7" />
                            <stop offset="1" stop-color="#FFDBB0" />
                        </linearGradient>
                        <clipPath id="clip0_105_323">
                            <rect width="200" height="200" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                <img src="me.png" alt="my-image" class="w-50 box1" id="img-hero" style="">
            </div>
            <!-- end of hero image -->
        </div>
    </div>


    <!-- </section> -->


    <!-- header section ends -->

    <!-- About section starts -->
    <section class="editable" id="section-about" data-aos="fade-left" data-aos-duration="2000">
        <div class="container pt-5 bg-transparent text-center w-100 mb-5">
            <h1 class="display-1 fw-bold text-primary">About Me</h1e=>
                <div>
                    <p class="lead text-white">Make beutiful and impactfull websites, I don't just build websites I
                        build
                        experience
                    </p>
                </div>
        </div>


        <div class="container position-relative py-0 ">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6" id="about">
                    <img src="me.png" alt="my picture" id="about-image" class="w-75">
                </div>
                <div class="px-3 px-xl-0 text-white fs-5 col-sm-12 col-md-6 col-lg-6">
                    <h1 class="text-primary text-center pt-5">Who I Am</h1>
                    I am MALALOUM DJOU M. , I'am a Software Engineer, I have a great Passion and interest with anything
                    concerning IT(Information Technology). I live in DOUALA CAMEROON. I have always love involving
                    myself in
                    anything concerning computing since I was little, but my passion is more concern in codding, since I
                    stated learning some programming in secondary school. So after secondary school I have decide to
                    study
                    Software Engineering, where I have learn FrontEnd Development and BackEnd Develpement, with a
                    certification in Networking with Cisco Parket Tracer, AT VTIB(Vocational Training Institude
                    Besttechnology).

                    <ul class="mt-3 list-unstyled">
                        <li><i class="bi bi-check text-white"></i>Master of web Development</li>
                        <li><i class="bi bi-check text-white"></i>6+ years of professional UX design experience</li>
                        <li><i class="bi bi-check text-white"></i>Expertise in conducting user research and usability
                            testing</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- About section ends -->

    <!-- Services/skills Section starts -->
    <section class="mt-5" id="section-skills" data-aos="fade-right" data-aos-duration="2000">
        <div class="container">
            <h1 editable="inline" class="display-1 fw-bold text-primary text-center pb-5">Skills</h1>
            <div class="row">
                <!-- ===================== -->
                <div class="col-sm-12 col-md-6 col-lg-4 mt-3 gx-5 card bg-dark">
                    <h1 class="">FrontEnd Development</h1>
                    <p class="text-justify fs-5">As a FrontEnd developer I can used the following languages</p>
                    <div class="card-body">
                        <ul class="list-unstyled fs-5">
                            <li><i class="bi bi-check text-primary"></i> HTML</li>
                            <li><i class="bi bi-check text-primary"></i> CSS</li>
                            <li><i class="bi bi-check text-primary"></i>Javascript</li>
                        </ul>
                    </div>
                </div>
                <!-- ====================== -->
                <div class="col-sm-12 col-md-6 col-lg-4 mt-3 gx-5 card bg-dark">
                    <h1 class="">BackEnd Development</h1>
                    <p class="text-justify fs-5">As a BackEnd developer I can used the following languages</p>
                    <div class="card-body">
                        <ul class="list-unstyled fs-5 ps-2">
                            <li><i class="bi bi-check text-primary"></i> PHP</li>
                            <li><i class="bi bi-check text-primary"></i>Ajax</li>
                            <li><i class="bi bi-check text-primary"></i> Python</li>
                            <li><i class="bi bi-check text-primary"></i>Javascript</li>
                        </ul>
                    </div>
                </div>
                <!-- ===================== -->
                <div class="col-sm-12 col-md-6 col-lg-4 mt-3 gx-5 card bg-dark">
                    <h1 class="">Frameworks</h1>
                    <p class="text-justify fs-5">As a web developer I can used the following framworks</p>
                    <div class="card-body">
                        <ul class="list-unstyled fs-5 ps-2">
                            <li><i class="bi bi-check text-primary"></i>ReactJS</li>
                            <li><i class="bi bi-check text-primary"></i>Bootstrap</li>
                            <li><i class="bi bi-check text-primary"></i>Tailwin</li>
                            <li><i class="bi bi-check text-primary"></i>Laravel</li>
                        </ul>
                    </div>
                </div>
                <!-- ======================= -->

                <!-- ======================= -->
            </div>
        </div>
    </section>
    <!-- Services/skills Section ends -->

    <!-- my works section starts -->
    <section class="editable image-section" id="section-work" data-aos="fade-up" data-aos-duration="2000">
        <div class="container">
            <h1 class="text-center text-primary text-capitalize display-4 fw-bold pb-5 mt-5">project i have work on</h1>
            <div class="row">
                <!-- col1 -->
                <div class="col-sm-12 col-md-4 col-lg-3 rounded img-col">
                    <div class="card card-derk card-dark bg-dark h-100">
                        <div class="work-wd"><img src="img/img.jpg" alt="" class="image-preview w-100 rounded-top"
                                style="">
                        </div>
                        <input type="file" id="work1-upload" accept="image/*" class="image-upload"
                            style="display: none;">
                        <h3 class="text-center pt-3 pb-1 text-capitalize fw-bold">school Websites
                        </h3>
                        <p class="text-justify fs-5">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis unde at error officiis
                            perspiciatis vel magnam repellat ipsum, impedit ea?
                            <a href="#">example-school.com</a>
                        </p>
                    </div>
                </div>
                <!-- col1 -->

                <!-- col2 -->
                <div class="col-sm-12 col-md-4 col-lg-3 rounded img-col">
                    <div class="card card-derk card-dark bg-dark h-100">
                        <img src="img/img.jpg" alt="" class="image-preview w-100 rounded-top">
                        <input type="file" id="work2-upload" accept="image/*" class="image-upload"
                            style="display: none;">
                        <h3 class="text-center pt-3 pb-1 text-capitalize fw-bold" contenteditable="true">school Websites
                        </h3>
                        <p class="text-justify fs-5">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis unde at error officiis
                            perspiciatis vel magnam repellat ipsum, impedit ea?
                            <a href="#">example-school.com</a>
                        </p>
                    </div>
                </div>
                <!-- col2 -->

                <!-- col3 -->
                <div class="col-sm-12 col-md-4 col-lg-3 rounded img-col">
                    <div class="card card-derk card-dark bg-dark h-100 img-col">
                        <img src="img/img.jpg" alt="" class="image-preview w-100 rounded-top">
                        <input type="file" id="work3-upload" accept="image/*" class="image-upload"
                            style="display: none;">
                        <h3 class="text-center pt-3 pb-1 text-capitalize fw-bold" contenteditable="true">school Websites
                        </h3>
                        <p class="text-justify fs-5">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis unde at error officiis
                            perspiciatis vel magnam repellat ipsum, impedit ea?
                            <a href="#">example-school.com</a>
                        </p>
                    </div>
                </div>
                <!-- col3 -->

                <!-- col4 -->
                <div class="col-sm-12 col-md-4 col-lg-3 rounded img-col">
                    <div class="card card-derk card-dark bg-dark h-100">
                        <img src="img/img.jpg" alt="" class="image-preview w-100 rounded-top">
                        <input type="file" id="work4-upload" accept="image/*" class="image-upload"
                            style="display: none;">
                        <h3 class="text-center pt-3 pb-1 text-capitalize fw-bold">school Websites
                        </h3>
                        <p class="text-justify fs-5">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis unde at error officiis
                            perspiciatis vel magnam repellat ipsum, impedit ea?
                            <a href="#">example-school.com</a>
                        </p>
                    </div>
                </div>
                <!-- col4 -->
            </div>
        </div>
    </section>


    <!-- my works section ends -->

    <!-- contact section starts -->
    <section data-aos="zoom-in" data-aos-duration="2000" class="mt-5" id="section-contact">
        <h1 class="text-center fw-bold text-primary display-4">Contact Us</h1>
        <p class="text-center fs-5">For any inquiries don't hesitate to contact me and I will shortly
            reply.</p>
        <!--
    ===============================================
   *                  footer starts                 *
    ===============================================
  -->

        <div class="container text-white mt-5">
            <div class="row">
                <div class="col-sm-4  my-3">
                    <i class="fa fa-phone" aria-hidden="true" style="font-size: 30px;"></i>
                    <p class="h3">Phone</p>
                    <p>(+237) 652-03-97-33</p>
                    <p>(+237) 674-95-74-96</p>
                </div>

                <div class="col-sm-4 my-3">
                    <i class="fa fa-location" aria-hidden="true" style="font-size: 30px;"></i>
                    <p class="h3">Location</p>
                    <p>Bepanda,Douala Cameroon</p>
                </div>

                <div class="col-sm-4 my-3">
                    <i class="fa fa-envelope" aria-hidden="true" style="font-size: 30px;"></i>
                    <p class="h3">EMAIL</p>
                    <p>malaloummireille@gmail.com</p>
                </div>
                <!--
    ===============================================
   *                  footer ends                   *
    ===============================================
  -->

    </section>
    <!-- contact section ends -->




    <!-- Include Bootstrap and jQuery JS -->
    <script src="bootstrap5-js.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>

        $(document).ready(function () {
            /* Add loading animation */
            setTimeout(function () {
                $(".page-loader").hide();
            }, 3000); // Hide loader after 4000 milliseconds (4 seconds)

            // loading animation enda
        });




    </script>

    <!-- link to aos animation-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>