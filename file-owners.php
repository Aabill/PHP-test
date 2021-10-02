<?php 


function groupByOwners(array $files) : array
{
    $return = [];
    foreach ($files as $key => $value) {
        if (!isset($return[$value])) $return[$value] = array();
        array_push($return[$value], $key);
    }
    
    return $return;
}


$files = array
(
    "Input.txt" => "Randy",
    "Code.py" => "Stan",
    "Output.txt" => "Randy"
);
var_dump(groupByOwners($files));
