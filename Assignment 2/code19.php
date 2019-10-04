<?php
$date = strtotime("2019-09-28");
$futureDate = strtotime("2020-05-20");

$differences = abs($futureDate -$date); // abs for absolute value

//floor rounds up to the nearest integer
$years = floor($differences / (365*60*60*24));

$months = floor(($differences - $years  * 365*60*60*24)
                               / (30*60*60*24));
$days = floor(($differences - $years * 365*60*60*24 -
        $months*30*60*60*24)/ (60*60*24));

echo $years." years ". $months." months ". $days." days";