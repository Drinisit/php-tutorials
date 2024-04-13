<?php

$dir = scandir(__DIR__);



var_dump(is_file($dir[2]));