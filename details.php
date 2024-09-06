<?php
// Połączenie z bazą danych
include 'database.php';

// Pobieranie kategorii z parametru URL
$category = $_GET['category'];

// Pobieranie szczegółowych informacji z bazy danych na podstawie kategorii
$query = "SELECT * FROM `energia geometralna` WHERE category='$category'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacje - Zielona Energia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="content">
        <h2>Informacje o <?php echo ucfirst($category); ?></h2>
        <?php
        // Wyświetlanie informacji na podstawie kategorii
        if ($category == 'fotowoltaika') {
            echo "<p>Doradztwo techniczne i energetyczne, projektowanie i montaż instalacji fotowoltaicznych...</p>";
        } elseif ($category == 'wiatraki') {
            echo "<p>Projektowanie, montaż oraz serwis turbin wiatrowych. Audyty i modernizacja...</p>";
        } elseif ($category == 'geotermia') {
            echo "<p>Doradztwo, projektowanie i montaż systemów geotermalnych. Wiercenia, serwis pomp ciepła...</p>";
        }
        ?>
    </div>
</body>
</html>
