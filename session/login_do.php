<?php
// session/login_do.php

if (empty($_POST)) {
    header('Location: login.php');
}

if (empty($_POST['username']) or (empty($_POST['password']))) {
    header('Location: login.php');
};