<?php
$conn = mysqli_connect('localhost', 'root', '', 'zielona_en');

// Sprawdzanie połączenia
if (!$conn) {
    die("Połączenie nieudane: " . mysqli_connect_error());
}
?>
