<?php
$examplePath = 'DDUUUUDD';
$len         = strlen($examplePath);
    
echo countingValleys($len, $examplePath);

/* 
Assumptions for countingValleys function:
 1. $n:
     1.a. Represents the number of steps that were taken
     1.b. Is the actual length of $s (derived from strlen($s))
     1.c. Range is between: 2 <= n <= pow(10,6)
 2. $s values are:
     2.a. Represents uphills ('U') and downhills ('D')
     2.b. Valid ( 'D' === strtoupper(a[i]) || 'U' === strtoupper(a[i]) ) 
     2.c. Strings ( gettype(a[i]) === 'string' ) | i: 0 to $n
*/

// Returns number of valleys in $s

function countingValleys($n, $s) {
    $valleys = $altitude = 0; // Default value
    
    if (gettype($n) !== 'integer' || !$n || $n % 2 || gettype($s) !== 'string') {
		return $valleys; // Return default function value
	}
    
    $s = strtolower($s); // Turn 'DDUU...' into 'dduu...'
    
    for ($i = 0; $i < $n; $i++) {
        $step = $s[$i];
        if ($altitude === -1 && $step === 'u') {
            $valleys++;
        }
        $altitude += -1 * ($step === 'd') + 1 * ($step === 'u');
    }
    
    return $valleys;
}
?>