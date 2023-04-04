<?php
$call = htmlspecialchars($_POST["callsign"]);
$pass = htmlspecialchars($_POST["passcode"]);
$lat = htmlspecialchars($_POST["lat"]);
$long = htmlspecialchars($_POST["long"]);
$server = htmlspecialchars($_POST["server"]);
$port = htmlspecialchars($_POST["port"]);
$content = '{"config": {"call": "'.$call.'","pass": "'.$pass.'","lat": "'.$lat.'","long": "'.$long.'","server": "'.$server.'","port": "'.$port.'"}}';
$file = fopen(__DIR__ ."/config.json", "w") or die("Unable to open file!");
fwrite($file, $content);
fclose($file);
//echo $content;
//echo $file;
header('Location:index.php');
?>
