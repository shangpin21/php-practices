<?php

function reverse($str){
    $strArr = str_split($str);
    $rStr = array();

    for($i = count($strArr) - 1; $i >= 0; $i--){
        $rStr[] = $strArr[$i];
    }
    return implode('', $rStr);
}

echo reverse('H');

?>