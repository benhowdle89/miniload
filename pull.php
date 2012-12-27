<?php

$output = (exec('git pull origin master') ? 'yep' : 'nope');
echo $output;