<?php
// open session
session_start();
// submiting registration form
if (isset($_POST['register'])) {
    include "dbc/dbc.php";
    function uid($fname, $lname)
    {
        $ran = rand(1111, 9999);
        $idfname = strtolower(substr($fname, 0, 1));
        $idlname = strtoupper(substr($lname, 0, 1));
        $id = $idfname . $idlname . $ran;
        return $id;
    }
    function x($data)
    {
        $data = trim($data);
        $data = filter_var($data, FILTER_SANITIZE_STRING);
        $data = addslashes($data);
        return $data;
    }
    $fname = x(mysqli_real_escape_string($con, $_POST['fname']));
    $lname = x(mysqli_real_escape_string($con, $_POST['lname']));
    $email = x(mysqli_real_escape_string($con, $_POST['email']));
    $tel = x(mysqli_real_escape_string($con, $_POST['phone_no']));
    $country = x(mysqli_real_escape_string($con, $_POST['country']));
    $city = x(mysqli_real_escape_string($con, $_POST['city']));
    $uid = uid($fname, $lname);
    $pwd = mysqli_real_escape_string($con, $_POST['pwd']);
    $cpwd = password_hash($pwd, PASSWORD_DEFAULT);
    $date = date("Y-m-d H:i:s");

    // check using   email if user already exist 
    $select = "SELECT email FROM `registration` WHERE email = '$email'";
    $selectQry = mysqli_query($con, $select);
    while ($row = mysqli_fetch_assoc($selectQry)) { //look for email in database
        $present = mysqli_num_rows($selectQry);
    }
    if ($present == 1) {

        $_SESSION['email_alert'] = '1';
        header("location:register.php");
    } else {
        // check if user already exist
        $user = 'users/' . $fname . " " . $lname;
        if (file_exists($user)) {
            $_SESSION['email_alert'] = '1';
            header("location:register.php");
        } else {
            // inserting the data collected  to the database if user don't exist
            $sql = "INSERT INTO `registration`(`userID`, `fname`, `lname`, `tel`, `email`, `country`, `city`, `pwd`,`date`) 
      VALUES ('$uid','$fname','$lname','$tel','$email','$country','$city','$cpwd','$date')";
            $qry = mysqli_query($con, $sql);
            // insert into Login 
            $logsql = "INSERT INTO `login`(`email`, `pwd`)
            VALUES ('$email','$cpwd')";
            $logqry = mysqli_query($con, $logsql);

            if ($qry) {
                $_SESSION['account_success'] = '1';
                header("location:login.php");
                echo '<script>
        alert("account created successfully");
        location = "login.php";
        </script>';
                mkdir("users/" . $fname . " " . $lname, 0777, true);
            } else {
                echo '<script>alert("unabled to create accound")</script>' . mysqli_error($con);
            }

        }
    }
}

// =============================================================
// =============================================================


?>