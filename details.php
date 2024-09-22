<?php
include 'database.php';

if (isset($_GET['category'])) {
    $category = $_GET['category'];
} else {
    die("Błąd: Nie wybrano kategorii.");
}

$query = "";
$categoryName = "";
$videoFile = ""; 

if ($category == 'fotowoltaika') {
    $query = "SELECT * FROM `fotowoltaika`";
    $categoryName = "Fotowoltaika";
    $videoFile = "filmiki/solar_panels.mp4";
} elseif ($category == 'wiatraki') {
    $query = "SELECT * FROM `turbiny_wiatrowe`";
    $categoryName = "Turbiny Wiatrowe";
    $videoFile = "filmiki/windmill.mp4"; 
} elseif ($category == 'geotermia') {
    $query = "SELECT * FROM `energia_geotermalna`";
    $categoryName = "Energia Geotermalna";
    $videoFile = "filmiki/Geothermal heating.mp4"; 
}

$result = mysqli_query($conn, $query);
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
    <video autoplay muted loop class="background-video">
        <source src="<?php echo $videoFile; ?>" type="video/mp4">
        Twoja przeglądarka nie obsługuje odtwarzania wideo.
    </video>

    <div class="content">
        <h2>Informacje o <?php echo $categoryName; ?></h2>
        <table class="details-table">
            <thead>
                <tr>
                    <th>Opis</th>
                    <th>Informacje</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    foreach ($row as $key => $value) {
                        echo "<tr><td><strong>$key</strong></td><td>$value</td></tr>";
                    }
                }
                ?>
            </tbody>
        </table>
        <a href="index.php" class="button">Powrót do strony głównej</a>
    </div>
</body>
</html>
