<?php
$file = file(__DIR__ ."/direwolf.log");
for ($i = max(0, count($file)-8); $i < count($file); $i++) {
$hasil=nl2br($file[$i]);
    echo $hasil . "";
}
?>
