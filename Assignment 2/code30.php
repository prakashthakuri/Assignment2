<?php
$n=5;
for($i=0; $i<$n; $i++)
{
    for($j=1; $j<=$i; $j++)
    {
        echo ' * ';
    }
    echo '<br/>';
}
for($i=$n; $i>0; $i--)
{
    for($j=0; $j<$i; $j++)
    {
        echo ' * ';
    }
    echo '<br/> ';
}