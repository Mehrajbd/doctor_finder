<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Finder Blog</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
<body>
    <?php include 'header.php'; ?>

    <section class="blog-section">
        <div class="container">
            <h2>Doctor Finder Blog</h2>
            <?php
            // Displaying the blog posts
            $posts = [
                [
                    "image" => "path_to_image1.jpg",
                    "title" => "Common Health Issues in Bangladesh and How to Prevent Them",
                    "date" => "April 20, 2023",
                    "excerpt" => "Bangladesh is a densely populated country in South Asia with over 160 million citizens. While it has made significant progress in healthcare, the nation still...",
                    "link" => "#"
                ],
                [
                    "image" => "path_to_image2.jpg",
                    "title" => "Top 10 Medical Specialties in Bangladesh and What They Treat",
                    "date" => "April 20, 2023",
                    "excerpt" => "The healthcare industry in Bangladesh is rapidly growing and evolving, offering an array of specialized medical treatments to cater to the diverse needs of its...",
                    "link" => "#"
                ],
                [
                    "image" => "path_to_image3.jpg",
                    "title" => "Understanding the Healthcare System in Bangladesh: A Guide for Patients",
                    "date" => "April 20, 2023",
                    "excerpt" => "Bangladesh, one of the world's densely populated countries, struggles to provide adequate healthcare services for its citizens. Despite recent progress in the healthcare system, an...",
                    "link" => "#"
                ]
                // Add more posts as needed
            ];

            foreach ($posts as $post) {
                echo '<div class="blog-post">';
                echo '<img src="'.$post["image"].'" alt="Blog Image">';
                echo '<h3><a href="'.$post["link"].'">'.$post["title"].'</a></h3>';
                echo '<p>'.$post["date"].' / No Comments</p>';
                echo '<p>'.$post["excerpt"].'</p>';
                echo '<a href="'.$post["link"].'">Read More</a>';
                echo '</div>';
            }
            ?>
        </div>
    </section>

    <?php include 'footer.php'; ?>
    <script src="scripts.js"></script>
</body>
</html>
