<?php
include "header.php";

?>
<style>
    form {
        width: 400px;
        background: white !important;
    }

    body {
        background-image: url(img/home.jpg) !important;
        background-position: center;
        background-size: 100vh;
        background-repeat: no-repeat;
    }
</style>
<section class="my-5">
    <div class="container">
        <h1 class="text-center text-primary mb-5">CHOOSE A PlAN</h1>
        <div class="row">
            <!-- first colunm -->
            <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                <div class="card text-center shadow border-primary">
                    <h6 class="pt-3 mb-3">1 MONTH</h6>
                    <h1 class="text-primary mb-0">$1.99</h1>
                    <div class="text-muted mb-4">USD/month</div>
                    <input type="submit" class="mx-auto btn btn-outline-primary w-50 p-1 mb-5" value="SELECT">
                </div>
            </div>
            <!-- ======================================== -->
            <!-- second colunm -->
            <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                <div class="card text-center shadow border-primary">
                    <h6 class="pt-3 mb-3">12 MONTH</h6>
                    <h1 class="text-primary mb-0">$11.99</h1>
                    <div class="text-muted mb-4">USD/month</div>
                    <input type="submit" class="mx-auto btn btn-outline-primary w-50 p-1 mb-5" value="SELECT">
                </div>
            </div>
            <!-- ============================================ -->
            <!-- third colunm -->
            <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                <div class="card text-center shadow border-primary">
                    <h6 class="pt-3 mb-3">24 MONTH</h6>
                    <h1 class="text-primary mb-0">$23.99</h1>
                    <div class="text-muted mb-4">USD/month</div>
                    <input type="submit" class="mx-auto btn btn-outline-primary w-50 p-1 mb-5" value="SELECT">
                </div>
            </div>
            <!-- ============================================== -->
        </div>
    </div>
</section>



<?php
include "footer.php";
?>