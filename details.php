<?php
include 'database.php';

// Sprawdzenie, czy zmienna 'category' jest przekazana w URL
if (isset($_GET['category'])) {
    $category = $_GET['category'];
} else {
    // W przypadku braku 'category', przekierowanie lub wyświetlenie błędu
    die("Błąd: Nie wybrano kategorii.");
}

$query = "";
if ($category == 'fotowoltaika') {
    $query = "SELECT * FROM `fotowoltaika`";
} elseif ($category == 'wiatraki') {
    $query = "SELECT * FROM `turbiny wiatrowe`";
} elseif ($category == 'geotermia') {
    $query = "SELECT * FROM `energia geometralna`";
}

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
        if ($category == 'fotowoltaika') {
            echo "<p>Doradztwo techniczne i energetyczne, projektowanie i montaż instalacji fotowoltaicznych...</p>";
            echo "<ul>";
            foreach ($row as $key => $value) {
                echo "<li><strong>$key:</strong> $value</li>";
            }
            echo "</ul>";
        } elseif ($category == 'wiatraki') {
            echo "<p>Projektowanie, montaż oraz serwis turbin wiatrowych. Audyty i modernizacja...</p>";
            echo "<ul>";
            foreach ($row as $key => $value) {
                echo "<li><strong>$key:</strong> $value</li>";
            }
            echo "</ul>";
        } elseif ($category == 'geotermia') {
            echo "<p>Doradztwo, projektowanie i montaż systemów geotermalnych. Wiercenia, serwis pomp ciepła...</p>";
            echo "<ul>";
            foreach ($row as $key => $value) {
                echo "<li><strong>$key:</strong> $value</li>";
            }
            echo "</ul>";
        }
        ?>
    </div>
</body>
</html>
