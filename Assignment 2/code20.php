<?php
$date = date_create("2019-10-13");
$format = date_format($date, "d/m/Y");
//echo str($date);

echo "<br/>Date Formatting <br/>";
echo $format;