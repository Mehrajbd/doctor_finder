<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor's Chambers</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container">
    <?php
$doctorId = $_GET['id'];
// query a database to get the chambers for the doctor
$details = [
    ["name" => "Dr. Moon",
     "Hospital" => "M H Samorita Hospital & Medical College, Popular Diagnostic Center, Shyamoli",
      "Location" => "Dhaka",
       "Department" => "Cardiology Specialist"],
    ["location" => "Location B", "time" => "12:00 PM - 2:00 PM"],
    ["location" => "Location C", "time" => "4:00 PM - 6:00 PM"],
];

echo "<h1>Chambers for Doctor ID: $doctorId</h1>";
foreach ($details as $detail) {
    echo "<div class='chamber'>";
    if (isset($detail['time'])) {
        echo "<p>Time: {$detail['time']}</p>";
    } else {
        foreach ($detail as $key => $value) {
            echo "<p>$key: $value</p>";
        }
    }
    echo "</div>";
}
?>

    </div>

    <?php include 'footer.php'; ?>
    <script src="scripts.js"></script>
</body>
</html>

