<?php
     function contain($num, $element) {
         return $num($element);
     }

     $num = function ($element) {
            return true;
     };
     //echo contain($num,1000);

function getGreaterThan($min) {
    return function ($item) use ($min) {
        return $item > $min;
    };
}

$input = array(1,2,3,4,5,6,7);
$output = array_filter($input, getGreaterThan(2));

print_r($output);

echo rand(0,9);
//echo $nw;

class FindEffect {
    function makeSquareEffect() {
        $sideEffect = function($stuff) {
            return $stuff * $stuff;
        };
        echo "The square value is: ". $sideEffect(8) . "<p />";
    }
}

$worker = new FindEffect();
$worker->makeSquareEffect();