<?php
function vorm() {
    echo '
    <form method = "post" action = '.$_SERVER['PHP_SELF'].'>
    <div >
        <label > Kasutajanimi</label ><br >
        <input type = "text" name = "username" >
    </div >

    <input type = "submit" >
</form >';
};
if (empty($_POST)) {
//    echo '<a href="vorm.php">Logi sisse!</a>';
vorm();
} else {
foreach ($_POST as $element) {
if (empty($element)) {
echo 'Andmed tuleb sisestada!<br>';
echo '<a href='.$_SERVER['PHP_SELF'].'>Proovi uuesti</a>';
exit;
}
}
echo 'kasutajanimi = ' . $_POST['username'] . '<br>';
echo 'Tere tulemast, ' . $_POST['username'] . '!<br>';
}
;
?>
