<?php
session_start();
// =========================LOGIN PROCESS=======================

if (isset($_POST['login'])) {
    include "dbc/dbc.php";
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $Password = mysqli_real_escape_string($con, $_POST['pwd']);
    $sql = "SELECT * FROM `login` WHERE  `email`='$email' ";
    $qry = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($qry);
    $present = mysqli_num_rows($qry);
    $HashPassword = $row['pwd'];
    $verify = password_verify($Password, $HashPassword);

    if ($present == 1) {
        if ($verify) {
            $select = mysqli_query($con, "SELECT * FROM `registration` WHERE email = '$email'");
            $data = mysqli_fetch_array($select);
            $email = $data['email'];
            $fname = $data['fname'];
            $lname = $data['lname'];
            $tel = $data['tel'];
            $country = $data['country'];
            $city = $data['city'];
            $uid = $data['userID'];
            $profile = $data['uprofile'];
            $_SESSION['uid'] = $uid;
            $_SESSION['email'] = $email;
            $_SESSION['fname'] = $fname;
            $_SESSION['lname'] = $lname;
            $_SESSION['name'] = $fname . '' . $lname;
            $_SESSION['uprofile'] = $profile;
            $_SESSION['tel'] = $tel;
            $_SESSION['country'] = $country;
            $_SESSION['city'] = $city;
            header("location:user-dashboard/Dashboard.php");
        } else {
            $_SESSION['error'] = "1";
            header("location:login.php");
        }
    } else {
        $_SESSION['error'] = "1";
        header("location:login.php");
    }
}

?>