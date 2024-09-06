<?php
$servername = "localhost";  // Serwer bazy danych
$username = "root";          // Nazwa użytkownika
$password = "";              // Hasło
$database = "zielona_en";    // Zmieniona nazwa bazy danych

// Połączenie z bazą danych
$conn = mysqli_connect($servername, $username, $password, $database);

// Sprawdzanie połączenia
if (!$conn) {
    die("Połączenie nieudane: " . mysqli_connect_error());
}
?>
