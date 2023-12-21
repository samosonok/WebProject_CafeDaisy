<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Contact Us</title>
</head>

<body>
    
    <!-- Header -->
    <?php include "./PHP/header.php" ?>

    <!-- Navigation menu -->
    <?php include "./PHP/navigation.php" ?>

    <!-- Main container -->
    <main class="main-container" id="main">
    <article id="article">
        
        <div class="contact-us-container">
        <form action="confirmContactUsForm.php" method="post">

            <p>Have a question or feedback? Feel free to get in touch with us using the form below.</p>

            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required><br>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="message">Your Message:</label>
            <textarea id="message" name="message" required></textarea><br>

            <input id="submitButton" type="submit" class="submit" value="Submit">
        </form>
        </div>
        </article>
        <!-- Side Bar -->
        <?php include "./PHP/aside.php" ?>
    
    </main>

    <!-- Footer -->
    <?php include "./PHP/footer.php" ?>
    
</body>
</html>