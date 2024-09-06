<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "energia_odnawialna";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($topic)) {
    $sql = "SELECT usluga FROM uslugi WHERE kategoria='$topic'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo $row['usluga'] . "<br>";
        }
    } else {
        echo "Brak danych.";
    }
} else {
    echo "Brak danych.";
}

$conn->close();
?>
