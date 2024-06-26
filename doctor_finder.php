<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Finder Results</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container">
        <h1>Search Results</h1>
        <?php
        $query = $_GET['query'];
        if ($query) {
            echo "<p>Showing results for: <strong>$query</strong></p>";

            // Array of doctors
            $doctors = [
                ["name" => "Dr. Moon", "specialty" => "Cardiology", "location" => "New York, NY"],
                ["name" => "Dr. Arman", "specialty" => "Child", "location" => "Los Angeles, CA"],
                ["name" => "Dr. Parna", "specialty" => "Dentist", "location" => "Los Angeles, CA"],
                ["name" => "Dr. Raj", "specialty" => "Neurology", "location" => "Los Angeles, CA"],
                ["name" => "Dr. Mehraj", "specialty" => "Psychiatry", "location" => "Los Angeles, CA"]
            ];

            // Filter doctors based on the query
            $filtered_doctors = array_filter($doctors, function($doctor) use ($query) {
                return stripos($doctor['name'], $query) !== false || stripos($doctor['specialty'], $query) !== false;
            });

            // Display matching doctors
            if (count($filtered_doctors) > 0) {
                foreach ($filtered_doctors as $doctor) {
                    echo "<div class='doctor'>
                            <h2>{$doctor['name']}</h2>
                            <p>Specialty: {$doctor['specialty']}</p>
                            <p>Location: {$doctor['location']}</p>
                          </div>";
                }
            } else {
                echo "<p>No doctors found matching your query.</p>";
            }
        } else {
            echo "<p>No search query provided.</p>";
        }
        ?>
    </div>

    <?php include 'footer.php'; ?>
    <script src="scripts.js"></script>
</body>
</html>
