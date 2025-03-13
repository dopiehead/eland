<?php
// Sanitize feature_id (ensure it's a valid integer)
$feature_id = isset($feature['id']) && !empty($feature['id']) ? (int)$feature['id'] : "N/A";

// Sanitize feature_product_id (ensure it's a valid integer)
$feature_product_id = isset($feature['product_id']) && !empty($feature['product_id']) ? (int)$feature['product_id'] : "N/A";

// Sanitize option_feature_1, check if set, then clean up
$feature_option_1 = isset($feature['option_feature_1']) && !empty($feature['option_feature_1']) ? filter_var($feature['option_feature_1'], FILTER_SANITIZE_STRING) : "";

// Sanitize option_feature_2, check if set, then clean up
$feature_option_2 = isset($feature['option_feature_2']) && !empty($feature['option_feature_2']) ? filter_var($feature['option_feature_2'], FILTER_SANITIZE_STRING) : "";

// Sanitize option_feature_3, check if set, but default to empty string
$feature_option_3 = isset($feature['option_feature_3']) ? filter_var($feature['option_feature_3'], FILTER_SANITIZE_STRING) : "";

// Sanitize option_feature_4, check if set, and sanitize the string
$feature_option_4 = isset($feature['option_feature_4']) && !empty($feature['option_feature_4']) ? filter_var($feature['option_feature_4'], FILTER_SANITIZE_STRING) : "N/A";
?>
