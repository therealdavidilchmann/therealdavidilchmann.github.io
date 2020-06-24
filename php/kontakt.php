<?php

if (isset($_POST)) {
    $mail_to = "david.ilchmann@gmail.com";
    $mail_from = $_POST["email"];
    $name = $_POST["name"];
    $subject = $_POST["subject"];
    $message = "Mail from $name<$mail_from>\n" . $_POST["message"];

    mail($mail_to, $subject, $message);

    header("Location: ../kontakt.html?success=1");
} else {
    header("Location: ../kontakt.html?success=0");
}
