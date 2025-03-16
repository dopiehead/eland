
<?php

function time_ago($date) {
    // Create DateTime objects for the current time and the input date
    $now = new DateTime();
    $ago = new DateTime($date);
    
    // Subtract 1 hour from the current time
    $now->modify('-1 hour');
    
    // Calculate the time difference
    $interval = $now->diff($ago);
    
    // Determine the time ago
    if ($interval->y > 0) {
        return ($interval->y == 1) ? "A year ago" : $interval->y . " years ago";
    } elseif ($interval->m > 0) {
        return ($interval->m == 1) ? "A month ago" : $interval->m . " months ago";
    } elseif ($interval->d > 0) {
        return ($interval->d == 1) ? "Yesterday" : $interval->d . " days ago";
    } elseif ($interval->h > 0) {
        return ($interval->h == 1) ? "An hour ago" : $interval->h . " hours ago";
    } elseif ($interval->i > 0) {
        return ($interval->i == 1) ? "A minute ago" : $interval->i . " minutes ago";
    } else {
        return ($interval->s <= 5) ? "Just now" : $interval->s . " seconds ago";
    }
}

?>