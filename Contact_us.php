<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Doctor Finder</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container">
        <h1>Contact Us</h1>

        <div class="info-section">
            <h2>Chittagong Medical, CTG</h2>
            <p>House 48, Road 9/A, Dhanmondi, Dhaka-1209</p>
            <p>Information & Doctor Serial: 01xxxxxxxxx, 01xxxxxxxxx; Test and Report: 12345; Cardiac Service: 01xxxxxxxxx; Customer Care: 999; Emergency Customer Care: 999;</p>
            <div class="location-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.9019242586945!2d90.374979!3d23.7424307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c769c3e9bafb%3A0x8b6c2ae199e23845!2sSquare%20Hospitals%20Ltd.!5e0!3m2!1sen!2sbd!4v1629094211345!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

        <section class="contact-form">
            <h2>Contact Form</h2>
            <form action="submit_contact.php" method="post">
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <textarea name="message" placeholder="Message" required></textarea>
                <button type="submit">Submit</button>
            </form>
        </section>
    </div>

    <?php include 'footer.php'; ?>
    <script src="scripts.js"></script>
</body>
</html>
