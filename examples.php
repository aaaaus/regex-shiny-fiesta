<?php

$date = '201909'; //4 digit year, 2 digit month
//want to change format to first day of the month as YYYY-MM-DD
$first_day = preg_replace('/([0-9]{4})([0-9}{2})/', '$1-$2-01', $date); //result: 2019-09-01
//regex: two capturing groups used; first matches any character in the range of 0-9 for up to 4 matches (quantifier)
//second capturing set matches the same range, but for up to 2 matches

$amount = '1234'; //this is the desired display amount x 100
preg_replace( '/([0-9]{2})$/', ".$1", $amount ); //result: '12.34'
//regex: 1 capturing group used, looks for the final two digits to match a numeric range.
//php: replaces the last two digits with '.digits' to display as currency

