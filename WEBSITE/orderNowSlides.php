<?php include "./PHP/productArrays.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Order Now Slides</title>
</head>

<body>

    <!-- Header -->
    <?php include "./PHP/header.php" ?>

    <!-- Navigation menu -->
    <?php include "./PHP/navigation.php" ?>

    <!-- Main container -->
    <main class="main-container" id="main">
        <article id="article">
        <div id="slideshow-container">
            <?php
            foreach ($productLinks as $product => $url) {
                echo '<div class="mySlides">';
                echo '<img class="image" src="' . $url . '" alt="Slide 1">';
                echo '<div class="slide-text">';
                echo '<p class="price">' . $product . '</p>';
                echo '<button class="add-to-basket">Add to Basket</button>';
                echo '</div>';
                echo '</div>';
            }
            ?>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        
        <script src="./JavaScript/orderNowScript.js"></script>
        </article>

        <!-- Side Bar -->
        <?php include "./PHP/aside.php" ?>

    </main>

    <!-- Footer -->
    <?php include "./PHP/footer.php" ?>
    
</body>
</html>