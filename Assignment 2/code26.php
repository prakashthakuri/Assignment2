<?php

$marks1 = array(360,310,310,330,313,375,456,111,256);
$marks2 = array(350,340,356,330,321);
$marks3 = array(630,340,570,635,434,255,298);

echo "Marks 1: ". implode(" ", $marks1)."<br/> <br/>";
echo "Marks 2: ".implode(" ", $marks2)."<br/> <br/>";

echo "Marks 3: ".implode(" ", $marks3)."<br/> <br/>";




$maximum = max(max($marks1),max($marks2),max($marks3));
$minimum = min(min($marks1),min($marks2),min($marks3));
echo "Maximum marks : ".$maximum."<br/>";
echo "Minimum marks : ".$minimum;