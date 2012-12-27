<?php
$output = (shell_exec('/usr/bin/php git pull origin master') ? 'yep' : 'nope');
echo $output;
phpinfo();