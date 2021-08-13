<?php
//  if condition 
$user_name = "gaza";
$first_name = "feras";
if($user_name == "feras" || $first_name == "feras"){

    echo "this is condition true";
}else
{
    echo "this is false";

}

// ternary 

$level = 4;

echo  $level > 2 ? "enjoy" : "oh no";


// switch 
echo"<br>";

$std_major = "asdasdsd";

switch($std_major){
    case 'webdev';
    echo "wow you ar a web developer";
    break;
    case 'mobile';
    echo "wow you ar a mobile";
    break;
    case 'fluter';
    echo "wow you ar a flutter developer";
    break;
    default;
    echo "other developer";

}
