<?php
include "header.php";
?>
<?php
$msg = '';
if (isset($_SESSION['creat'])) {
    $msg = 'Please <a href="login.php" class="underline text-white">LOGIN</a> first';
}
?>
<style>
    form {
        width: 400px;
        background-color: white !important;
    }

    body {
        background: linear-gradient(25deg, rgb(0, 0, 255), rgb(0, 0, 0), blue) !important;
    }

    .boxs div {
        position: absolute;
        width: 100px;
        height: 40px;
        background-color: transparent;
        border: 6px solid rgba(255, 255, 255, 0.8);
    }

    .boxs div:nth-child(1) {
        top: 12%;
        left: 42%;
        animation: animate 7s linear infinite;
    }

    .boxs div:nth-child(2) {
        top: 70%;
        left: 50%;
        animation: animate 7s linear infinite;
    }

    .boxs div:nth-child(3) {
        top: 17%;
        left: 6%;
        animation: animate 9s linear infinite;
    }

    .boxs div:nth-child(4) {
        top: 20%;
        left: 60%;
        animation: animate 10s linear infinite;
    }

    .boxs div:nth-child(5) {
        top: 67%;
        left: 10%;
        animation: animate 6s linear infinite;
    }

    .boxs div:nth-child(6) {
        top: 80%;
        left: 70%;
        animation: animate 12s linear infinite;
    }

    .boxs div:nth-child(7) {
        top: 60%;
        left: 80%;
        animation: animate 15s linear infinite;
    }

    .boxs div:nth-child(8) {
        top: 32%;
        left: 25%;
        animation: animate 16s linear infinite;
    }

    .boxs div:nth-child(9) {
        top: 90%;
        left: 25%;
        animation: animate 9s linear infinite;
    }

    .boxs div:nth-child(10) {
        top: 20%;
        left: 80%;
        animation: animate 5s linear infinite;
    }

    @keyframes animate {
        0% {
            transform: scale(0) translateY(0) rotate(0);
            opacity: 1;
        }

        100% {
            transform: scale(1.3) translateY(-90px) rotate(360deg);
            opacity: 0.3;
        }
    }
</style>

<!-- Animations div's -->

<div class="boxs mt-5 mx-auto">
    <div class="text-white">Get stated</div>
    <div class="text-white">Start jouney</div>
    <div class="text-white">Porfoliobuild</div>
    <div class="text-white">Get stated</div>
    <div class="text-white">Welcome</div>
    <div class="text-white">Let's start</div>
    <div class="text-white">Porfoliobuild</div>
    <div class="text-white">Start jouney</div>
    <div class="text-white">Follow steps</div>
    <div class="text-white">Start jouney</div>
</div>

<!-- ======================================================================================================================= -->
<!-- ====================================================== -->
<!--  -->
<div class="container my-5" id="choice">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card bg-light rounded-0">
                <div class="card-body text-center">
                    <h3 class="text-muted">Ready to have your portfolio?</h3>
                    <hr>
                    <div class="bg-primary text-white fw-bold p-2" id="msg"></div>
                    </p>
                    <div class="text-center">
                        <button class="btn btn-primary col-md-5 w-50 p-4 rounded-pill" id="verify-session">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            <i class="right-arrow">Follow Steps</i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  -->

<!-- ====================================================== -->

<!-- ====================================================== -->
<script>
    $(function () {
        // Send an Ajax request
        $("#verify-session").on("click", function () {
            $.ajax({
                type: "POST",
                url: "commandProcess.php",
                success: function (response) {
                    // Execute code based on the response 
                    if (response == "Login First") {
                        $("#msg").text(response);
                        var log = '<a href = "login.php" class="text-white ms-2">LOGIN</a>';
                        $("#msg").append(log);

                    }
                    else {
                        if (response == "login already") {
                            location = "user-dashboard/Dashboard.php";
                        }
                    }
                }

            });
        });
    });
</script>








<?php
include "footer.php";
?>