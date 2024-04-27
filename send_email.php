<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $to = "paluszkiewicz.jakub@o2.pl";
    $subject = "Nowa wiadomość od $name";
    $body = "Od: $name\n\nEmail: $email\n\nTelefon: $phone\n\nWiadomość:\n$message";

    if (mail($to, $subject, $body)) {
        echo "<script>alert('Wiadomość została wysłana pomyślnie.');</script>";
        echo "<script>window.location.href = 'index.html';</script>";
    } else {
        echo "<script>alert('Wystąpił błąd podczas wysyłania wiadomości. Spróbuj ponownie później.');</script>";
        echo "<script>window.location.href = 'kontakt.html';</script>";
    }
}
?>
