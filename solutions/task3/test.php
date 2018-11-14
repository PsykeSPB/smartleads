<?php

require_once('FileLineIterator.php');

$iterator = new FileLineIterator('text.txt');

$start_time = new DateTime();

for ($i = 0; $i <= 10; $i++) {
    $n = rand(1,65536);
    $iterator->seek($n);
    echo "[ line:".$n." ]".$iterator->current().PHP_EOL;
}

$iterator->close();

echo '--------------------'.PHP_EOL."Overal time spent: ".
    ($start_time->diff(new DateTime()))->format("%S sec : %f msec").PHP_EOL;