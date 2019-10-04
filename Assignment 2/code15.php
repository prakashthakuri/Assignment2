<?php
$key = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz!@#$^&*()_+=-?><,.;';

$password = str_shuffle($key);
echo $password;