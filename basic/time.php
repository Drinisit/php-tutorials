<?php

$currentTime = time();

echo $currentTime . "<br>";

echo $currentTime + 5 * 24 * 60 * 60 . "<br>";

echo $currentTime - 60 * 60 * 24 . "<br>";

echo date("m/d/Y g:ia"). "<br>";
echo date("m/d/Y g:ia", $currentTime + 5 * 24 * 60 * 60);

date_default_timezone_set('UTC');
echo $currentTime + 5 * 24 * 60 * 60 . "<br>";

echo $currentTime - 60 * 60 * 24 . "<br>";

echo date("m/d/Y g:ia"). "<br>";
echo date("m/d/Y g:ia", $currentTime + 5 * 24 * 60 * 60);