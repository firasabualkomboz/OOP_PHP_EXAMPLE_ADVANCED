<?php

function add_commas_and_underscore($num)
{

//    $result = number_format($num , 4 , "." ,",");
    $result = number_format($num);
    if (strlen($result) > 3 )
    {
        $result[-4] = "_";
    }

    return $result . "<br />";


}

echo add_commas_and_underscore(100);
echo add_commas_and_underscore(100100100);
echo add_commas_and_underscore(125900500);
echo add_commas_and_underscore(1254);