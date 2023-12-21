<?php include "./PHP/productArrays.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Our Menu</title>
</head>

<body>

    <!-- Header -->
    <?php include "./PHP/header.php" ?>

    <!-- Navigation menu -->
    <?php include "./PHP/navigation.php" ?>

    <!-- Main container -->
    <main class="main-container" id="main">
        <article id="article" class="menu">

        <section>
        <h2>Coffee/Tea</h2>
        <table>
			<?php
			foreach ($beverages as $name => $price) {
				echo '<tr>';
				echo '<td>' . $name . '</td>';
				echo '<td><span class="price">&euro;' . $price . '</span></td>';
				echo '</tr>';
			}
			?>
		</table>
        </section>

        <section>
        <h2>Cakes and Pastries</h2>
        <table>
			<?php
			foreach ($sweets as $name => $price) {
				echo '<tr>';
				echo '<td>' . $name . '</td>';
				echo '<td><span class="price">&euro;' . $price . '</span></td>';
				echo '</tr>';
			}
			?>
		</table>
        </section>
        </article>

        <!-- Side Bar -->
        <?php include "./PHP/aside.php" ?>

    </main>

    <!-- Footer -->
    <?php include "./PHP/footer.php" ?>
    
</body>
</html>