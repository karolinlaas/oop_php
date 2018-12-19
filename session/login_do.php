<?php
// session/login_do.php

session_start(); // jätkame login.oho faili sessiooni

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
    echo session_id();
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
}



