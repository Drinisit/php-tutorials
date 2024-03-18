<?php

    $first_name = "Aldrin Ade";
    $middle_name = "Javier";
    $last_name = "Aldrin Isit";
    $age = 27;

    $old = str_replace(" ","",$first_name);

    echo strlen($old);
    echo "<br />";
    echo strpos($last_name, "Isit");
?>