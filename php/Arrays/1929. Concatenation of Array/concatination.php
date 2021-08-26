<?php 

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function getConcatenation($nums) {
       $result = [];
        
        for($i=0; $i< count($nums); $i++) {
            $result[$i]= $nums[$i];
        }
        return array_merge($result, $result);
    }
}


?>