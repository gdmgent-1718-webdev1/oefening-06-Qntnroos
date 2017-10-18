<?php


$month = date('F');
$currentMonth=date("m");
IF ($currentMonth>="03" && $currentMonth<="05")
 $season = "spring";
ELSEIF ($currentMonth>="06" && $currentMonth<="08")
 $season = "summer";
ELSEIF ($currentMonth>="09" && $currentMonth<="11")
 $season = "fall";
ELSE
 $season = "winter";
echo 'Current month is: ' . $month . '<br>';
echo 'Current season is: ' . $season;