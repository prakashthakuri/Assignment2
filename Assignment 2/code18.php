<?php

$birthday = mktime(0,0,0,10,13, date('Y'));
$currentDay = time();
$differences = $birthday - $currentDay;

$daysRemaining = (int)($differences/86400); //total seconds in 1 days

echo "Days remaining for my birthday is ".$daysRemaining. " days";