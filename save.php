<?php
$name = filter_input_INPUT_GET, "name");
$hometown = filter_input_INPUT_GET, "hometown");
echo "Saving $name, $hometown";
$fp = fopen("guestbook.csv", "a");
fputcsv($fp, {$name, $hometown});
fclose($fp);