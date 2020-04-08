<?php
// Complete the sockMerchant function below.
function sockMerchant($n, $ar) {
    $ar_new = [];
    $count  = 0;
    $n = count($ar);
   if ( !empty($n) ) {
       # code...
       foreach($ar as $val){
           if (isset($ar_new[$val])){
               $count++;
               unset($ar_new[$val]);
           }
           else{
               $ar_new[$val] = 1;
           }
       }
   }
    return $count;
}

$socks = [10, 20, 20, 10, 10, 30, 50, 10, 20,10, 20, 20, 10, 10, 30, 50, 10, 20,10, 20, 20, 10, 10, 30, 50,]

$n = count($socks);
print_r(sockMerchant($n, $socks));
