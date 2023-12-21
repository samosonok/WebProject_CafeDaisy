<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Order Now</title>
</head>

<body>
    
    <!-- Header -->
    <?php include "./PHP/header.php" ?>

    <!-- Navigation menu -->
    <?php include "./PHP/navigation.php" ?>

    <!-- Main container -->
    <main class="main-container" id="main">
        <article id="article">

<?php
if(isset($_SESSION["signedin"]) && $_SESSION["signedin"] === true){
                header("Location: orderNowSlides.php");
                exit();
            } else{
                echo '<h3>To order, you must first log in <a href="signIn.php">Login here</a>.</h3>';
            }
?>

</article>
        
        <!-- Side Bar -->
        <?php include "./PHP/aside.php" ?>

    </main>

    <!-- Footer -->
    <?php include "./PHP/footer.php" ?>

</body>
</html>