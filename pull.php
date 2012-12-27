<?php
$output = exec('sudo -u git pull origin master');
//$output = exec('git status');
//$output = exec('touch test.txt');
echo $output;