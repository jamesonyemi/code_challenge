<?php

/*
 * Complete the 'gradingStudents' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY grades as parameter.
 */

function gradingStudents($grades) {
    // Write your code here
     $isRoundedGrade = [];
    for ($i = 0; $i < count($grades); $i++) {
        $difference = IsMultipleOfFive($grades[$i]);
        $finalGrade = $difference + $grades[$i];
        
        if (($difference < 3) && ($finalGrade >= 40)) {
            array_push($isRoundedGrade,$finalGrade);
        } else {
            array_push($isRoundedGrade,$grades[$i]);
        }
    }
    return $isRoundedGrade;
}

function IsMultipleOfFive($x) {
    $counter = 0;
    while ($x % 5 != 0) {
        $x++;
        $counter++;
    }
    return $counter;
}


$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$grades_count = intval(trim(fgets(STDIN)));

$grades = array();

for ($i = 0; $i < $grades_count; $i++) {
    $grades_item = intval(trim(fgets(STDIN)));
    $grades[] = $grades_item;
}

$result = gradingStudents($grades);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($fptr);