<?php
include "header.php";


$message = '';
if (isset($_SESSION['email_alert'])) {
    $message = "account already exist please try another one!!!";
} else {
    if (isset($_SESSION['account_success'])) {
        $success = "account created successfully!!!";
    }
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

<form action="registrationProcess.php" method="Post"
    class="border mx-auto mt-3 mb-4 py-4 px-3 shadow rounded-4 text-center">
    <div class="mb-3">
        <h1 class="text-center fs-1 mb-2 pt-3">SignUp</h1>
    </div>
    <div class="row mb-3">
        <p class="text-danger text-center">
            <?php echo $message; ?>
            <?php //echo $success; ?>
        </p>
        <div class="col">
            <input type="text" placeholder="First Name" name="fname" class="form-control shadow-none mb-3 py-2"
                required>
        </div>
        <div class="col">
            <input type="text" placeholder="Last Name" name="lname" class="form-control shadow-none mb-3 py-2" required>
        </div>
    </div>
    <!-- collecting gender starts -->
    <div class="">
        <select name="gender" id="gender" class="form-select shadow-none mb-4 rounded">
            <optgroup label="Gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </optgroup>
        </select>
    </div>
    <!-- collecting gender ends -->
    <input type="email" placeholder="Email Address" name="email" class="form-control shadow-none mb-4" required>
    <input type="number" name="phone_no" value="" placeholder="Phone Number"
        class=" mb-4 input form-control shadow-none py-2" id="spinner" autocomplete="off" required>

    <div class="text-center mb-3"><input type="button" id="Send" value="SEND" class="btn btn-dark rounded w-50">
    </div>

    <!-- step 2 -->
    <div id="step2" style="display:none">
        <!-- reside city gender  -->
        <input type="text" name="country" placeholder="Country of residence" id="country"
            class="form-control shadow-none mb-4 rounded" required>

        <!-- reside quater gender  -->
        <input type="text" name="city" placeholder="city of residence" id="city"
            class="form-control shadow-none mb-4 rounded" required>
        <span class="text-danger span4">Enter atleast 8 digits</span>
        <input type="password" placeholder="Password" id="pwd" name="pwd" class=" form-control shadow-none mb-4 py-2"
            required>
        <span class="text-danger span">Password don't match</span>
        <span class="text-success span3">✓✓✓</span>
        <input type="password" placeholder="Confirm Password" id="cpwd" name="cpwd"
            class="form-control shadow-none mb-4 py-2" required>
        <input type="submit" name="register" class="fw-bold btn btn-dark rounded-pill w-50" disabled id="button"
            value="Register">
    </div>
    <input type="checkbox" name="check" id="check" value="accept" class="me-2 mb-3" required>I Agree the <a href="#"
        data-bs-toggle="modal" data-bs-target="#exampleModalLong">Privacy & Policy</a>
    <p>Already have an account!!! <a href="login.php" class="fs-5">SignIn</a></p>
</form>

<?php unset($_SESSION['email_alert']); ?>

<!-- ======================================================================================================================= -->
<script>
    $(function () {
        $(".span").hide();
        $(".span3").hide();
        $(".span4").hide();
        $("#pwd").keyup(function () {
            var pwd = $("#pwd").val();
            if (pwd.length < 8) {
                $(".span4").show();
            }
            else {
                $(".span4").hide();
            }

        });

        $("#cpwd").keyup(function () {
            var pwd = $("#pwd").val();
            var cpwd = $("#cpwd").val();
            if (cpwd === pwd) {
                $("#button").prop("disabled", false);
                $(".span").hide();
                $(".span3").show();
            } else {
                $(".span").show();
                $(".span3").hide();
            }
        });
        $("#Send").click(function () {
            $(this).hide();
            $("#step2").slideDown();
        });
    });
</script>

<?php
include "footer.php";
?>