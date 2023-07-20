<?php

function combineListsAlternating($list1, $list2) {
    $combinedList = array();
    $maxLength = max(count($list1), count($list2));

    for ($i = 0; $i < $maxLength; $i++) {
        if (isset($list1[$i])) {
            $combinedList[] = $list1[$i];
        }
        if (isset($list2[$i])) {
            $combinedList[] = $list2[$i];
        }
    }

    return $combinedList;
}

// Example usage:
$list1 = array('a', 'b', 'c');
$list2 = array(1, 2, 3);
$result = combineListsAlternating($list1, $list2);
print_r($result); // Output: Array ( [0] => a [1] => 1 [2] => b [3] => 2 [4] => c [5] => 3 )

?>
