<?php
// Połączenie z bazą danych
include 'database.php';

// Pobieranie kategorii z parametru URL
$category = isset($_GET['category']) ? $_GET['category'] : '';

// Sprawdzanie, czy kategoria jest poprawna
$valid_categories = ['fotowoltaika', 'wiatraki', 'geotermia'];
if (!in_array($category, $valid_categories)) {
    $category = 'fotowoltaika'; // Domyślnie wyświetla informacje o fotowoltaice
}

// Przygotowanie zapytania SQL w zależności od kategorii
$query = "";
switch ($category) {
    case 'fotowoltaika':
        $query = "SELECT * FROM fotowoltaika";
        break;
    case 'wiatraki':
        $query = "SELECT * FROM turbinywiatrowe";
        break;
    case 'geotermia':
        $query = "SELECT * FROM energiageotermalna";
        break;
}

if (!$query) {
    die("Błąd: Niepoprawne zapytanie SQL.");
}

// Wykonanie zapytania
$result = mysqli_query($conn, $query);

// Sprawdzenie błędów zapytania
if (!$result) {
    die("Błąd zapytania SQL: " . mysqli_error($conn));
}

$info = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacje o <?php echo ucfirst($category); ?> - Zielona Energia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="background">
        <div class="content">
            <h1>Informacje o <?php echo ucfirst($category); ?></h1>
            <?php if ($info): ?>
                <?php foreach ($info as $key => $value): ?>
                    <?php if (!empty($value)): ?>
                        <h2><?php echo htmlspecialchars($key); ?></h2>
                        <p><?php echo nl2br(htmlspecialchars($value)); ?></p>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Brak informacji na ten temat.</p>
            <?php endif; ?>
            <a href="index.php" class="button">Powrót do strony głównej</a>
        </div>
    </div>
</body>
</html>
