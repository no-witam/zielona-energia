<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "energia_odnawialna";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$topic = $_GET['topic'];
$sql = "SELECT usluga FROM uslugi WHERE kategoria='$topic'";
$result = $conn->query($sql);

$details = [
    'fotowoltaika' => 'Fotowoltaika',
    'wiatraki' => 'Turbiny Wiatrowe',
    'geotermalna' => 'Energia Geotermalna'
];

$title = $details[$topic];
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="content">
        <h1><?php echo $title; ?></h1>
        <p>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo $row['usluga'] . "<br>";
                }
            } else {
                echo "Brak danych.";
            }
            ?>
        </p>
    </div>
</body>
</html>
<?php
$conn->close();
?>
