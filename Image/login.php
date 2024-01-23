<?php
include "header.php";
if (isset($_SESSION['uid'])) {
    header('location:user-dashboard/Dashboard.php');
    die();
}
?>
<?php
$message = '';
if (isset($_SESSION['error'])) {
    $message = "Wroung email or password";
}
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


<form action="processLogin.php" method="post" enctype="multipart/form-data"
    class="border mx-auto mt-3 mb-4 py-4 px-3 shadow rounded-4 text-center">
    <h1 class="text-center mb-4">SignIn</h1>
    <p class="fw-bold text-center">Welcome Back!</p>
    <?php echo '<p class="text-danger">' . $message . '</p>'; ?>
    <input type="email" name="email" placeholder="Email Address" class="form-control shadow-none mb-4" required>
    <input type="password" name="pwd" placeholder="Password" class="mt-4 form-control shadow-none mb-4" required>
    <p><a href="#" data-bs-toggle="modal" data-bs-target="#FogotPassModal" class="">Fogot Password?</a></p>
    <p>D'ont have an account!!! <a href="register.php" class="fs-5">Register!</a></p>
    <input type="submit" name="login" class="fw-bold btn btn-dark rounded-pill w-50" id="button" value="Login">
</form>
<!-- ======================================================================================================================= -->

<!-- ============================================= -->
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="FogotPassModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-md " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Reset Password</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <!-- ================================ -->
                <form class="border mx-auto mt-3 mb-4 py-4 px-3 shadow rounded-4 text-center">
                    <h6 class="text-center mb-4"><u>Reset password</u></h6>
                    <input type="email" placeholder="Email Address" class="form-control shadow-none mb-4" required>
                    <button type="submit" name="submit" class="fw-bold btn btn-dark rounded-pill w-50"
                        id="button">Submit</button>
                </form>
                <!-- ======================================================================================================================= -->

            </div>
        </div>
    </div>
</div>

<?php
unset($_SESSION['error']);
?>
<!-- ============================================== -->









<?php
include "footer.php";
?>