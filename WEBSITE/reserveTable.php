<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Reserve a Table</title>
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
                header("Location: reservation.php");
                exit(); // Ensure that the script stops here
            } else{
                echo '<h3>To reserve a table, you must first log in <a href="signIn.php">Login here</a>.</h3><br>';
                echo '<h3>Or you can contact us: +353872547344</h3>';
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