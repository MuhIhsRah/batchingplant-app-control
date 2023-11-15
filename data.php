<?php
$selectedPort = $_POST['port'];
$comPort=fopen($selectedPort, "rw+");
sleep(2);
if ($_POST['Selector'] == '1') {
    fwrite($comPort,'aaa');
    echo "lampu 1 menyala";
}
if ($_POST['Selector'] == '2') {
    fwrite($comPort,'bbb');
    echo "lampu 1 mati";
}
if ($_POST['Selector'] == '5') {
    fwrite($comPort,'eee');
    echo "lampu 3 menyala";
}
if ($_POST['Selector'] == '6') {
    fwrite($comPort,'fff');
    echo "lampu 3 mati";
}
if ($_POST['Selector'] == '3') {
    fwrite($comPort,'c');
    echo "Light On";
}
if ($_POST['Selector'] == '4') {   
    fwrite($comPort,'d');
    echo "Light Off";
}
?>
/*



*/