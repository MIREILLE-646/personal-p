<?php
session_start();
include "dbc/dbc.php";
// Check the connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if (isset($_SESSION['email'])) {
    // Iterate through the received data
    // foreach ($_POST as $key => $value) {
    //     // Sanitize each value using mysqli_real_escape_string
    //     $_POST[$key] = mysqli_real_escape_string($con, $value);
    // }

    // // Extract the sanitized data
    $uid = $_SESSION['uid'];
    $heading = $_POST['heading'];
    $subheading = $_POST['subheading'];
    $description = $_POST['description'];
    $imageSrc = $_POST['imageSrc'];

    // Insert the sanitized data into the database
//     $sql = "INSERT INTO `hero-section`(`uid`, `heading`, `subheading`, `description`, `imageSrc`)
//  VALUES ('$uid','$heading','$subheading','$description','$imageSrc')";
//     $qry = mysqli_query($con, $sql);
//     if ($qry) {
//         echo "successfully submited";
//     } else {
//         echo "fail to submit";
//     }



    // Iterate through the received data
    foreach ($_POST as $key => $value) {
        // Sanitize each value using mysqli_real_escape_string
        $_POST[$key] = mysqli_real_escape_string($con, $value);
    }

    // Extract the sanitized data for each section
    $sections = array();
    $sectionCount = 0;

    // Iterate through each section data
    while (isset($_POST['heading_' . $sectionCount])) {
        $sectionData = array(
            'heading' => $_POST['heading_' . $sectionCount],
            'subheading' => $_POST['subheading_' . $sectionCount],
            'description' => $_POST['description_' . $sectionCount],
            'imageSrc' => $_POST['imageSrc_' . $sectionCount],
        );

        // Add the section data to the array
        $sections[] = $sectionData;

        // Increment the section count
        $sectionCount++;
    }

    // Convert the array to JSON
    $jsonSections = json_encode($sections);

    // Insert the JSON data into the database
    $sql = "INSERT INTO `hero-section`(`uid`, `heading`, `subheading`, `description`, `imageSrc`, `section_data`)
     VALUES (' $uid','$heading','$subheading','$description','$imageSrc','$jsonSections')";
    // $sql = "INSERT INTO `hero-section` (`section_data`) VALUES ('$jsonSections')";

    if ($con->query($sql) === TRUE) {
        echo "Section data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    // Close the database connection
    $con->close();



}
?>