<?php
function unique_names(array $array1, array $array2) : array
{
    $array = array_merge($array1, $array2);
    $unique = array_unique($array);
    return $unique;
}
$names = unique_names(['Ava', 'Emma', 'Olivia'], ['Olivia', 'Sophia', 'Emma']);
echo join(', ', $names); // should print Emma, Olivia, Ava, Sophia
