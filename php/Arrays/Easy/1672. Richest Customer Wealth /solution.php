<?php
class Solution {

/**
* @param Integer[][] $accounts
* @return Integer
*/

public $wealth;


function maximumWealth($accounts) {
foreach($accounts as $account) {
$temp=0;
foreach($account as $amount) {
$temp += $amount;
}
if ($temp > $wealth) {
$wealth = $temp;
}
}
return $wealth;
}
}