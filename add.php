<?php
session_start();

include('function.php');
include('config.php');
include('conect.php');

if (!(isset($_SESSION['bantime']) && ($_SESSION['bantime'] > time()))) {
    if (censor($_POST['text'])) {
        $mysqli->query(
            "INSERT INTO `guests` VALUE (NULL,'$_POST[text]', '$_POST[name]')"
        );
    } else {
        $_SESSION['bantime'] = time() + 15;
    }
}
$mysqli->close();

header('location: index.php');
