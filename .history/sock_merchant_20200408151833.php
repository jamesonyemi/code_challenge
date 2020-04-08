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
   } else {
       $arr
   }
    return $count;
}

$socks = [];
$n     = count($socks);
print_r(sockMerchant($n, $socks));
