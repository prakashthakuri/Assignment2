<?php
$table= 6;

echo "<table>";
for ($i= 1; $i<= 6; $i++) {
    echo "<tr> ";

    for ($j=1; $j <= 6; $j++) {


        $multiply = $i * $j."<br/>";
        echo "<td>". $multiply. "</td>";
    }

        }
echo "</table>";

