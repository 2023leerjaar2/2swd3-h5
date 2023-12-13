<?php require "dbconnect.php"; ?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamadoing</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/contact.css">
     <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>
<body>

    <header class="header">
         <div class="logo">
           <a href="index.php"><img src="IMG/LogoKamadoing.png" alt="Logo" style="height: 50px;"></a>
            </div>
        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="#">Recepten</a>
            <a href="#">Winkel</a>
            <a href="#">Review</a>
            <a href="#" class="active">Contact</a>
        </nav>
            <a href="login.php"><button class="btn">Login</button></a>
    </header>

    <section class="form">
    <form method="POST">
        <h2>Contact Form</h2>
        <label for="naam" class="text-form">Naam:</label>
        <input type="text" name="naam" required>
        
        <label for="achterbaam" class="text-form">Achternaam:</label>
        <input type="text" name="achterbaam" class="text-form" required>
        
        <label for="beschrijving" class="text-form">Beschrijving:</label>
        <input type="text" name="beschrijving" required>
        
        <input type="submit" name="submit" value="Submit">
    </form>
</section>

<?php 
   if (isset($_POST['submit'])) {
    if (!empty($_POST['naam']) && !empty($_POST['achterbaam']) && !empty($_POST['beschrijving'])) {
        $naam = $_POST["naam"];
        $achterbaam = $_POST["achterbaam"];
        $beschrijving = $_POST["beschrijving"];
        
        $sql = "INSERT INTO `contactberichten` VALUES (NULL, '$naam', '$achterbaam', '$beschrijving')";
        try {
            $conn->query($sql);
            $conn->close();
            echo "Uw bericht is verzonden";
        } catch (Exception $e) {
            $error = "Niet Gelukt Probeer het opnieuw";
            die($error);
        }
    } else {
        echo "Vul alle velden in";
    }
}
    ?>

    <footer>
        <article class="innerItem">
            <h2>Kama <span>Doing</span></h2>
            <article class="textbar">
                <a href="#">Home</a>
                <a href="#">Recepten</a>
                <a href="#">Winkel</a>
                <a href="#">Review</a>
                <a href="contact.php">Contact</a>
            </article>
            <article class="footer-icon">
                <i class='bx bxl-github'></i>
                <i class='bx bxl-meta' ></i>
                <i class='bx bxl-instagram' ></i>
                <i class='bx bxl-facebook-circle' ></i>
            </article>
        </article>
        <hr>
        <p>copyright@teamala5</p>
    </footer>

         
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script type="module" src="JS/style.js"></script>
    </body>
</html>