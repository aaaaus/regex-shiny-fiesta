<?php

$date = '201909' //4 digit year, 2 digit month
//want to change format to first day of the month as YYYY-MM-DD
$first_day = preg_replace('/([0-9]{4})([0-9}{2})/', '$1-$2-01', $date);
//regex: two capturing groups used; first matches any character in the range of 0-9 for up to 4 matches (quantifier)
//second capturing set matches the same range, but for up to 2 matches
