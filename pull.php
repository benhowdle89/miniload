<?php
//$output = exec('sudo git pull origin master');
$output = exec('git status');
//$output = exec('touch test.txt');
echo $output;