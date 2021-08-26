<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function buildArray($nums) {
        $result = [];
        foreach($nums as $num) {
            array_push($result, $nums[$num]);
        }
        return $result;
    }
}

?>