<?php
$output = (system('sudo /usr/bin/php git pull origin master') ? 'yep' : 'nope');
echo $output;