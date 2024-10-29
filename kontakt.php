<?php
session_start();
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['imie']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $subject = mysqli_real_escape_string($conn, $_POST['temat']);
    $message = mysqli_real_escape_string($conn, $_POST['wiadomosc']);

    $sql = "INSERT INTO wiadomosci (imie, email, temat, wiadomosc) VALUES ('$name', '$email', '$subject', '$message')";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['form_success'] = "Dziękuje za wiadomość!";
    } else {
        $_SESSION['form_error'] = "Błąd: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    header("Location: index.php"); 
    exit();
}
?>
