<!-- HEADER -->
<?php
session_start();

echo '<header>
    <div id="header">
        <div class="logo"><a href="index.php"><img src="Images/logo.jpg" alt="logo"></a></div>
        <div class="title"><h1>Cafe Daisy</h1></div>
        <div class="buttons">';
            
        if(isset($_SESSION["signedin"]) && $_SESSION["signedin"] === true){
            echo '<div class="signed-in-buttons">';
            echo '<a href="myProfile.php"><button id="profile-button"><i class="fa fa-user"></i></button></a>';
            echo '<a href="basket.php"><button id="basket-button"><i class="fa fa-shopping-basket"></i></button></a>';
            echo '</div>';
        } else{
            echo '<div class="not-signed-in-buttons">';
            echo '<a href="signIn.php"><button id="signin-button">Sign in</button></a>';
            echo '<a href="signUp.php"><button id="signup-button">Sign up</button></a>';
            echo '</div>';
        }
            
echo '</div>
    </div>
    </header>';
?>