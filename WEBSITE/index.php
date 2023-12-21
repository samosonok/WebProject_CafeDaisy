<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Cafe Daisy</title>
</head>

<body>
    
    <!-- Header -->
    <?php include "./PHP/header.php" ?>

    <!-- Navigation menu -->
    <?php include "./PHP/navigation.php" ?>

    <!-- Main container -->
    <main class="main-container" id="main">
        <article id="article">
        <h1>Welcome to Cafe Daisy!</h1>
            
        <section>
        <h3>Explore the Delightful Flavors of Cafe Daisy</h3>
        <p>Indulge in a symphony of flavors and experience cozy elegance at our charming cafe in the heart of Dublin.</p>
        <div class="cafe"><a><img src="Images/cafe.jpg" alt="cafe"></a></div>
        </section>

        <!-- Promotions -->
        <section>
            <h3>Current Promotions</h3>
            <p>Enjoy a complimentary pastry with any purchase of our speciality coffee throughout this month!</p>
            <div class="pastry"><a><img src="Images/pastry.jpg" alt="pastry"></a></div>
        </section>

        <!-- Events -->
        <section>
            <h3>Upcoming Events</h3>
            <p>Join us for live music every Friday evening and unwind with friends and great coffee.</p>
            <div class="music"><a><img src="Images/music.jpg" alt="music"></a></div>
        </section>
        
        </article>
        
        <!-- Side Bar -->
        <?php include "./PHP/aside.php" ?>

    </main>

    <!-- Footer -->
    <?php include "./PHP/footer.php" ?>

</body>
</html>