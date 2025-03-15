<?php

function daysAgo($date) {

     $timestamp = strtotime($date);   
     $currentTimestamp = time();
     $diffInSeconds = $currentTimestamp - $timestamp;
     $diffInDays = floor($diffInSeconds / (60 * 60 * 24));
     return $diffInDays . ' days ago';

}

?>
