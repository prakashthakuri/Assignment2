<?php

$string = "Haikus are easy.
But sometimes they don't make sense.
Refrigerator.
Advice for those in,
a difficult position.
First, be flexible.
I like kittens, YEAH!
They are really fluffy, YEAH!
OMG KITTENS.";

echo "This is a Regular string: ";

echo $string;
echo "<br/>";
echo "<br/>";

echo "This is all uppercase letters: ";
echo "<br/>";
echo "<br/>";

echo strtoupper($string);

echo "<br/>";
echo "<br/>";

echo "This is all lowercase letters: ";
echo "<br/>";
echo "<br/>";

echo strtolower($string);

echo "<br/>";
echo "<br/>";

echo "This is first charter of string to Uppercase: ";
echo "<br/>";
echo "<br/>";

echo ucfirst($string);

echo "<br/>";
echo "<br/>";

echo "This is first charter of string to Lowercase: ";
echo "<br/>";
echo "<br/>";

echo lcfirst($string);