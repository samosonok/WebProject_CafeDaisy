<script src="./JavaScript/script.js"></script> <!-- link to JS file -->
<!-- NAVIGATION MENU -->
<?php
$links = array(
    "Home" => "index.php",
    "Our Menu" => "ourMenu.php",
    "Order Now" => "orderNow.php",
    "About Us" => "aboutUs.php",
    "Contact Us" => "contactUs.php"
);
?>
 
<!-- HTML code for the header -->
<nav id="nav">
    <ul class="topnav">
        <li class="icon"><a href="#">&#9776;&nbsp;MENU</a></li>

        <?php
        // Loop through the links array to generate HTML code
        foreach ($links as $text => $url) {
            echo '<li class="hide"><a href="' . $url . '">' . $text . '</a></li>';
        }
        ?>
        
    </ul>
</nav>