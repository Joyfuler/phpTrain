<?php
    $str = "2022-03-25 21:30:50";

    $year = substr($str, 0, 4);
    $month = substr($str, 5,2);
    $day = substr($str, 8, 2);
    $time = substr($str, 11);

    echo $year."-".$month." ".$day." ".$time;
?>