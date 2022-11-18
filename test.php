<?php
function revertCharacters ($testString){
    $testString= iconv('utf-8', 'windows-1251', $testString);
    $testString=strrev($testString);
    $testString = iconv('windows-1251', 'utf-8', $testString);
    return $testString;
}


?>  