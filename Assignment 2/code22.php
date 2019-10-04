<?php

$italy = new DateTime('now', new DateTimeZone('Europe/Rome'));
echo "Italy Time: ";
echo $italy -> format('F j,Y,g:i a') ;
echo "<br/>";
echo "<br/>";

$est = new DateTime('now', new DateTimeZone('America/New_York'));
echo "EST Time: ";

echo $est -> format('F j,Y,g:i a') ;
