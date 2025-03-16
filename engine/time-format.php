<?php
function time_format_start($time) {
    // Convert the original date string to a DateTime object
    $original_date = DateTime::createFromFormat("Y-n-j h:ia", $time);
    
    // Check if parsing was successful
    if ($original_date === false) {
        return "Invalid date format";
    }

    // Format the date to "December 31, 2024 23:59:59" style
    return $original_date->format("F j, Y H:i:s");
}

?>


<?php

function time_format_end($time) {
    // Convert the original date string to a DateTime object
    $original_date = DateTime::createFromFormat("Y-n-j h:ia", $time);
    
    // Check if parsing was successful
    if ($original_date === false) {
        return "Invalid date format";
    }

    // Format the date to "December 31, 2024 23:59:59" style
    return $original_date->format("F j, Y H:i:s");
}


?>



