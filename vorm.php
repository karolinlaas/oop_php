<style>
    form {
        margin: 30px;
        padding: 10px;
        border: solid 1px black;
        width: 300px;
        text-align: center;
    }

    input {
        margin-top: 5px;
        margin-bottom: 10px;
        border-radius: 15px;
        border-style: solid;
        border-width: 0.5px;
        padding: 5px;
    }


</style>

<div class="test">
<form method="post" action="vormitootlus.php">
    <div>
        <label>Kasutajanimi:</label>
        <br>
        <input type="text" name="username">
    </div>

    <div>
        <label>Parool:</label>
        <br>
        <input type="password" name="passwd">
    </div

    <div>
        <input type="submit" value="Logi sisse">
    </div>

</form>
</div>