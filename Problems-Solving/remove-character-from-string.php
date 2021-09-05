<?php

// method #1 - simple

//function remove_char_from($word , $c)
//{
//
//    return str_replace(array(strtolower($c) , strtoupper($c)) , "" , $word);
//
//}
//
//echo remove_char_from("ThissS is my world" ,"s");

// method #2 fundamental solution

function remove_char_from($word , $c)
{

    $charsList = str_split($word);

//    echo '<pre>';
//    print_r($charsList);
//    echo '</pre>';
    $newWord = "";
    foreach ($charsList as $char) :

    if ($char !== strtolower($c) && $char !== strtoupper($c))
    {
        $newWord .= $char;
    }

    endforeach;

    return $newWord . "<br />";

}

echo remove_char_from("ThXxisX is my world" ,"x");