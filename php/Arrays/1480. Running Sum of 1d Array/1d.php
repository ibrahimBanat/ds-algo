<?php


class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function runningSum($nums) {
            $result = [];
            $total = 0;

        foreach($nums as $num) {
            array_push($result, $num+$total);
            $total += $num;
        }
        return $result;
    }
}