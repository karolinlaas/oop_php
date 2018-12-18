 <style>
    form {
        margin: auto;
        padding-top: 20vh;
        width: 400px;
        text-align: center;
    }

    input {
        padding: 5px;
        margin: 10px;
        border-radius: 15px;
        border-style: solid;
        border-width: 0.5px;
        border-color: dimgray;
    }

    input[type="submit"] {
        width: 110px;
        text-align: center;
    }
</style>

 <?php
 function vorm($tulemus = false){
     echo '<form method="post" action="'.$_SERVER['PHP_SELF'].'">
        <label>Sisesta esimene number</label>
        <br>
        <input type="number" name="esimeneNR">
        <br>
        <label>Sisesta teine number</label>
        <br>
        <input type="number" name="tegevus">
        <br>
        <label>Vali tegevus</label>
          <select name="operatsioon">
            <option value="liida">Liida</option>
            <option value="lahuta">Lahuta</option>
            <option value="korruta">Korruta</option>
            <option value="jaga">Jaga</option>
          </select>
        <br>
        <input type="submit" value="Arvuta">
        <!--<input type="submit" value="Tühjenda">-->
        <br>
        <label>Tulemus: </label>
        <input type="text" value='.$tulemus.'>
    </form>';}

function calc($arv1, $arv2, $operatsioon) {
    if ($operatsioon == 'Liida') {
        $tulemus = $arv1 + $arv2;
    } else if ($operatsioon == 'Lahuta'){
        $tulemus = $arv1 - $arv2;
    } else if ($operatsioon == 'Korruta') {
        $tulemus = $arv1 * $arv2;
    } else if ($operatsioon == 'Jaga') {
        $tulemus = $arv1 / $arv2;
    } else {
        $tulemus = false;
    }
    return $tulemus;
}

if (empty($_POST)) {
//    echo '<a href="vorm.php">Logi sisse!</a>';
    vorm();
} else {
    $esimeneNR = $_POST['esimeneNR'];
    $teineNR = $_POST['teineNR'];
    $operation = $_POST['operation'];
    if(empty($number1) or empty($number2)){
        echo 'Sisesta numbrid!<br>';
        echo '<a href=' . $_SERVER['PHP_SELF'] . '>Proovi uuesti</a>';
        exit;
    }
}

;?>