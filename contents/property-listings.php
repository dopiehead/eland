<?php

// Sanitize and check if property_name is set and not empty
$property_name = isset($property['property_name']) && !empty($property['property_name']) ? filter_var($property['property_name'], FILTER_SANITIZE_STRING) : "N/A";

// Sanitize and validate property_id (ensure it's a valid integer)
$property_id = isset($property['property_id']) && !empty($property['property_id']) ? (int)$property['property_id'] : "N/A"; // Cast to integer for validation

// Sanitize and check if poster_id is set and not empty
$poster_id = isset($property['poster_id']) && !empty($property['poster_id']) ? (int)$property['poster_id'] : "N/A"; // Assuming poster_id should be an integer

// Sanitize and check if poster_type is set and not empty
$poster_type = isset($property['poster_type']) && !empty($property['poster_type']) ? filter_var($property['poster_type'], FILTER_SANITIZE_STRING) : "N/A";

// Sanitize and validate property_price (ensure it's a valid number)
$property_price = isset($property['property_price']) && !empty($property['property_price']) ? filter_var($property['property_price'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION) : "N/A";

// Sanitize and check if property_image is set and not empty (assuming it's a URL)
$property_image = isset($property['property_image']) && !empty($property['property_image']) ? filter_var($property['property_image'], FILTER_SANITIZE_URL) : "N/A";

// Sanitize and check if property_details is set and not empty
$property_details = isset($property['property_details']) && !empty($property['property_details']) ? filter_var($property['property_details'], FILTER_SANITIZE_STRING) : "N/A";

// Sanitize and check if property_category is set and not empty
$property_category = isset($property['property_category']) && !empty($property['property_category']) ? filter_var($property['property_category'], FILTER_SANITIZE_STRING) : "N/A";

// Sanitize and check if property_location is set and not empty
$property_location = isset($property['property_location']) && !empty($property['property_location']) ? filter_var($property['property_location'], FILTER_SANITIZE_STRING) : "N/A";

// Sanitize and check if property_address is set and not empty
$property_address = isset($property['property_address']) && !empty($property['property_address']) ? filter_var($property['property_address'], FILTER_SANITIZE_STRING) : "N/A";

// Sanitize and validate quantity_sold (ensure it's a valid integer)
$quantity_sold = isset($property['quantity_sold']) && !empty($property['quantity_sold']) ? (int)$property['quantity_sold'] : "N/A";

// Sanitize and validate property_quantity (ensure it's a valid integer)
$property_quantity = isset($property['property_quantity']) && !empty($property['property_quantity']) ? (int)$property['property_quantity'] : "N/A";

// Sanitize and check if property_size is set and not empty
$property_size = isset($property['property_size']) && !empty($property['property_size']) ? filter_var($property['property_size'], FILTER_SANITIZE_STRING) : "N/A";

// Sanitize and validate sold (ensure it's a valid integer)
$sold = isset($property['sold']) && !empty($property['sold']) ? (int)$property['sold'] : "N/A";

// Sanitize and validate property_views (ensure it's a valid integer)
$property_views = isset($property['property_views']) && !empty($property['property_views']) ? (int)$property['property_views'] : "N/A";

// Sanitize and validate property_likes (ensure it's a valid integer)
$property_likes = isset($property['property_likes']) && !empty($property['property_likes']) ? (int)$property['property_likes'] : "N/A";

// Sanitize and validate property_rating (ensure it's a valid float)
$property_rating = isset($property['property_rating']) && !empty($property['property_rating']) ? filter_var($property['property_rating'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION) : "N/A";

// Sanitize and validate property_discount (ensure it's a valid float)
$property_discount = isset($property['property_discount']) && !empty($property['property_discount']) ? filter_var($property['property_discount'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION) : "N/A";

// Sanitize and check if featured_product is set and not empty
$featured_product = isset($property['featured_product']) && !empty($property['featured_product']) ? filter_var($property['featured_product'], FILTER_SANITIZE_STRING) : "N/A";

// Sanitize and validate date_added (ensure it's a valid date or fallback to "N/A")
$date_added = isset($property['date_added']) && !empty($property['date_added']) ? filter_var($property['date_added'], FILTER_SANITIZE_STRING) : "N/A"; // You can also validate date format if needed
?>
