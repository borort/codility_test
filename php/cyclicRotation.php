<?php
  
function solution($A, $K) {

    for($i=0; $i<$K; $i++) {

        $last_element = end($A);
        array_unshift($A, $last_element);
        array_pop($A);

    }

    return $A;


}

$A = [1, 2, 3, 4];
$K = 4;
print_r(solution($A, $K));