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
        $chambers = [
            ["location" => "Location A", "time" => "9:00 AM - 11:00 AM"],
            ["location" => "Location B", "time" => "12:00 PM - 2:00 PM"],
            ["location" => "Location C", "time" => "4:00 PM - 6:00 PM"],
        ];

        echo "<h1>Chambers for Doctor ID: $doctorId</h1>";
        foreach ($chambers as $chamber) {
            echo "<div class='chamber'>
                    <h2>{$chamber['location']}</h2>
                    <p>Time: {$chamber['time']}</p>
                  </div>";
        }
        ?>
    </div>

    <?php include 'footer.php'; ?>
    <script src="scripts.js"></script>
</body>
</html>
