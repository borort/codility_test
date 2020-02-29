<?php

function solution($N) {

    $bin_v = decbin($N);
    $bin_v_trim = trim($bin_v, '0');
    $bin_v_explodeds = explode('1', $bin_v_trim);
    $l = 0;

    foreach($bin_v_explodeds as $k=>$v) {
        if(strlen($v) > $l) {
            $l = strlen($v);
        }
    }
    //return $bin_v;
    //return $bin_v_explodeds;
    return $l;

}

//echo solution(13);
echo decbin(483);
echo "\n";
print_r(solution(483));

?>