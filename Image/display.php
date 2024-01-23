<?php
// display.php - Display user's final content
// db.php - Database connection code
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'porfoliobuild';

$mysqli = new mysqli($host, $username, $password, $dbname);

// Assuming user ID is available in your session or via authentication
$userId = 0; // Replace with the actual user ID

// Retrieve JSON data for the user's sections
$sql = "SELECT Tstructure FROM template WHERE userID = ?";
if ($stmt = $mysqli->prepare($sql)) {
  $stmt->bind_param("i", $userId);
  $stmt->execute();
  $stmt->bind_result($jsonContent);

  $allSectionsData = []; // Array to store all sections' data

  while ($stmt->fetch()) {
    // Decode JSON data
    $sectionData = json_decode($jsonContent, true);

    // Merge section data into the array
    $allSectionsData = array_merge($allSectionsData, $sectionData);
  }

  $stmt->close();
} else {
  echo "Error: " . $mysqli->error;
}

$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="css/bootstrap.css">

  <!-- Add your head content here -->
</head>

<body>
  <div class="about wow fadeInUp" data-wow-delay="0.1s" id="about">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="about-img">
            <img src="img1/about.jpg" alt="Image" />
          </div>
        </div>
        <div class="col-lg-6">
          <div class="about-content">
            <div class="section-header text-left">
              <p>Learn About Me</p>
              <h2>10 Years Experience</h2>
            </div>
            <?php
            // Display sections using the retrieved data
            foreach ($allSectionsData as $section) {
              // echo "<div class='container mt-5'>";
              // echo "<div class='row'>";
              // echo "<div class='col-md-6'>";
              // echo "<h2>Section {$section['section_id']}</h2>";
              // echo "<div class='editable'>";
              echo "<p>" . htmlspecialchars($section['content']) . "</p>";
              // echo "</div>";
            }
            ?>
            <div class="skills">
              <div class="skill-name">
                <p>Web Design</p>
                <p>85%</p>
              </div>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
              <div class="skill-name">
                <p>Web Development</p>
                <p>95%</p>
              </div>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
              <div class="skill-name">
                <p>Apps Design</p>
                <p>90%</p>
              </div>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
              <div class="skill-name">
                <p>Apps Development</p>
                <p>85%</p>
              </div>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>
            <a class="btn" href="">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->

</body>

</html>