<?php

$range = range(14, 86);

shuffle($range);

for ($x = 0; $x <10; $x++)
{
    echo $range[$x]. " ";

}
