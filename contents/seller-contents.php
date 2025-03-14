<?php
// Sanitize and check if seller's id is set, if not, set to null
$seller_details = isset($seller['id']) ? (int)$seller['id'] : null;

// Sanitize and check if seller's name is set, if not, set to 'N/A'
$seller_details_name = isset($seller['user_name']) && !empty($seller['user_name']) ? filter_var($seller['user_name'], FILTER_SANITIZE_STRING) : 'N/A';

// Sanitize and check if seller's email is set, if not, set to 'N/A'
$seller_details_email = isset($seller['user_email']) && !empty($seller['user_email']) ? filter_var($seller['user_email'], FILTER_SANITIZE_EMAIL) : 'N/A';

// Sanitize and check if seller's type is set, if not, set to 'N/A'
$seller_details_type = isset($seller['user_type']) && !empty($seller['user_type']) ? filter_var($seller['user_type'], FILTER_SANITIZE_STRING) : 'N/A';

// Sanitize and check if seller's image is set, if not, use 'default.jpg'
$seller_details_image = isset($seller['user_image']) && !empty($seller['user_image']) ? filter_var($seller['user_image'], FILTER_SANITIZE_URL) : 'default.jpg';

// Sanitize and check if seller's phone number is set, if not, set to 'N/A'
$seller_details_phone = isset($seller['user_phone']) && !empty($seller['user_phone']) ? filter_var($seller['user_phone'], FILTER_SANITIZE_STRING) : 'N/A';

// Sanitize and check if seller's location is set, if not, set to 'Unknown'
$seller_details_location = isset($seller['user_location']) && !empty($seller['user_location']) ? filter_var($seller['user_location'], FILTER_SANITIZE_STRING) : 'Unknown';

// Sanitize and check if seller's address is set, if not, set to 'Unknown'
$seller_details_address = isset($seller['user_address']) && !empty($seller['user_address']) ? filter_var($seller['user_address'], FILTER_SANITIZE_STRING) : 'Unknown';

// Sanitize and check if seller's rating is set, if not, set to 0
$seller_details_rating = isset($seller['user_rating']) && !empty($seller['user_rating']) ? (float)$seller['user_rating'] : 0;

// Sanitize and check if seller's verification status is set, if not, set to 0 (unverified)
$seller_details_verified = isset($seller['verified']) ? (int)$seller['verified'] : 0;

// Sanitize and check if seller's date added is set, if not, set to current date and time
$seller_details_date_added = isset($seller['date_added']) && !empty($seller['date_added']) ? filter_var($seller['date_added'], FILTER_SANITIZE_STRING) : date("Y-m-d H:i:s");
?>
