<?php
if (isset($_POST['edit'])) {
    include "dbc.php";
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        $uploadDir = "profiles/$username/";
        $pic_url = $_FILES['profile']['name'];
        $targetFile = $uploadDir . $pic_url;
        $uploadOk = true;
        // Create the user's folder if it doesn't exist
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        // Allow only specific file formats (e.g., JPEG, PNG)
        // if (
        //     $imageFileType !== "jpg" && $imageFileType !== "jpeg" &&
        //     $imageFileType !== "png"
        // ) {
        //     echo "Sorry, only JPG, JPEG, and PNG files are allowed.";
        //     $uploadOk = false;
        // }

        // Move the uploaded file to the user's folder
        if ($uploadOk) {
            if (move_uploaded_file($_FILES["profile"]["tmp_name"], $targetFile)) {
                $sql = "UPDATE `registration` SET `uprofile`='$targetFile' WHERE username='$username' ";
                $qry = mysqli_query($con, $sql);

                $select = "SELECT `username`, `uprofile` FROM `registration` WHERE username ='$username'";
                $qry = mysqli_query($con, $select);
                $row = mysqli_fetch_assoc($qry);
                $present = mysqli_num_rows($qry);
                if ($present) {
                    $profile = $row['uprofile'];
                    $_SESSION['profile_picture'] = $profile;
                    header("location:dashboard.php");
                }

            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        // Redirect the user if not logged in
        header("Location: login.php");
        exit();
    }
}
?>