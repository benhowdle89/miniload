<?php

$output = shell_exec('git pull origin master');
echo $output;
phpinfo();