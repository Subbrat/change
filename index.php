<?php include('db.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>The Change</title>
    <link rel="stylesheet" href="./s6css.css">
    <link rel="stylesheet" href="./css.css">
</head>

<body>
    <header>
        <h1>Welcome to Your Website</h1>
    </header>
    <nav>
    </nav>
    <main>
        <p>Hello, this is a basic PHP and HTML webpage.</p>
        <?php
        echo "Today's date is: " . date("Y-m-d");
        ?>
    </main>
    <footer>
    </footer>
</body>

</html>