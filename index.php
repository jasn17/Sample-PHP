<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/yzy.webp">
    <title>Kanye Fan Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Welcome to the Kanye Fan Page</h1>
    </header>

    <section id="content">
        <p>
            Welcome to the ultimate fan page dedicated to Kanye West. Here you will find the latest news, music releases, and insights into his career and artistic journey.
        </p>
    </section>

    <section id="gallery">
        <h2>Gallery</h2>
        <div class="images">
            <img src="img/ye1.webp" alt="Kanye West Image 1">
            <img src="img/ye2.webp" alt="Kanye West Image 2">
        </div>
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?>.<?php echo date("M"); ?> Kanye Fan Page. All rights reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
