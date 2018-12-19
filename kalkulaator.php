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
        <input type="number" name="number1">
        <br>
        <label>Sisesta teine number</label>
        <br>
        <input type="number" name="number2">
        <br>
        <label>Vali tegevus</label>
          <select name="operation">
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
        <input type="text" value="'.$tulemus.'">
    </form>';}

function calc($esimeneNR, $teineNR, $operation) {
    if ($operation == 'liida') {
        $tulemus = $esimeneNR + $teineNR;
    } else if ($operation == 'lahuta'){
        $tulemus = $esimeneNR - $teineNR;
    } else if ($operation == 'korruta') {
        $tulemus = $esimeneNR * $teineNR;
    } else if ($operation == 'jaga') {
        $tulemus = $esimeneNR / $teineNR;
    } else {
        $tulemus = false;
    }
    return $tulemus;
}

if (empty($_POST)) {
//    echo '<a href="vorm.php">Logi sisse!</a>';
    vorm();
} else {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operation = $_POST['operation'];
    if(empty($number1) or empty($number2)){
        echo 'Sisesta numbrid!<br>';
        echo '<a href=' . $_SERVER['PHP_SELF'] . '>Proovi uuesti</a>';
        exit;
    }
    $tulemus = calc($number1, $number2, $operation);
    vorm($tulemus);
}

;?>