<?php
// session/login_do.php

session_start(); // jätkame login.oho faili sessiooni
session_regenerate_id();

if (empty($_POST)) {
    header('Location: login.php');
    $_SESSION['viga'] = 'Täida vormi andmed';
} else if (empty($_POST['username'])) {
    header('Location: login.php');
    $_SESSION['viga'] = 'Sisesta kasutajanimi';
} else if (empty($_POST['password'])) {
    header('Location: login.php');
    $_SESSION['viga'] = 'Sisesta parool';
} else {
    session_destroy(); // Lõpetan veateate sessiooni
    session_start(); // Alustan sisselogitud kasutaja sessiooniga
    session_regenerate_id(); // Määrame uue sessiooni ID
    echo session_id();
    $_SESSION['username'] = $_POST['username'];
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
    echo 'Oled sisse loginud, '.$_SESSION['username'].'.';
    echo '<br>';
    echo '<br>';
    echo '<a href="logout.php">Logi välja</a>';
}



