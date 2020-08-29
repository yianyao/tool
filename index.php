<?php

require "vendor/autoload.php";

use tool\DateTime;

$dt = new DateTime;
echo $dt->format('now', 'Y-m-d');
