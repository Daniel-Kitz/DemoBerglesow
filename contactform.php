<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailVon = $_POST['email'];
    $anliegen = $_POST['anliegen'];
    $nachricht = $_POST['nachricht'];

    $mailZu = "filip@kito-software.de";
    $titel = "Von: ".$mailVon." - ".$anliegen;
    $text = "Sie haben eine Nachricht von ".$name." erhalten!\n\nAnliegen: ".$anliegen."\n\nNachricht:\n".$nachricht;

    mail($mailZu, $anliegen, $text, $titel);
    header("Location: index.html?mailsent");
}

?>
