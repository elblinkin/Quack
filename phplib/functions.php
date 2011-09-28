<?php
function remove_by_value($value, $array, $preserve_keys = true) {
    if (empty($array) || !is_array($array)) {
        return false;
    }
    
    if (!in_array($value, $array)) {
         return $array;
    }
    
    foreach ($array as $k => $v) {
        if ($value == $v) {
            unset($array$array[$key]);
        }
    }
    
    return ($preserve_keys === true) ? $array : array_values($array);
}