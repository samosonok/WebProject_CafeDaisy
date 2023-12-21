<?php

session_start();
 
// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["signedin"]) || $_SESSION["signedin"] !== true){
    header("location: signin.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>My Profile</title>
</head>
<body>
<header>
    <div id="header">
        <div class="logo"><a href="index.php"><img src="Images/logo.jpg" alt="logo"></a></div>
        <div class="title" style="flex: 0 0 250px"><h1>Cafe Daisy</h1></div>
        <div class="buttons">
            
            <div class="signed-in-buttons">
            <a href="myProfile.php"><button id="profile-button"><i class="fa fa-user"></i></button></a>
            <a href="basket.php"><button id="basket-button"><i class="fa fa-shopping-basket"></i></button></a>
            </div>
            
        </div>
    </div>
</header>

<!-- Navigation menu -->
<?php include "./PHP/navigation.php" ?>

    <main class="main-container" id="main">
    <article id="article">
        <div class="profile-buttons">
        <h1>My profile</h1>
            <a href="myOrders.php"><button id="myOrders-button">My orders</button></a>
            <a href="myReservations.php"><button id="myReservations-button">My reservations</button></a>
            <a href="reset-password.php"><button id="resetPass-button">Reset Password</button></a>
            <a href="signOut.php"><button id="signOut-button">Sign Out</button></a><br>
            </div>
    </article>
    
    <!-- Side Bar -->
    <?php include "./PHP/aside.php" ?>

</main>

<!-- Footer -->
<?php include "./PHP/footer.php" ?>

</body>
</html>