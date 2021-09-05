<?php

// method #1

//function remove_duplicate_words_from($sentence)
//{
//
//    $wordsList = explode(" ",$sentence);
//
//    $uniqueOnly = array_unique($wordsList);
//
//    $finalString = implode(" ",$uniqueOnly);
//
//    return $finalString;
//}
//
//echo remove_duplicate_words_from("THIS IS MY MY WORLD WORLD WORLD  ");

function remove_duplicate_words_from($sentence)
{

    return implode(" " , array_unique(explode(" " ,$sentence)));

}

echo remove_duplicate_words_from("THIS IS MY MY WORLD WORLD WORLD  ");