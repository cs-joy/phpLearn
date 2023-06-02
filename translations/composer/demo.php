<?php
require __DIR__ . '/vendor/autoload.php'
Timer::start();
// your code
$time = Timer::stop();
var_dump($time);
print Timer::secondsToTimeString($time);
