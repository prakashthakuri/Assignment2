<?php

$color = array('black', 'green','white', 'yellow', 'indigo', 'blue', 'purple', 'red');
sort($color);

$x = count($color);

for ($i = 0; $i < $x ; $i++) {
    echo "<ul>";
    echo "<li>". $color[$i] . "</li>";

    echo "</ul>";


}
