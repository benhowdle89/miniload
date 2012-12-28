<?php
$output = exec('sudo -u www-data git pull origin master');
//$output = exec('git status');
//$output = exec('touch test.txt');
echo $output;