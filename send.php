<?php
$config_json = file_get_contents(__DIR__ ."/config.json");
$decoded_json = json_decode($config_json, true);
$config = $decoded_json['config'];
$from = $config['call'];

$partner = htmlspecialchars($_POST["partner"]);
$messages = $_POST["messages"];
$content = '{"msg": {"from": "'.$from.'","partner": "'.$partner.'","messages": "'.$messages.'"}}';
$file = fopen(__DIR__ ."/messages.json", "w") or die("Unable to open file!");
fwrite($file, $content);
fclose($file);
// echo $content;
// echo $file;

//Run the bash script
exec('bash $(pwd)/send.sh', $output);
echo "result:<br />";
//Print the ourput using loop
foreach($output as $value)
{
        echo $value."  ";
}
header('Location:messages.php');
?>
