<?php

    date_default_timezone_set('Asia/Manila');
    echo "<br/>";
    $date = 'September 09,2024 07:30:00 AM';

    echo "<br/>";
    echo $date;
    echo "<br/>";

    echo date('m-d-Y H:i:s', strtotime($date));


?>