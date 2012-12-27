<?php
$output = (system('/usr/bin/php git pull origin master') ? 'yep' : 'nope');
echo $output;