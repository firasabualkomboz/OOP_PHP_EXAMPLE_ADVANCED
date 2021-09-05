<?php

function longest_word_in($sentence)
{

    $wordsList = explode(" " , $sentence);
//        echo '<pre>';
//        print_r($wordsList);
//        echo '</pre>';
    $longestWord = '';
    foreach ($wordsList as $word) :

        if(strlen($word) > strlen($longestWord))
        {
            $longestWord = $word;
        }

    endforeach;

    return $longestWord;
}

echo longest_word_in("this is my wooorrrrd");