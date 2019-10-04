<?php
$prime_sum = 0;
for ($i = 2; $i<100;$i++) {
    $count = 0;
    for ($j =2; $j <=($i/2); $j++) {

        if ($i%$j==0) {

            $prime_sum++;
        }

        if ($count == 2)
        {
            echo $i;
            $prime_sum += $i;
        }

    }
    echo $prime_sum;

}
