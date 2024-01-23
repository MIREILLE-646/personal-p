<?php
session_start();
include 'dbc/functions.php';
secure();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Section</title>
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

        /* header style section starts */
        /* Style the editable sections */
        [contenteditable] {
            outline: none;
        }

        a {
            cursor: pointer;
        }

        .editable {
            border: 3px dashed #007bff;
            padding: 10px;
            cursor: pointer;
            margin-bottom: 20px;
        }

        #section-header {}

        #icon-container {
            display: none;
        }

        #section-header:hover #icon-container {
            display: block;
        }

        @media only screen and (max-width:768) {
            .section-header {
                background-color: red;
                /* position: absolute; */
                /* top: 60%;
                left: 10%; */

            }
        }

        #hero-image .wave-bg {
            /* position: absolute;
            z-index: 1;
            transform: rotateY(90%); */
        }

        #hero-image .img {
            /* position: relative;
            z-index: -2; */
        }


        #hero-image label {
            cursor: pointer;
        }

        #hero-icon {
            position: absolute;
            display: none;
        }

        #hero-image:hover #hero-icon {
            display: block;
        }

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

        #theme {
            cursor: pointer;
        }

        input[type="file"] {
            display: none;
            /* header style section ends */
        }

        /* About section starts */
        #about-icon {
            position: absolute;
            display: none;
        }

        #about:hover #about-icon {
            display: block;
        }


        #icon-about {
            position: absolute;
            display: none;
        }

        #section-about:hover #icon-about {
            display: block;
        }

        #icon-skills {
            display: none;
        }

        #section-skills:hover #icon-skills {
            display: block;
        }

        /* my work section starts */

        /* #work-icon {
            display: none;
        }

        #section-work:hover #work-icon {
            display: block;
        } */
        #background {
            cursor: pointer;
        }

        .wk-icon {
            position: absolute;
            left: 40%;
            bottom: 70%;
        }

        .wk-icon {
            display: none;
        }

        .img-col:hover .wk-icon {
            display: block;
            background-color: blue !important;
            opacity: 0.5;
        }


        /* my work section ends */
        /* contact form */
        #contact-icon {
            display: none;
        }

        #section-contact:hover #contact-icon {
            display: block;
        }

        /* contact form ends */

        /* About section ends */

        /* .bg-image { 
            background-image: url('img/web-design.jpg');
        }

        .overlay {
            width: 100%;
            background: rgb(0, 0, 0, 0.8);
        }  */
    </style>
    <script src="jquery.js"></script>
</head>

<body class="bg-dark text-white backgroundStyle " id="">
    <!-- Page Loading Animation -->
    <!-- <div class="page-loader">
        <div class="loaders"></div>
        <div class="loading-text text-white">Loading...</div>
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
    </div> -->
    <!-- present -->
    <div class="float-end mt-3">
        <a href="present.php" target="_blank">
            <button class="btn btn-primary" id="submitData"><i class="bi bi-play text-white"></i>Present</button>
        </a>
    </div>
    <!-- present ends -->
    <!-- header section starts -->
    <div class="bg-light">
        <div><span class="badge badge-pill badge-primary mt-0">
                <a href="user-dashboard/Dashboard.php"><i class="bi bi-arrow-left-circle-fill fs-2"></i></a>
            </span></div><br>
        <span class="badge badge-pill badge-primary mt-3" id="theme"><i
                class="bi bi-palette me-3 text-muted ps-1 pt-5 fs-4"></i>
            Theme</span>
        <button class="ms-5 badge badge-pill badge-primary mt-3" id="backgroundChange">
            <i class="bi bi-palette me-3 text-muted ps-1 pt-5 fs-4"></i>
            Change background to white
        </button>
        <div class="option-list border" id="theme-content" style="width:20%; display:none;">
            <form action="form-control border">
                <input type="radio" class="ms-4" name="color" id="opt1"><label for="opt1" class=""><span <span
                        class="badge badge-pill badge-dark">black</span>
                    <span class="badge badge-light">white</span>
                    <span class="badge badge-primary">blue</span>
                </label><br>
                <!-- ================= -->
                <input type="radio" class="ms-4" name="color" id="opt2"><label for="opt2" class=""><span <span
                        class="badge badge-dark">black</span>
                    <span class="badge badge-light">white</span>
                    <span class="badge badge-danger">red</span>
                </label><br>
                <!-- =============== -->
                <input type="radio" class="ms-4" name="color" id="opt3"><label for="opt3" class=""><span <span
                        class="badge badge-dark">black</span>
                    <span class="badge badge-light">white</span>
                    <span class="badge badge-success">green</span>
                </label><br>
                <!-- ============================== -->
            </form>
        </div>
    </div>


     <section class="editable mt-2 text-white section" id="section"> 
    <div data-aos="fade-up" data-aos-duration="2000" class="section container-fluid editable mt-2 text-white"
        id="section-header">
        <div class="row">
            <!-- hero text -->
            <div class="col-sm-12 col-md-6 col-lg-6 pt-5 text-center">
                <h1 class="fw-bold pt-5 text-center editableHeading headingName" contenteditable="true">I'm
                    <?php echo $_SESSION['fname'] . ' ' . $_SESSION['lname'] ?>
                </h1>
                <h3 class="text-center headingProf" contenteditable="true">Web developers</h3>
                <h5 class="text-center headingkey" contenteditable="true">Bringing your ideas to lives</h2>
                    <a href="#section-contact"><button class="btn btn-outline-primary mt-2 me-3">Hire Me</button></a>
            </div>
            <!-- end of hero text -->
            <!--=============================================== -->
            <!-- image hero-->
            <div class="col-sm-12 col-md-6 col-lg-6 hero-image" id="box">
                <label for="hero-upload">
                    <i class="bi bi-card-image me-3 text-white fs-2 hero-iconImage" id="hero-iconImage"></i></label>
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
                <img src="img/placeholder.png" alt="my-image" class="w-50 box1 rounded img-hero imageMe" id="img-hero1" style="">


                <input type="file" id="hero-upload" data-num="1" class="hero-upload" accept="image/*">
            </div>
            <!-- end of hero image -->
        </div>
        <div class="bg-dark p-1 rounded text-center w-25 mx-auto mt-3" id="icon-container">
            <i class="bi bi-plus-circle me-3 duplicateIcon" data-bs-toggle="tooltip" data-bs-placement="top"
                title="Duplicate section"></i>
            <i class="bi bi-pencil-square me-3 edit focusIcon" title="edit section" id=""></i>
            <i class="bi bi-trash3 me-3 delete" title="Delete section"></i>
        </div>
    </div>
 </section>


    <!-- header section ends -->

    <!-- About section starts -->
    <section class="editable" id="section-about" data-aos="fade-left" data-aos-duration="2000">
        <div class="container pt-5 bg-transparent text-center w-100 mb-5">
            <h1 contenteditable="true" editable="inline" class="display-1 fw-bold text-primary">About Me</h1>
            <div contenteditable="true" editable="rich">
                <p class="lead">Make beutiful and impactfull websites, I don't just build websites I build experience
                </p>
            </div>
        </div>


        <div class="container position-relative py-0 ">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6" id="about">
                    <label for="about-upload">
                        <i class="bi bi-card-image me-3 text-white fs-2" id="about-icon"></i></label>
                    <img src="img/placeholder.png" alt="my picture" id="about-image" class="w-75">
                    <input type="file" id="about-upload" accept="image/*">
                </div>
                <div contenteditable="true" class="px-3 px-xl-0 text-white fs-5 col-sm-12 col-md-6 col-lg-6">
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
                    <div contenteditable="false"
                        class="bg-dark p-1 rounded text-center w-25 mx-auto mt-3 position-absolute" id="icon-about">
                        <i class="bi bi-plus-circle me-3 "></i>
                        <i class="bi bi-pencil-square me-3"></i>
                        <i class="bi bi-trash3 me-3"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About section ends -->

    <!-- Services/skills Section starts -->
    <section class="editable" contenteditable="true" id="section-skills" data-aos="fade-right" data-aos-duration="2000">
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
        <div contenteditable="false" class="bg-dark p-1 rounded text-center w-25 mx-auto mt-3" id="icon-skills">
            <i class="bi bi-plus-circle me-3 "></i>
            <i class="bi bi-pencil-square me-3"></i>
            <i class="bi bi-trash3 me-3"></i>
        </div>
    </section>
    <!-- Services/skills Section ends -->

    <!-- my works section starts -->
    <section class="editable image-section" id="section-work" data-aos="fade-up" data-aos-duration="2000">
        <div class="container">
            <h1 class="text-center text-primary text-capitalize display-4 fw-bold pb-5">project i have work on</h1>
            <div class="row">
                <!-- col1 -->
                <div class="col-sm-12 col-md-4 col-lg-3 rounded img-col">
                    <div class="card card-derk card-dark bg-dark h-100">
                        <label for="work1-upload" class="">
                            <i class="bi bi-card-image me-3 text-white fs-2 upload-icon"></i>
                        </label>
                        <div class="work-wd"><img src="img/placeholder-image.png" alt="" class="image-preview w-100 rounded-top"
                                style="">
                        </div>
                        <input type="file" id="work1-upload" accept="image/*" class="image-upload"
                            style="display: none;">
                        <h3 class="text-center pt-3 pb-1 text-capitalize fw-bold" contenteditable="true">school Websites
                        </h3>
                        <p class="text-justify fs-5" contenteditable="true">
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
                        <label for="work2-upload" class="">
                            <i class="bi bi-card-image me-3 text-white fs-2 upload-icon"></i>
                        </label>
                        <img src="img/placeholder-image.png" alt="" class="image-preview w-100 rounded-top">
                        <input type="file" id="work2-upload" accept="image/*" class="image-upload"
                            style="display: none;">
                        <h3 class="text-center pt-3 pb-1 text-capitalize fw-bold" contenteditable="true">school Websites
                        </h3>
                        <p class="text-justify fs-5" contenteditable="true">
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
                        <label for="work3-upload" class="">
                            <i class="bi bi-card-image me-3 text-white fs-2 upload-icon"></i>
                        </label>
                        <img src="img/placeholder-image.png" alt="" class="image-preview w-100 rounded-top">
                        <input type="file" id="work3-upload" accept="image/*" class="image-upload"
                            style="display: none;">
                        <h3 class="text-center pt-3 pb-1 text-capitalize fw-bold" contenteditable="true">school Websites
                        </h3>
                        <p class="text-justify fs-5" contenteditable="true">
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
                        <label for="work4-upload" class=" ">
                            <i class="upload-icon bi bi-card-image me-3 text-white fs-2"></i>
                        </label>
                        <img src="img/placeholder-image.png" alt="" class="image-preview w-100 rounded-top">
                        <input type="file" id="work4-upload" accept="image/*" class="image-upload"
                            style="display: none;">
                        <h3 class="text-center pt-3 pb-1 text-capitalize fw-bold" contenteditable="true">school Websites
                        </h3>
                        <p class="text-justify fs-5" contenteditable=" true">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis unde at error officiis
                            perspiciatis vel magnam repellat ipsum, impedit ea?
                            <a href="#">example-school.com</a>
                        </p>
                    </div>
                </div>
                <!-- col4 -->
            </div>
        </div>
        <div class="bg-dark p-1 rounded text-center w-25 mx-auto mt-3" id="work-icon">
            <i class="bi bi-plus-circle me-3" data-bs-toggle="tooltip" data-bs-placement="top"
                title="Duplicate section"></i>
            <i class="bi bi-pencil-square me-3"></i>
            <i class="bi bi-trash3 me-3"></i>
        </div>
    </section>


    <!-- my works section ends -->

    <!-- contact section starts -->
    <section data-aos="zoom-in" data-aos-duration="2000" class="editable" contenteditable="true" id="section-contact">
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
                    <p>
                        <?php echo $_SESSION['tel'] ?>
                    </p>
                    <p>
                        <?php echo $_SESSION['tel'] ?>
                    </p>
                </div>

                <div class="col-sm-4 my-3">
                    <i class="fa fa-location" aria-hidden="true" style="font-size: 30px;"></i>
                    <p class="h3">Location</p>
                    <p>
                        <?php echo $_SESSION['country']; ?>,
                        <?php echo $_SESSION['city']; ?>
                    </p>
                </div>

                <div class="col-sm-4 my-3">
                    <i class="fa fa-envelope" aria-hidden="true" style="font-size: 30px;"></i>
                    <p class="h3">EMAIL</p>
                    <p>
                        <?php echo $_SESSION['email'] ?>
                    </p>
                </div>
                <div class="bg-dark p-1 rounded text-center w-25 mx-auto mt-3" id="contact-icon">
                    <i class="bi bi-plus-circle me-3" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Duplicate section"></i>
                    <i class="bi bi-pencil-square me-3"></i>
                    <i class="bi bi-trash3 me-3"></i>
                </div>
                <!--
    ===============================================
   *                  footer ends                   *
    ===============================================
  -->

    </section>
    <!-- contact section ends -->



    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <h2>About Us</h2>
                    <!-- Undo button outside of sections -->
                    <button class="btn btn-warning undo-btn">Undo</button>
                    <!-- Example HTML for multiple sections -->
                    <form method="post" action="cmstest.php" id="submit">
                        <div class="editable" id="section1">
                            <p>This is section 1. Click to edit.</p>
                            <input type="text" class="form-control edit-input" value="" name="section1Content"
                                id="section1Input">
                            <button type="button" class="btn btn-primary edit-btn">Edit</button>
                            <button type="button" class="btn btn-danger delete-btn">Delete</button>
                            <button type="button" class="btn btn-success duplicate-btn">Duplicate</button>
                        </div>


                        <button type="submit" class="btn btn-dark">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </section>




    <?php
    // db.php - Database connection code
    // $host = 'localhost';
    // $username = 'root';
    // $password = '';
    // $dbname = 'porfoliobuild';

    // $mysqli = new mysqli($host, $username, $password, $dbname);

    // if ($mysqli->connect_error) {
    //     die("Connection failed: " . $mysqli->connect_error);
    // }

    // // submit.php - Handle section submission
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $sectionData = []; // Array to store section data
    
    //     // Assuming user ID is available in your session or via authentication
    //     $userId = 'mM1987'; // Replace with the actual user ID
    
    //     // Loop through each section and collect data
    //     for ($i = 1; $i <= 2; $i++) { // Adjust the loop count based on your sections
    //         $sectionId = "section{$i}Input";
    //         $content = $_POST["section{$i}Content"];

    //         // Add data to the sectionData array
    //         $sectionData[] = [
    //             'section_id' => $sectionId,
    //             'content' => $content
    //         ];
    //     }

    //     // Handle duplicated sections
    //     if (isset($_POST['duplicatedSections'])) {
    //         $duplicatedSections = json_decode($_POST['duplicatedSections'], true);
    //         foreach ($duplicatedSections as $duplicatedSection) {
    //             $sectionId = $duplicatedSection['section_id'];
    //             $content = $duplicatedSection['content'];

    //             // Add duplicated section data to the sectionData array
    //             $sectionData[] = [
    //                 'section_id' => $sectionId,
    //                 'content' => $content
    //             ];
    //         }
    //     }

    //     // Convert the array to JSON
    //     $jsonData = json_encode($sectionData);

    //     // Insert the JSON data into the sections table
    //     $sql = "INSERT INTO template (userID, Tstructure) VALUES (?, ?)";
    //     if ($stmt = $mysqli->prepare($sql)) {
    //         $stmt->bind_param("is", $userId, $jsonData);
    //         if ($stmt->execute()) {
    //             echo "Sections submitted successfully!";
    //         } else {
    //             echo "Error: " . $stmt->error;
    //         }
    //         $stmt->close();
    //     } else {
    //         echo "Error: " . $mysqli->error;
    //     }

    //     $mysqli->close();
    // }
    // ?>


    <!-- Include Bootstrap and jQuery JS -->
    <script src="bootstrap5-js.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- <script>
        // Temporary storage for deleted sections
        var deletedSections = [];

        // jQuery code for enabling editing on click
        $(document).ready(function () {
            var input = $(".edit-input").val($("p").text());
            // Attach event listener to a parent element (container) that exists from the start
            $(".container").on("click", ".editable", function () {
                // Find the input field within the clicked section
                var input = $(this).find(".edit-input");
                // Hide the paragraph and display the input field
                $(this).find("p").hide();
                input.show().val($(this).find("p").text()).focus();
                // Handle blur (when user clicks away)
                input.blur(function () {
                    var newText = $(this).val();
                    // Update the paragraph with the new text
                    $(this).parent().find("p").text(newText);
                    // Hide the input field and show the paragraph again
                    $(this).hide();
                    $(this).parent().find("p").show();
                });
            });

            // Attach event listener to the container for delete button functionality
            $(".container").on("click", ".delete-btn", function () {
                var deletedSection = $(this).parent().clone();
                deletedSections.push(deletedSection);
                $(this).parent().remove();
            });

            // Attach event listener to the container for duplicate button functionality
            $(".container").on("click", ".duplicate-btn", function () {
                var clone = $(this).parent().clone();
                // Clear the input field in the clone
                clone.find("input").val("");
                $(this).parent().after(clone);
            });

            // Attach event listener to the Undo button
            $(".undo-btn").click(function () {
                if (deletedSections.length > 0) {
                    var deletedSection = deletedSections.pop();
                    $(".container").append(deletedSection);
                }
            });
            // $("#submit").submit(function (e) {
            //     e.preventDefault();
            // });
        });
    </script> -->

    <script>

        $(document).ready(function () {

            // operations of duplicate, edit and delete icons starts
            //======================================================================================
            //==========================Clicking on edit icon starts================================
            //======================================================================================
            // Function to set the cursor position to the end of the contenteditable element
            function setEndOfContenteditable(contentEditableElement) {
                var range, selection;
                if (document.createRange) {
                    range = document.createRange();
                    range.selectNodeContents(contentEditableElement);
                    range.collapse(false);
                    selection = window.getSelection();
                    selection.removeAllRanges();
                    selection.addRange(range);
                } else if (document.selection) {
                    range = document.body.createTextRange();
                    range.moveToElementText(contentEditableElement);
                    range.collapse(false);
                    range.select();
                }
            }

            // Function to focus on the contenteditable heading and set the cursor at the end
            function focusOnHeading() {
                var editableHeading = $(".editableHeading");
                editableHeading.focus();
                setEndOfContenteditablee(editableHeading);
            }

            // Click event for the icon
            $(".focusIcon").click(function () {
                focusOnHeading();
            });
            //======================================================================================
            //==========================Clicking on edit icon ends================================
            //======================================================================================

            //======================================================================================
            //==========================Clicking on duplicate icon starts===========================
            //======================================================================================
            // Function to duplicate the entire section
            function duplicateSection($originalSection) {
                var $duplicatedSection = $originalSection.clone();

                // Clear content from duplicated heading
                // $sduplicatedSection.find("[contenteditable]").text("");

                // Append the duplicated section below the original one
                $originalSection.after($duplicatedSection);

                // Initialize AOS for the new section
                AOS.init({ target: $duplicatedSection.get(0) });

                // Scroll to the duplicated section
                $('html, body').animate({
                    scrollTop: $duplicatedSection.offset().top
                }, 1000);
            }

            // Click event for the plus icon using event delegation
            $(document).on("click", ".duplicateIcon", function () {
                var $originalSection = $(this).closest(".section");
                duplicateSection($originalSection);
            });

            // Initialize AOS for the first section
            AOS.init();

            //======================================================================================
            //==========================Clicking on duplicate icon ends=============================


            /* Add loading animation */
            // Show loading text after a certain amount of time
            //  setTimeout(function () {
            //      $(".loading-text").text("Still Loading...");
            //     }, 2000); // Display text after 2000 milliseconds (2 seconds)
            //     setTimeout(function () {
            //            $(".loading-text").text("Building your Portfolio...");
            //  }, 4000); // Display text after 2000 milliseconds (2 seconds)
            //     setTimeout(function () {
            //         $(".loading-text").text("Adding text...");
            //     }, 6000); // Display text after 2000 milliseconds (2 seconds)
            //         // // Hide the page loader once the page is fully loaded
            //  setTimeout(function () {
            //             $(".loading-text").text("Adding multimedia content...");
            //          }, 8000); // Display text after 2000 milliseconds (2 seconds)
            //          setTimeout(function () {
            //             $(".loading-text").text("Almost ready...");
            //        }, 10000); // Display text after 2000 milliseconds (2 seconds)
            //         setTimeout(function () {
            //             $(".page-loader").hide();
            //         }, 12000); // Hide loader after 4000 milliseconds (4 seconds)

            // loasing animation enda
            // choosing themes
            $("#theme").click(function () {
                $("#theme-content").toggle("slow");
            });
            // thems end

            // ==============opt 1 start ====================
            $("#opt1").change(function () {
                $('body').removeClass("bg-dark");
                $('body').css({ 'color': 'black', 'background-color': 'black' });
                // $("#hero-image").removeClass("bg-danger");
                // $("#hero-image").removeClass("bg-success");
                $("#hero-image").css("background", "blue !important");
                $("#hero-image").removeClass("bg-danger");
                $("#hero-image").removeClass("bg-success");
                // $("#hero-image").addClass("bg-primary");
                $("h1").addClass("text-primary");
                $("h1").removeClass("text-danger");
                $("h1").removeClass("text-success");
                $("a").addClass("text-primary");
                $("a").removeClass("text-danger");
                $("a").removeClass("text-success");
                $(".bi").addClass("text-primary");
                $(".bi").removeClass("text-danger");
                $(".bi").removeClass("text-success");
                $("a>button").removeClass("btn-outline-danger");
                $("a>button").removeClass("btn-outline-success");
                $("a>button").addClass("btn-outline-primary");
            });
            // ================end opt 1 ===================

            // ==============opt 2 start ====================
            $("#opt2").change(function () {
                $('body').removeClass("bg-dark");
                $('body').css({ 'color': 'black', 'background-color': 'black' });
                $("#hero-image").removeClass("bg-primary");
                $("#hero-image").removeClass("bg-success");
                // $("#hero-image").addClass("bg-danger");
                $("h1").addClass("text-danger");
                $("a").addClass("text-danger");
                $(".bi").addClass("text-danger");
                $("a>button").removeClass("btn-outline-primary");
                $("a>button").removeClass("btn-outline-success");
                $("a>button").addClass("btn-outline-danger");
            });
            // ================end opt 2 ===================

            // ==============opt 3 start ====================
            $("#opt3").change(function () {
                $('body').removeClass("bg-dark");
                $('body').css({ 'color': 'black', 'background-color': 'black' });
                $("#hero-image").removeClass("bg-primary");
                $("#hero-image").removeClass("bg-danger");
                // $("#hero-image").addClass("bg-success");
                $("h1").removeClass("text-danger");
                $("h1").removeClass("text-primary");
                $("h1").addClass("text-success");
                $("a").removeClass("text-danger");
                $("a").removeClass("text-primary");
                $("a").addClass("text-success");
                $(".bi").removeClass("text-primary");
                $(".bi").removeClass("text-danger");
                $(".bi").addClass("text-success");
                $("a>button").removeClass("btn-outline-primary");
                $("a>button").removeClass("btn-outline-danger");
                $("a>button").addClass("btn-outline-success");
            });
            // ================end opt 3 ===================

            // change hero image
            // Function to handle hero image upload for a specific section
            function handleImageUpload(section) {
                section.find('.hero-image').click('.hero-iconImage', function () {
                    // get selected file from the file input within the specific section
                    var file = section.find('.hero-upload')[0].files[0];
                    if (file) {
                        // create file reader object to read the file
                        var reader = new FileReader();
                        // set up the onload event handler
                        reader.onload = function (e) {
                            // update the image source within the specific section
                            section.find(".img-hero").attr('src', e.target.result);
                        }
                        // Read the file as a data URL
                        reader.readAsDataURL(file);
                    }
                });
            }
            $("#box").click('.hero-iconImage', function () {
                // get selected file from the file input
                var section = $(this).closest('.section');
                handleImageUpload(section);
            });

            // change about image
            $("#about-icon").click(function () {
                // get selected file from the file input
                var file = $("#about-upload")[0].files[0];
                if (file) {
                    //create file reader object to read the file
                    var reader = new FileReader();
                    //set up the onload event handler
                    reader.onload = function (e) {
                        //update the image source with the selected file
                        $("#about-image").attr('src', e.target.result);
                    }
                    //Read the file as a date url
                    reader.readAsDataURL(file);
                }
            });



            // change about image
            $(".wk-icon").click(function () {
                // get selected file from the file input
                var file = $(".image-preview")[0].files[0];
                if (file) {
                    //create file reader object to read the file
                    var reader = new FileReader();
                    //set up the onload event handler
                    reader.onload = function (e) {
                        //update the image source with the selected file
                        $(".image-upload").attr('src', e.target.result);
                    }
                    //Read the file as a date url
                    reader.readAsDataURL(file);
                }
            });



            $(".upload-icon").click(function () {
                // Get the parent card of the clicked icon
                var card = $(this).closest('.card-dark');

                // Find the file input within that card
                var fileInput = card.find('.image-upload')[0];

                // get selected file from the file input
                var file = fileInput.files[0];
                if (file) {
                    // create file reader object to read the file
                    var reader = new FileReader();
                    // set up the onload event handler
                    reader.onload = function (e) {
                        // Find the image within that card and update its source
                        card.find('.image-preview').attr('src', e.target.result);
                    };
                    // Read the file as a data URL
                    reader.readAsDataURL(file);
                }
            });




               // Update heading text on mouseout
        $(".headingName").on("mouseout", function () {
            var newHeadingText = $(this).text();
            // You can add additional logic here, like sending the updated text to the server if needed
            console.log("Updated heading text: " + newHeadingText);
        });
            // AJAX request
                   // Assume you have a button or some trigger to send data

            $("#submitData").on("click", function () {
            // Collect data from your sections
            var sections = [];

            $(".section").each(function (index) {
                var heading = $(this).find(".headingName").text();
                var paragraph = $(this).find(".headingProf").text();
                var paragraphKey = $(this).find(".headingkey").text();
                var images = $(this).find(".imageMe").attr("src");

                sections.push({
                    heading: heading,
                    paragraph: paragraph,
                    paragraphKey: paragraphKey,
                    images: images
                });
z 
            });

            // Log the collected data to verify
            alert(heading);
            console.log(sections);

            // Send data to the server using AJAX
            $.ajax({
                type: "POST",
                url: "processes/hero-section.php",
                data: { sections: sections },
                success: function (response) {
                    // Handle the server response
                    console.log(response);
                }
            });
        });




    });

    </script>

    <!-- link to aos animation-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>