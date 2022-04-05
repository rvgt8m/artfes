<?php
    session_start();

    $name = $_SESSION['name'];
    $mail = $_SESSION['mail'];
    echo $toiawase = $_SESSION['toiawase'];

    $mailHeader = "From: from@from.com";
    $mailSubject = "お問い合わせありがとうございます";
    $mailBody = $name . "様 お問い合わせありがとうございます";
    $mailBody .= "¥n";
    $mailBody .= "ご返信まで～～～～";

    //mail($mail, $mailSubject, $mailBody, $mailHeader);

    require("./sesCompleteHtml.php");

    $_SESSION = array();
    session_destroy();