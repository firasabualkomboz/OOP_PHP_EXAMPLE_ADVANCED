<?php

        function convert($n)
        {
            // convert to array
            $arrayOfStrings = str_split($n);
            //convert array elements -> to int
            // start method #1
            $array = array_map("intval" , $arrayOfStrings);
            $array = array_reverse($array);
            return $array;
            // end method #1

            // start method #2
            $empty = [];
            foreach ($arrayOfStrings as $str):
                array_unshift($empty,intval($str)); // intval -> return integer for strings
                // array_push($empty,intval($str)); // or array push
            endforeach;
            return $empty;
        }

        echo '<pre>';
        var_dump(convert(987654321));
        echo '</pre>';