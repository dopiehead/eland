<?php

// Check if property_name is set and not empty
$property_name = isset($property['property_name']) && !empty($property['property_name']) ? $property['property_name'] : "N/A";

// Check if property_id is set and not empty
$property_id = isset($property['property_id']) && !empty($property['property_id']) ? (int)$property['property_id'] : "N/A"; // Cast to integer for validation

// Check if poster_id is set and not empty
$poster_id = isset($property['poster_id']) && !empty($property['poster_id']) ? (int)$property['poster_id'] : "N/A"; // Assuming poster_id should be an integer

// Check if poster_type is set and not empty
$poster_type = isset($property['poster_type']) && !empty($property['poster_type']) ? $property['poster_type'] : "N/A";

// Check if property_price is set and not empty
$property_price = isset($property['property_price']) && !empty($property['property_price']) ? $property['property_price'] : "N/A";

// Check if property_image is set and not empty (assuming it's a URL)
$property_image = isset($property['property_image']) && !empty($property['property_image']) ? $property['property_image'] : "N/A";

// Check if property_details is set and not empty
$property_details = isset($property['property_details']) && !empty($property['property_details']) ? $property['property_details'] : "N/A";

// Check if property_category is set and not empty
$property_category = isset($property['property_category']) && !empty($property['property_category']) ? $property['property_category'] : "N/A";

// Check if property_location is set and not empty
$property_location = isset($property['property_location']) && !empty($property['property_location']) ? $property['property_location'] : "N/A";

// Check if property_address is set and not empty
$property_address = isset($property['property_address']) && !empty($property['property_address']) ? $property['property_address'] : "N/A";

// Check if quantity_sold is set and not empty
$quantity_sold = isset($property['quantity_sold']) && !empty($property['quantity_sold']) ? (int)$property['quantity_sold'] : "N/A";

// Check if property_quantity is set and not empty
$property_quantity = isset($property['property_quantity']) && !empty($property['property_quantity']) ? (int)$property['property_quantity'] : "N/A";

// Check if property_size is set and not empty
$property_size = isset($property['property_size']) && !empty($property['property_size']) ? $property['property_size'] : "N/A";

// Check if sold is set and not empty
$sold = isset($property['sold']) && !empty($property['sold']) ? (int)$property['sold'] : "N/A";

// Check if property_views is set and not empty
$property_views = isset($property['property_views']) && !empty($property['property_views']) ? (int)$property['property_views'] : "N/A";

// Check if property_likes is set and not empty
$property_likes = isset($property['property_likes']) && !empty($property['property_likes']) ? (int)$property['property_likes'] : "N/A";

// Check if property_rating is set and not empty
$property_rating = isset($property['property_rating']) && !empty($property['property_rating']) ? $property['property_rating'] : "N/A";

// Check if property_discount is set and not empty
$property_discount = isset($property['property_discount']) && !empty($property['property_discount']) ? $property['property_discount'] : "N/A";

// Check if featured_product is set and not empty
$featured_product = isset($property['featured_product']) && !empty($property['featured_product']) ? $property['featured_product'] : "N/A";

// Check if date_added is set and not empty
$date_added = isset($property['date_added']) && !empty($property['date_added']) ? $property['date_added'] : "N/A"; // You can also validate date format if needed

?>
