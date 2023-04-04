<?php
//Run the bash script
exec('bash $(pwd)/beacon.sh', $output);
echo "result:<br />";
//Print the ourput using loop
foreach($output as $value)
{
        echo $value."  ";
}
header('Location:index.php');
?>
