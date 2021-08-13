<?php
// while loop

$number = 1;
while($number < 10){

    echo "This is Number "  . $number .'<br>';
    $number++;
}

// for 

for($i=0; $i < 10 ; $i++)
{
    echo "Counter" . $i ."<br>";

}

// foreach 

$family = ["qasem","feras","sameer"];
foreach($family as $i => $item_family){
    echo $i .' ' . $item_family . '<br>';
}


// check if with foreach 

$drinks = [
    
    "coka" => 'branc',
    "orange" => 'type',
    "spritre"   => "teser",

];
foreach ($drinks as $key =>  $item_drinks){
    if($key === 'coka') break;
    echo $item_drinks ."<br>";
}

// other example foreach

$tech = ['web' , 'mobile','design'];

foreach ($tech as $item){
    echo "loop $item " ."<br>";
}

// break statement

$number_a = 0;

while ($number_a < 20) {
    $number_a++;
    if( $number_a == 10 ) break;

}
echo "stop $number_a ";