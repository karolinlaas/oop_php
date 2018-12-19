<?php
// session/login.php
?>

<form method="post" action="login_do.php">
    <div>
        <div class="vorm">
            <label>Kasutajanimi</label>
            <input type="text" name="username">
        </div>

        <div class="vorm">
            <label>Parool</label>
            <input type="password" name="password">
        </div>

        <div>
            <input type="submit" value="Logi sisse">
        </div>


    </div>
</form>

<style>
    form {
        width: 500px;
    }

    .vorm input{
        text-align: right;
    }
</style>

