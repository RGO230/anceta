<?php


function revertCharacters ($testString){
    $testString= iconv('utf-8', 'windows-1251', $testString);
    $my_array=[];
    // $sentences = preg_split('/(?<=[.?!])\s+(?=[a-zа-яё])/i', $testString);
    $sentences = preg_split('/\s/i', $testString);
   
    
    foreach ($sentences as $sentence){
        
        $sentence=strrev($sentence);
        if($sentence[0]=='.'|| $sentence[0]=='!' || $sentence[0]=='?'){
            $sentence=$sentence . $sentence[0];
            mb_internal_encoding("UTF-8");
            $sentence = substr($sentence,1 );
            if($sentence[0]=='.'){
                $sentence = substr($sentence,1 );
                if($sentence[0]=='.'){
                    $sentence = substr($sentence,1 );
                }
            }
            



        }
        
        
        array_push($my_array,ucfirst(strtolower($sentence)));
        
       
    }
    
    $my_array1=[];
    $newString=implode(' ',$my_array);
    $dones = preg_split('/(?<=[.?!])\s+(?=[a-zа-яё])/i', $newString);
    foreach($dones as $done ){
        array_push($my_array1,ucfirst(strtolower($done)));
    }
    $doneOne = implode(' ', $my_array1);
    $doneOne=iconv('windows-1251', 'utf-8', $doneOne);
    echo $doneOne;
  
   

    

}

$a = revertCharacters('Привет! Давно не виделись')

?>  