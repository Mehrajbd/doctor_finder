<header>
    <div class="container">
        <img src="images/Dr.finder.png" alt="Doctor Finder Logo" class="logo">
        <h1>Doctor Finder</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#" id="hospitals-nav">Hospitals</a></li>
                <li><a href="#" id="departments-nav">Departments</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="Contact_us.php">Contact Us</a></li>
            </ul>
        </nav>
    </div>
</header>

<div id="hospitals-list" class="hidden">
    <div class="buttons">
        <?php
        $cities = ["Dhaka", "Chittagong", "Rajshahi", "Sylhet", "Rangpur", "Khulna", "Barisal", "Mymensingh", "Pabna", "Bogra", "Comilla", "Narayanganj", "Kushtia"];
        foreach ($cities as $city) {
            echo "<button>$city</button>";
        }
        ?>
    </div>
</div>

<div id="departments-list" class="hidden">
    <div class="buttons">
        <?php
        $departments = ["Cardiology", "Neurology", "Orthopedics", "Pediatrics", "Oncology", "Dermatology", "Psychiatry", "ENT", "Nephrology"];
        foreach ($departments as $department) {
            echo "<button>$department</button>";
        }
        ?>
    </div>
</div>
