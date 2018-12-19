<?php
// session/login.php
session_start(); // alustame anonüümse sessiooniga
echo session_id();
echo '<br>';
echo '<div style="color: red">'.$_SESSION['viga'].'</div>';

?>

<form method="post" action="login_do.php">
    <div>
        <div>
            <label>Kasutajanimi</label>
            <input type="text" name="username">
        </div>

        <div>
            <label>Parool</label>
            <input type="password" name="password">
        </div>

        <div>
            <input type="submit" value="Logi sisse">
        </div>


    </div>
</form>

