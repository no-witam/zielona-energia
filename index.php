<?php
include 'database.php';

// Pobranie danych o usługach z tabeli "energia geometralna"
$query = "SELECT * FROM `energia geometralna`";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usługi Geotermalne - Zielona Energia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1>OZE - Energia Geotermalna</h1>
        </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#services">Usługi Geotermalne</a></li>
                <li><a href="#gallery">Galeria</a></li>
                <li><a href="#contact">Kontakt</a></li>
            </ul>
        </nav>
    </header>

    <section id="services">
        <h2>Usługi Geotermalne</h2>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<ul>";
                echo "<li>Doradztwo: " . $row['Doradztwo i badania geotermalne'] . "</li>";
                echo "<li>Projektowanie systemów: " . $row['Projektowanie systemów geotermalnych'] . "</li>";
                echo "<li>Wiercenia: " . $row['Wiercenia geotermalne'] . "</li>";
                echo "<li>Instalacja pomp ciepła: " . $row['Instalacja pomp ciepła'] . "</li>";
                echo "<li>Serwis: " . $row['Serwis i konserwacja systemów geotermalnych'] . "</li>";
                echo "</ul>";
            }
        } else {
            echo "<p>Brak danych o usługach geotermalnych.</p>";
        }
        ?>
    </section>

    <!-- Inne sekcje, np. galeria -->

    <footer>
        <p>© 2024 Zielona Energia - OZE</p>
    </footer>
</body>
</html>
