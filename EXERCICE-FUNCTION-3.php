<?php

function pairImpair ($tab) {

    $tabPair= array();
    $tabImPair= array();
    foreach ( $tab as $value ) {
        if ($value%2==0) {
            array_push($tabPair, $value);
        }
        else  array_push($tabImPair, $value);
    }
   print_r($tab);
       print_r($tabPair);
           print_r($tabImPair);
}

$tableau = array(7,8,9,10);
echo pairImpair($tableau);


