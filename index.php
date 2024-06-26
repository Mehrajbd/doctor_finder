<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Finder</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    

</head>

<body>
    <?php include 'header.php'; ?>
    
    <div  class="container">
        <h1>Find a Doctor</h1>

        <!-- <input type="text" id="query" name="query" placeholder="Enter doctor's name or specialty">
<label for="query" <a href="doctor_finder.php" class="sr-only">Search Query </a></label>
<button type="submit">Search</button> -->


        <form action="doctor_finder.php" method="get">
            <input type="text" name="query" placeholder="Enter doctor's name or specialty">
            <button type="submit">Search</button>
        </form>

        <div class="info-section">
            <h2>Specialist Doctors List in Bangladesh</h2>
            <div class="buttons">
                <?php
                $specialties = ["Dental", "Cancer", "Cardiac Surgery", "Cardiology", "Child", "Neurology", "Pediatric Orthopedic", "ENT", "Neuro medicine", "Kidney", "Skin", "Infertility", "Psychiatry"];
                foreach ($specialties as $specialty) {
                    echo "<button>$specialty</button>";
                }
                ?>
            </div>

            <h2>Specialty Wise Doctors List</h2>
            <div class="buttons">
                <?php
                $cities = ["Dhaka", "Chittagong", "Rajshahi", "Sylhet", "Rangpur", "Khulna", "Barisal", "Mymensingh", "Pabna", "Bogra", "Comilla", "Narayanganj", "Kushtia"];
                foreach ($cities as $city) {
                    echo "<button>$city</button>";
                }
                ?>
            </div>

            <h2>Hospital Wise Doctors List</h2>
            <div class="buttons">
                <?php
                foreach ($cities as $city) {
                    echo "<button>$city</button>";
                }
                ?>
            </div>

            <h2>Recently Added Doctors to Our Website</h2>
            <div class="recently-added-doctors">
                <?php
                $doctors = [
                    ["id" => 1, "name" => "Dr. Moon", 
                    "image" => "images/Moon.png", 
                    "degree" => "MBBS, BCS (Health), MS (Neurosurgery)",
                     "visiting_hour" => "Evening", 
                     "hospital" => "National Institute of Neurosciences & Hospital, Dhaka"],
                    ["id" => 2, 
                    "name" => "Dr. Raj", 
                    "image" => "images/Raj.png",
                     "degree" => "MBBS, BCS (Health), MS (Neurosurgery)", 
                     "visiting_hour" => "Evening", 
                     "hospital" => "National Institute of Neurosciences & Hospital, Dhaka"],
                    ["id" => 3,
                     "name" => "Dr. Parna",
                      "image" => "images/Parna.png",
                       "degree" => "MBBS, BCS (Health), MS (Neurosurgery)",
                        "visiting_hour" => "Evening",
                         "hospital" => "National Institute of Neurosciences & Hospital, Dhaka"],
                    ["id" => 4, 
                    "name" => "Dr. Arman",
                     "image" => "images/Miraz.png",
                      "degree" => "MBBS, BCS (Health), MS (Neurosurgery)", 
                      "visiting_hour" => "Evening", 
                      "hospital" => "National Institute of Neurosciences & Hospital, Dhaka"],
                    ["id" => 5,
                     "name" => "Dr. Mehraj",
                      "image" => "images/mehraj.png",
                       "degree" => "MBBS, BCS (Health), MS (Neurosurgery)", 
                       "visiting_hour" => "Evening", 
                       "hospital" => "National Institute of Neurosciences & Hospital, Dhaka"],
                ];

                foreach ($doctors as $doctor) {
                  echo "<div class='doctor'>
            <img src='{$doctor['image']}' alt='Doctor'>
            <a href='doctor_details.php?id={$doctor['id']}'><h3>{$doctor['name']}</h3></a>
            <p>{$doctor['degree']}</p>
            <p>Visiting Hour: {$doctor['visiting_hour']}</p>
            <p>{$doctor['hospital']}</p>
            <a href='chambers.php?id={$doctor['id']}'><button>See Chambers</button></a>
          </div>";
                }
                ?>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
    <script src="scripts.js"></script>
</body>
</html>
