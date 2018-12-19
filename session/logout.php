<?php
// session/logout.php

session_start();
//echo session_id();
session_destroy();
session_regenerate_id();
header('Location: login.php');